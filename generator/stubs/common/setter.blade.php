@if(
    $property['type'] === 'reference' ||
    $property['type'] === 'array' && $property['array']['type'] === 'reference' ||
    $property['type'] === 'array' && $property['array']['type'] === 'array' && $property['array']['array']['type'] === 'reference'
)
@if(! ($property['required'] ?? true))
        if ({{ $newValue }} !== null) {
            {{ $origin }} = {{ $newValue }}->toPayload();
        } else {
            unset({{ $origin }});
        }
@else
        {{ $origin }} = {{ $newValue }}->toPayload();
@endif
@elseif($property['type'] === 'any_of' && $generator->typeCanBeReference($property))
        if ({{ $newValue }} instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            {{ $origin }} = {{ $newValue }}->toPayload();
@if(count(array_filter($property['any_of'], fn (array $it) => ($it['reference'] ?? null) === 'InputFile')) > 0)
        } elseif ({{ $newValue }} instanceof \Tarik02\Telegram\Entities\InputFile) {
            {{ $origin }} = {{ $newValue }}->toPayload();
@endif
        } elseif ({{ $newValue }} !== null) {
            {{ $origin }} = {{ $newValue }};
        } else {
            unset({{ $origin }});
        }
@elseif(
    $property['type'] !== 'reference' &&
    (
        $property['type'] !== 'array' ||
        (
            $property['array']['type'] !== 'reference' &&
            $property['array']['type'] !== 'array'
        )
    )
)
        {{ $origin }} = {{ $newValue }};
@endif
