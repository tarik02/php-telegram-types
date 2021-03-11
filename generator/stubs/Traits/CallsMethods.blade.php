@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Traits',
])

/**
 * Trait CallsMethods
 *
 * {{ '@' }}package Tarik02\Telegram\Traits
 */
trait CallsMethods
{
@foreach ($methods as $method)
    /**
     * {{ '@' }}param \Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method
     * {{ '@' }}return {{ $generator->genPhpDocType($method['return_type']) }}
     */
    public function {{ $method['name'] }}(\Tarik02\Telegram\Methods\{{ ucfirst($method['name']) }} $method){{ ($type = $generator->genPhpType($method['return_type'])) ? ": {$type}" : '' }}
    {
        return $this->call($method);
    }

@endforeach
}
