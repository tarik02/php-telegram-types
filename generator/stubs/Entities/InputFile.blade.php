@php
use Illuminate\Support\Str;
@endphp
@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Entities',
])

/**
 * Class InputFile
 *
@foreach(explode("\n", $entity['description']) as $line)
 * {{ $line }}
@endforeach
 *
 * {{ '@' }}package Tarik02\Telegram\Entities
 * {{ '@' }}link {{ $entity['documentation_link'] }}
 */
final class InputFile
{
    /**
     * {{ '@' }}return string
     */
    public function payload(): string
    {
        return $this->payload;
    }

    /**
     * {{ '@' }}param string $payload
     * {{ '@' }}return self
     */
    public function withPayload(string $payload): self
    {
        $result = new self();
        $result->payload = $payload;
        return $result;
    }

    /**
     * {{ '@' }}return string
     */
    public function toPayload(): string
    {
        return $this->payload;
    }

    /**
     * {{ '@' }}return self
     */
    public static function make(): self
    {
        return new self();
    }

    /**
     * {{ '@' }}return \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection
     */
    public static function collection(): \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection
    {
        return \Tarik02\Telegram\Collections\{{ $entity['name'] }}Collection::make();
    }

    /**
     * {{ '@' }}param string $payload
     * {{ '@' }}return self
     */
    public static function fromPayload(string $payload): self
    {
        return self::make()
            ->withPayload($payload);
    }

    private string $payload;

    private function __construct()
    {
    }
}
