@if($property['type'] === 'reference')
@if(! ($property['required'] ?? true))
        if (({{ $origin }} ?? null) === null) {
            return null;
        }
@endif
        return \Tarik02\Telegram\Entities\{{ $property['reference'] }}::fromPayload({{ $origin }});
@elseif($property['type'] === 'bool')
        return {{ $origin }} ?? false;
@elseif($property['type'] === 'array' && $property['array']['type'] === 'reference')
@if(! ($property['required'] ?? true))
        if (({{ $origin }} ?? null) === null) {
            return null;
        }
@endif
        return \Tarik02\Telegram\Collections\{{ $property['array']['reference'] }}Collection::fromPayload({{ $origin }} ?? []);
@elseif($property['type'] === 'array' && $property['array']['type'] === 'array' && $property['array']['array']['type'] === 'reference')
@if(! ($property['required'] ?? true))
        if (({{ $origin }} ?? null) === null) {
            return null;
        }
@endif
        return \Tarik02\Telegram\Collections\{{ $property['array']['array']['reference'] }}CollectionCollection::fromPayload({{ $origin }} ?? []);
@elseif($property['type'] === 'any_of' && $generator->typeCanBeReference($property))
@if(! ($property['required'] ?? true))
        if (({{ $origin }} ?? null) === null) {
            return null;
        }
@endif
@php($detect = $generator->makeConcreteDetect($property))
        @include('common/concrete-detect', [
            'concreteDetect' => $detect,
            'concreteDetectProperty' => $property,
            'origin' => $origin,
        ])

        return {{ $origin }};
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
@if(! ($property['required'] ?? true))
        return {{ $origin }} ?? null;
@else
        return {{ $origin }};
@endif
@endif
