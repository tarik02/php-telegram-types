<?php

namespace Tarik02\TelegramTypesGenerator;

use Illuminate\Support\Str;
use InvalidArgumentException;
use Jenssegers\Blade\Blade;

/**
 * Class TypesGenerator
 * @package Tarik02\TelegramTypesGenerator
 */
final class TypesGenerator
{
    /**
     * @var array
     */
    protected array $apiData;

    /**
     * @var string
     */
    protected string $outputBase;

    /**
     * @var Blade
     */
    protected Blade $blade;

    /**
     * @var array
     */
    protected $generatedCollections = [];

    /**
     * @var array
     */
    protected $entityMap = [];

    /**
     * @var array
     */
    protected $parentEntityMap = [];

    /**
     * @param array $apiData
     * @param string $outputBase
     * @return void
     */
    public function __construct(
        array $apiData,
        string $outputBase
    ) {
        $this->apiData = $apiData;
        $this->outputBase = $outputBase;

        $this->blade = new Blade(__DIR__ . '/stubs', '/tmp');
        $this->blade->compiler()->setEchoFormat('%s');
    }

    /**
     * @return void
     */
    public function generate(): void
    {
        foreach ($this->apiData['objects'] as $entity) {
            $type = $entity['type'] ?? '';

            $this->entityMap[$entity['name']] = $entity;

            if ($type === 'any_of') {
                foreach ($entity['any_of'] as $concrete) {
                    $this->parentEntityMap[$concrete['reference']] = $entity['name'];
                }
            }
        }

        $this->copy('files/Collections/Collection.php', 'Collections/Collection.php');
        $this->copy('files/Collections/CollectionIterator.php', 'Collections/CollectionIterator.php');
        $this->copy('files/Contracts/Payloadable.php', 'Contracts/Payloadable.php');
        $this->copy('files/Contracts/Response.php', 'Contracts/Response.php');
        $this->copy('files/Methods/HasRequiredChatId.php', 'Methods/HasRequiredChatId.php');
        $this->copy('files/Methods/HasRequiredChatIdTrait.php', 'Methods/HasRequiredChatIdTrait.php');
        $this->copy('files/Methods/Method.php', 'Methods/Method.php');

        $this->render(
            'TelegramTypes',
            'TelegramTypes',
            [
                'version' => $this->apiData['version'],
                'recentChanges' => $this->apiData['recent_changes'],
            ]
        );
        $this->render(
            'Contracts/CallsMethods',
            'Contracts/CallsMethods',
            [
                'methods' => $this->apiData['methods'],
            ]
        );
        $this->render(
            'Contracts/CallsAsyncMethods',
            'Contracts/CallsAsyncMethods',
            [
                'methods' => $this->apiData['methods'],
            ]
        );

        $this->render(
            'Traits/CallsMethods',
            'Traits/CallsMethods',
            [
                'methods' => $this->apiData['methods'],
            ]
        );
        $this->render(
            'Traits/CallsAsyncMethods',
            'Traits/CallsAsyncMethods',
            [
                'methods' => $this->apiData['methods'],
            ]
        );
        $this->render(
            'Traits/HandlesUpdate',
            'Traits/HandlesUpdate',
            [
                'updateTypes' => \array_map(
                    fn (array $property) => [
                        'name' => Str::camel($property['name']),
                        'class' => $property['reference'],
                    ],
                    \array_filter(
                        $this->entityMap['Update']['properties'],
                        fn (array $property) => $property['name'] !== 'update_id'
                    )
                ),
            ]
        );

        foreach ($this->apiData['objects'] as $entity) {
            $type = $entity['type'] ?? '';

            if ($type === 'properties' || $type === 'any_of') {
                $concreteDetect = ($type === 'any_of'
                    ? $this->makeConcreteDetect($entity)
                    : null
                );

                $this->render(
                    'Entities/' . $entity['name'],
                    $type === 'any_of' ? 'Entities/BaseEntity' : 'Entities/Entity',
                    [
                        'entity' => $entity,
                        'parent' => (isset($this->parentEntityMap[$entity['name']])
                            ? '\Tarik02\Telegram\Entities\\' . $this->parentEntityMap[$entity['name']]
                            : null
                        ),
                        'concreteDetect' => $concreteDetect,
                    ]
                );

                $this->generateCollection(
                    $entity['name'] . 'Collection',
                    '\Tarik02\Telegram\Entities\\' . $entity['name']
                );
            }
        }

        foreach ($this->apiData['methods'] as $method) {
            $class = \ucfirst($method['name']);

            $interfaces = [];
            $traits = [];

            foreach ($method['arguments'] ?? [] as $argument) {
                if ($argument['name'] === 'chat_id') {
                    if (
                        $argument['required'] &&
                        $argument['type'] === 'any_of' &&
                        $argument['any_of'] === [['type' => 'integer'], ['type' => 'string']]
                    ) {
                        $interfaces[] = '\Tarik02\Telegram\Methods\HasRequiredChatId';
                        $traits[] = '\Tarik02\Telegram\Methods\HasRequiredChatIdTrait';
                    }
                }
            }

            $this->render(
                'Methods/' . $class,
                'Methods/Method',
                [
                    'class' => $class,
                    'method' => $method,
                    'interfaces' => $interfaces,
                    'traits' => $traits,
                ]
            );
        }

        foreach ($this->generatedCollections as $name => $item) {
            $this->render(
                'Collections/' . $name,
                'Collections/Collection',
                [
                    'name' => $name,
                    'item' => $item,
                    'hasHigherOrderCollection' => isset($this->generatedCollections[$name . 'Collection']),
                ]
            );
        }
    }

    /**
     * @param string $from
     * @param string $to
     * @return void
     */
    protected function copy(string $from, string $to): void
    {
        $outputPath = "{$this->outputBase}/{$to}";

        self::mkdirp(\dirname($outputPath));

        \copy(__DIR__ . '/' . $from, $outputPath);
    }

    /**
     * @param string $outputName
     * @param string $stub
     * @param array $data
     * @return void
     */
    protected function render(string $outputName, string $stub, array $data = []): void
    {
        $outputPath = "{$this->outputBase}/{$outputName}.php";

        self::mkdirp(dirname($outputPath));

        \file_put_contents(
            $outputPath,
            $this->blade->render(
                $stub,
                \array_merge(
                    $data,
                    [
                        'generator' => $this,
                    ]
                )
            )
        );
    }

    /**
     * @param array $entity
     * @return array|null
     */
    public function makeConcreteDetect(array $entity): ?array
    {
        $commonFields = null;
        foreach ($entity['any_of'] as $concreteRef) {
            if (! isset($concreteRef['reference'])) {
                continue;
            }

            $concrete = $this->entityMap[$concreteRef['reference']];

            if (! isset($concrete['properties'])) {
                continue;
            }

            if ($commonFields === null) {
                $commonFields = \array_column($concrete['properties'], 'name');
            } else {
                $commonFields = \array_intersect(
                    $commonFields,
                    \array_column($concrete['properties'], 'name')
                );
            }
        }
        $commonFields = \array_flip($commonFields ?? []);

        $valueToConcreteMap = [];

        foreach ($entity['any_of'] as $concreteRef) {
            if (! isset($concreteRef['reference'])) {
                continue;
            }

            $concrete = $this->entityMap[$concreteRef['reference']];

            if (! isset($concrete['properties'])) {
                continue;
            }

            foreach ($concrete['properties'] as $property) {
                if (! isset($commonFields[$property['name']])) {
                    continue;
                }

                if (\preg_match('/must be \*([^*]+)\*/', $property['description'], $matches) === 0) {
                    unset($commonFields[$property['name']]);
                    unset($valueToConcreteMap[$property['name']]);
                    continue;
                }

                $value = \stripcslashes($matches[1]);

                $valueToConcreteMap[$property['name']][$value] = '\Tarik02\Telegram\Entities\\' . $concrete['name'];
            }
        }

        if (\count($valueToConcreteMap) !== 1) {
            return null;
        }

        $key = \array_keys($valueToConcreteMap)[0];
        $map = $valueToConcreteMap[$key];

        return [
            'key' => $key,
            'map' => $map,
        ];
    }

    /**
     * @param string $name
     * @param string $item
     * @return string
     */
    public function generateCollection(string $name, string $item): string
    {
        if (! isset($this->generatedCollections[$name])) {
            $this->generatedCollections[$name] = $item;
        }

        return sprintf('\Tarik02\Telegram\Collections\%s', $name);
    }

    /**
     * @param array $input
     * @return string|null
     */
    public function genPhpType(array $input): ?string
    {
        $nullablePrefix = ($input['required'] ?? true) ? '' : '?';

        switch ($input['type']) {
            case 'bool':
                return "{$nullablePrefix}bool";

            case 'integer':
                return "{$nullablePrefix}int";

            case 'float':
                return "{$nullablePrefix}float";

            case 'string':
                return "{$nullablePrefix}string";

            case 'array':
                if ($input['array']['type'] === 'reference') {
                    return $this->generateCollection(
                        \sprintf(
                            '%sCollection',
                            $input['array']['reference']
                        ),
                        \sprintf(
                            '\Tarik02\Telegram\Entities\%s',
                            $input['array']['reference']
                        )
                    );
                } elseif ($input['array']['type'] === 'array' && $input['array']['array']['type'] === 'reference') {
                    return $this->generateCollection(
                        \sprintf(
                            '%sCollectionCollection',
                            $input['array']['array']['reference']
                        ),
                        $this->generateCollection(
                            \sprintf(
                                '%sCollection',
                                $input['array']['array']['reference']
                            ),
                            \sprintf(
                                '\Tarik02\Telegram\Entities\%s',
                                $input['array']['array']['reference']
                            )
                        )
                    );
                } else {
                    return "{$nullablePrefix}array";
                }

            case 'any_of':
                return null;

            case 'reference':
                return \sprintf(
                    '%s\Tarik02\Telegram\Entities\%s',
                    $nullablePrefix,
                    $input['reference']
                );

            default:
                throw new InvalidArgumentException(
                    sprintf(
                        'Unknown type "%s"',
                        $input['type']
                    )
                );
        }
    }

    /**
     * @param array $input
     * @return array
     */
    public function genPhpDocOptions(array $input): array
    {
        $options = [];

        switch ($input['type']) {
            case 'array':
                if ($input['array']['type'] === 'reference') {
                    $options[] = $this->generateCollection(
                        \sprintf(
                            '%sCollection',
                            $input['array']['reference']
                        ),
                        \sprintf(
                            '\Tarik02\Telegram\Entities\%s',
                            $input['array']['reference']
                        )
                    );
                } elseif ($input['array']['type'] === 'array' && $input['array']['array']['type'] === 'reference') {
                    $options[] = $this->generateCollection(
                        \sprintf(
                            '%sCollectionCollection',
                            $input['array']['array']['reference']
                        ),
                        $this->generateCollection(
                            \sprintf(
                                '%sCollection',
                                $input['array']['array']['reference']
                            ),
                            \sprintf(
                                '\Tarik02\Telegram\Entities\%s',
                                $input['array']['array']['reference']
                            )
                        )
                    );
                } else {
                    foreach ($this->genPhpDocOptions($input['array']) as $option) {
                        $options[] = $option . '[]';
                    }
                }
                break;

            case 'any_of':
                foreach ($input['any_of'] as $option) {
                    $options[] = $this->genPhpType($option);
                }
                break;

            default:
                $options[] = $this->genPhpType(\array_merge(
                    $input,
                    [ 'required' => true ]
                ));
        }

        if (! ($input['required'] ?? true)) {
            $options[] = 'null';
        }

        return $options;
    }

    /**
     * @param array $input
     * @return string
     */
    public function genPhpDocType(array $input): string
    {
        return implode('|', $this->genPhpDocOptions($input));
    }

    /**
     * @param array $input
     * @return bool
     */
    public function typeCanBeReference(array $input): bool
    {
        switch ($input['type']) {
            case 'array':
                return $this->typeCanBeReference($input['array']);

            case 'any_of':
                foreach ($input['any_of'] as $type) {
                    if ($this->typeCanBeReference($type)) {
                        return true;
                    }
                }
                return false;

            case 'reference':
                return true;

            default:
                return false;
        }
    }

    /**
     * @param string $entityName
     * @return array|null
     */
    public function getEntity(string $entityName): ?array
    {
        return $this->entityMap[$entityName] ?? null;
    }

    /**
     * @param string $entityName
     * @return array|null
     */
    public function getParent(string $entityName): ?array
    {
        return $this->parentEntityMap[$entityName] ?? null;
    }

    /**
     * @param string $dir
     * @return void
     */
    protected static function mkdirp(string $dir): void
    {
        if (! \file_exists($dir)) {
            \mkdir($dir, 0777, true);
        }
    }
}
