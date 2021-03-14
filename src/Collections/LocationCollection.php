<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class LocationCollection
 *
 * @method LocationCollection push(\Tarik02\Telegram\Entities\Location $item)
 * @method \Tarik02\Telegram\Entities\Location get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Location> getIterator()
 *
 * @method static LocationCollection make()
 * @method static LocationCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Location
 */
final class LocationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Location
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Location
    {
        return \Tarik02\Telegram\Entities\Location::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Location
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Location
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Location::fromPayload($payload);
    }
}
