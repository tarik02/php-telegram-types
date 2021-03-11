<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class LocationCollection
 *
 * @method LocationCollection push(\Tarik02\Telegram\Types\Location $item)
 * @method \Tarik02\Telegram\Types\Location get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Location> getIterator()
 *
 * @method static LocationCollection make()
 * @method static LocationCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Location
 */
final class LocationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Location
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Location
    {
        return \Tarik02\Telegram\Types\Location::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Location
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Location
    {
        return \Tarik02\Telegram\Types\Location::fromPayload($payload);
    }
}
