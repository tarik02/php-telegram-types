<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedVideoCollection
 *
 * @method InlineQueryResultCachedVideoCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedVideo $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedVideo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedVideo> getIterator()
 *
 * @method static InlineQueryResultCachedVideoCollection make()
 * @method static InlineQueryResultCachedVideoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedVideo
 */
final class InlineQueryResultCachedVideoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedVideo
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedVideo
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedVideo::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedVideo
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedVideo
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedVideo::fromPayload($payload);
    }
}
