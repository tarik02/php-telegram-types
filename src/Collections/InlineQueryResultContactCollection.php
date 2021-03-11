<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultContactCollection
 *
 * @method InlineQueryResultContactCollection push(\Tarik02\Telegram\Types\InlineQueryResultContact $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultContact get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultContact> getIterator()
 *
 * @method static InlineQueryResultContactCollection make()
 * @method static InlineQueryResultContactCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultContact
 */
final class InlineQueryResultContactCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultContact
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultContact
    {
        return \Tarik02\Telegram\Types\InlineQueryResultContact::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultContact
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultContact
    {
        return \Tarik02\Telegram\Types\InlineQueryResultContact::fromPayload($payload);
    }
}
