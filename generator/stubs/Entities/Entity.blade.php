@php
use Illuminate\Support\Str;
@endphp
@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Entities',
])

/**
 * Class {{ $entity['name'] }}
 *
@foreach(explode("\n", $entity['description']) as $line)
 * {{ $line }}
@endforeach
 *
 * {{ '@' }}package Tarik02\Telegram\Entities
 * {{ '@' }}link {{ $entity['documentation_link'] }}
 */
class {{ $entity['name'] }} implements {{ $parent ?? '\Tarik02\Telegram\Contracts\Payloadable' }}
{
@foreach ($entity['properties'] as $property)
    /**
@foreach(explode("\n", $property['description']) as $line)
     * {{ $line }}
@endforeach
     *
     * {{ '@' }}return {{ $generator->genPhpDocType($property) }}
     */
    public function {{ Str::camel($property['name']) }}(){{ ($type = $generator->genPhpType($property)) ? ": {$type}" : '' }}
    {
        @include('common/getter', [
            'property' => $property,
            'origin' => sprintf('$this->payload[\'%s\']', $property['name']),
        ])
    }

    /**
@foreach(explode("\n", $property['description']) as $line)
     * {{ $line }}
@endforeach
     *
     * {{ '@' }}param {{ $generator->genPhpDocType($property) }} ${{ Str::camel($property['name']) }}
     * {{ '@' }}return self
     */
    public function with{{ Str::studly($property['name']) }}({{ ($type = $generator->genPhpType($property)) ? "{$type} " : '' }}${{ Str::camel($property['name']) }}): self
    {
        $payload = $this->payload;
        @include('common/setter', [
            'property' => $property,
            'origin' => sprintf('$payload[\'%s\']', $property['name']),
            'newValue' => '$' . Str::camel($property['name']),
        ])
        return new self($payload);
    }

@endforeach
    /**
     * {{ '@' }}return array
     */
    public function toPayload(): array
    {
        return $this->payload;
    }

    /**
     * {{ '@' }}return self
     */
    public static function make(): self
    {
        return new self([]);
    }

    /**
     * {{ '@' }}return \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection
     */
    public static function collection(): \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection
    {
        return \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection::make();
    }

    /**
     * {{ '@' }}param array $payload
     * {{ '@' }}return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
