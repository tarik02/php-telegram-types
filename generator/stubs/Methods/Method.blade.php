@php
use Illuminate\Support\Str;
@endphp
@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Methods',
])

/**
 * Class {{ $class }}
 *
@foreach(explode("\n", $method['description']) as $line)
 * {{ $line }}
@endforeach
 *
 * {{ '@' }}package Tarik02\Telegram\Methods
 * {{ '@' }}link {{ $method['documentation_link'] }}
 */
class {{ $class }} extends Method{{ count($interfaces) > 0 ? ' implements ' . implode(', ', $interfaces) : '' }}
{
@if(count($traits) > 0)
@foreach($traits as $trait)
    use {{ $trait }};
@endforeach

@endif
    /**
     * {{ '@' }}return string
     */
    public function methodName(): string
    {
        return '{{ $method['name'] }}';
    }

@foreach ($method['arguments'] ?? [] as $property)
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
     * {{ '@' }}param array $payload
     * {{ '@' }}return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * {{ '@' }}param mixed $payload
     * {{ '@' }}return {{ $generator->genPhpDocType($method['return_type']) }}
     */
    public static function createResponse($payload){{ ($type = $generator->genPhpType($method['return_type'])) ? ": {$type}" : '' }}
    {
        @include('common/getter', [
            'property' => $method['return_type'],
            'origin' => '$payload',
        ])
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
