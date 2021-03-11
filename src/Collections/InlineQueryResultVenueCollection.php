<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultVenueCollection
 *
 * @method InlineQueryResultVenueCollection push(\Tarik02\Telegram\Types\InlineQueryResultVenue $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultVenue get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultVenue> getIterator()
 *
 * @method static InlineQueryResultVenueCollection make()
 * @method static InlineQueryResultVenueCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultVenue
 */
final class InlineQueryResultVenueCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultVenue
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultVenue
    {
        return \Tarik02\Telegram\Types\InlineQueryResultVenue::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultVenue
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultVenue
    {
        return \Tarik02\Telegram\Types\InlineQueryResultVenue::fromPayload($payload);
    }
}
