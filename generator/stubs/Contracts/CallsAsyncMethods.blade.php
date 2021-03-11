@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Contracts',
])

/**
 * Interface CallsAsyncMethods
 *
 * {{ '@' }}package Tarik02\Telegram\Contracts
 */
interface CallsAsyncMethods
{
    /**
     * {{ '@' }}param \Tarik02\Telegram\Methods\Method $method
     * {{ '@' }}return \GuzzleHttp\Promise\PromiseInterface
     */
    public function callAsync(\Tarik02\Telegram\Methods\Method $method): \GuzzleHttp\Promise\PromiseInterface;
@foreach ($methods as $method)

    /**
     * {{ '@' }}param \Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method
     * {{ '@' }}return \GuzzleHttp\Promise\PromiseInterface<{{ $generator->genPhpDocType($method['return_type']) }}>
     */
    public function {{ $method['name'] }}Async(\Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method): \GuzzleHttp\Promise\PromiseInterface;
@endforeach
}
