<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultVenueCollection
 *
 * @method InlineQueryResultVenueCollection push(\Tarik02\Telegram\Entities\InlineQueryResultVenue $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultVenue get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultVenue> getIterator()
 *
 * @method static InlineQueryResultVenueCollection make()
 * @method static InlineQueryResultVenueCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultVenue
 */
class InlineQueryResultVenueCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultVenue
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultVenue
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultVenue::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultVenue
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultVenue
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultVenue::fromPayload($payload);
    }
}
