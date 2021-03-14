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
abstract class {{ $entity['name'] }} implements {{ $parent ?? '\Tarik02\Telegram\Contracts\Payloadable' }}
{
    /**
     * {{ '@' }}return \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection
     */
    public static function collection(): \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection
    {
        return \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection::make();
    }
@if($concreteDetect !== null)

    /**
     * {{ '@' }}param array $payload
     * {{ '@' }}return self
     */
    public static function fromPayload($payload): self
    {
        @include('common/concrete-detect', [
            'concreteDetect' => $concreteDetect,
            'origin' => '$payload',
        ])

        throw new \InvalidArgumentException('Field \'{{ $concreteDetect['key'] }}\' expected to have value of: {{ implode(' or ', array_map(fn ($it) => "\\'{$it}\\'", array_keys($concreteDetect['map']))) }}; got ' . ($value ?? 'null') . '.');
    }
@endif
}
