<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultLocationCollection
 *
 * @method InlineQueryResultLocationCollection push(\Tarik02\Telegram\Types\InlineQueryResultLocation $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultLocation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultLocation> getIterator()
 *
 * @method static InlineQueryResultLocationCollection make()
 * @method static InlineQueryResultLocationCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultLocation
 */
final class InlineQueryResultLocationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultLocation
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultLocation
    {
        return \Tarik02\Telegram\Types\InlineQueryResultLocation::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultLocation
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultLocation
    {
        return \Tarik02\Telegram\Types\InlineQueryResultLocation::fromPayload($payload);
    }
}
