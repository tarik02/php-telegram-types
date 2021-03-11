@if($concreteDetect !== null)
        $key = {{ $origin }}['{{ $concreteDetect['key'] }}'] ?? null;

        switch ($key) {
@foreach($concreteDetect['map'] as $value => $concrete)
            case '{{ $value }}':
                return {{ $concrete }}::fromPayload({{ $origin }});

@endforeach
        }
@elseif(isset($concreteDetectProperty))
        $source = {{ $origin }};
@foreach($concreteDetectProperty['any_of'] as $item)
@continue($item['type'] !== 'reference')
@php($targetEntity = $generator->getEntity($item['reference']))
@if($targetEntity && isset($targetEntity['properties']))
        if (isset($source['{{ $targetEntity['properties'][0]['name'] }}'])) {
            return \Tarik02\Telegram\Entities\{{ $targetEntity['name'] }}::fromPayload($source);
        }
@endif
@endforeach
@endif
