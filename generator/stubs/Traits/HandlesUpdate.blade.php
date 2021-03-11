@include('common.header', [
    'namespace' => 'Tarik02\Telegram\Traits',
])

/**
 * Trait HandlesUpdate
 *
 * {{ '@' }}package Tarik02\Telegram\Traits
 */
trait HandlesUpdate
{
    /**
     * {{ '@' }}param \Tarik02\Telegram\Entities\Update $update
     * {{ '@' }}return \Tarik02\Telegram\Contracts\Response|null
     */
    final public function handleUpdate(\Tarik02\Telegram\Entities\Update $update): ?\Tarik02\Telegram\Contracts\Response
    {
        switch (true) {
@foreach($updateTypes as $updateType)
            case null !== ${{ $updateType['name'] }} = $update->{{ $updateType['name'] }}():
                return $this->handle{{ ucfirst($updateType['name']) }}(${{ $updateType['name'] }});

@endforeach
            default:
                throw new \InvalidArgumentException('Supplied update is empty');
        }
    }
@foreach($updateTypes as $updateType)

    /**
     * {{ '@' }}param \Tarik02\Telegram\Entities\{{ $updateType['class'] }} ${{ $updateType['name'] }}
     * {{ '@' }}return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handle{{ ucfirst($updateType['name']) }}(\Tarik02\Telegram\Entities\{{ $updateType['class'] }} ${{ $updateType['name'] }}): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }
@endforeach
}
