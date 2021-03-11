<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VenueCollection
 *
 * @method VenueCollection push(\Tarik02\Telegram\Types\Venue $item)
 * @method \Tarik02\Telegram\Types\Venue get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Venue> getIterator()
 *
 * @method static VenueCollection make()
 * @method static VenueCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Venue
 */
final class VenueCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Venue
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Venue
    {
        return \Tarik02\Telegram\Types\Venue::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Venue
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Venue
    {
        return \Tarik02\Telegram\Types\Venue::fromPayload($payload);
    }
}
