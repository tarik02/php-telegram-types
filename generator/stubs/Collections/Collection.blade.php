@php
use Illuminate\Support\Str;
@endphp
@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Collections',
])

/**
 * Class {{ $name }}
 *
 * {{ '@' }}method {{ $name }} push({{ $item }} $item)
 * {{ '@' }}method {{ $item }} get(int $index)
 *
 * {{ '@' }}method \Iterator<{{ $item }}> getIterator()
 *
 * {{ '@' }}method static {{ $name }} make()
 * {{ '@' }}method static {{ $name }} fromPayload(array $payload)
 *
 * {{ '@' }}package Tarik02\Telegram\Collections
 * {{ '@' }}see {{ $item }}
 */
final class {{ $name }} extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * {{ '@' }}return {{ $item }}
     */
    public static function makeItem(): {{ $item }}
    {
        return {{ $item }}::make();
    }

    /**
     * {{ '@' }}param array $payload
     * {{ '@' }}return {{ $item }}
     */
    public static function itemFromPayload(array $payload): {{ $item }}
    {
        return {{ $item }}::fromPayload($payload);
    }
@if($hasHigherOrderCollection)

    /**
     * {{ '@' }}return {{ $name }}Collection
     */
    public static function collection(): {{ $name }}Collection
    {
        return {{ $name }}Collection::make();
    }
@endif
}
