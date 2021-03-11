<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedGifCollection
 *
 * @method InlineQueryResultCachedGifCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedGif $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedGif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedGif> getIterator()
 *
 * @method static InlineQueryResultCachedGifCollection make()
 * @method static InlineQueryResultCachedGifCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedGif
 */
final class InlineQueryResultCachedGifCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedGif
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedGif
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedGif::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedGif
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedGif
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedGif::fromPayload($payload);
    }
}
