<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VenueCollection
 *
 * @method VenueCollection push(\Tarik02\Telegram\Entities\Venue $item)
 * @method \Tarik02\Telegram\Entities\Venue get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Venue> getIterator()
 *
 * @method static VenueCollection make()
 * @method static VenueCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Venue
 */
final class VenueCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Venue
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Venue
    {
        return \Tarik02\Telegram\Entities\Venue::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Venue
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Venue
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Venue::fromPayload($payload);
    }
}
