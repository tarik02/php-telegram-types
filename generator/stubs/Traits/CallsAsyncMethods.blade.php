@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Traits',
])

/**
 * Trait CallsAsyncMethods
 *
 * {{ '@' }}package Tarik02\Telegram\Traits
 */
trait CallsAsyncMethods
{
@foreach ($methods as $method)
    /**
     * {{ '@' }}param \Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method
     * {{ '@' }}return \GuzzleHttp\Promise\PromiseInterface<{{ $generator->genPhpDocType($method['return_type']) }}>
     */
    public function {{ $method['name'] }}Async(\Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

@endforeach
}
