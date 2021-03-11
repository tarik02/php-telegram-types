@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Contracts',
])

/**
 * Interface CallsMethods
 *
 * {{ '@' }}package Tarik02\Telegram\Contracts
 */
interface CallsMethods
{
    /**
     * {{ '@' }}param \Tarik02\Telegram\Methods\Method $method
     * {{ '@' }}return mixed
     */
    public function call(\Tarik02\Telegram\Methods\Method $method);
@foreach ($methods as $method)

    /**
     * {{ '@' }}param \Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method
     * {{ '@' }}return {{ $generator->genPhpDocType($method['return_type']) }}
     */
    public function {{ $method['name'] }}(\Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method){{ ($type = $generator->genPhpType($method['return_type'])) ? ": {$type}" : '' }};
@endforeach
}
