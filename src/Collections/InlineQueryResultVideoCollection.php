<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultVideoCollection
 *
 * @method InlineQueryResultVideoCollection push(\Tarik02\Telegram\Types\InlineQueryResultVideo $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultVideo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultVideo> getIterator()
 *
 * @method static InlineQueryResultVideoCollection make()
 * @method static InlineQueryResultVideoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultVideo
 */
final class InlineQueryResultVideoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultVideo
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultVideo
    {
        return \Tarik02\Telegram\Types\InlineQueryResultVideo::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultVideo
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultVideo
    {
        return \Tarik02\Telegram\Types\InlineQueryResultVideo::fromPayload($payload);
    }
}
