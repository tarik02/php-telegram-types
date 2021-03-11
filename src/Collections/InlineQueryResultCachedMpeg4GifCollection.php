<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedMpeg4GifCollection
 *
 * @method InlineQueryResultCachedMpeg4GifCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif> getIterator()
 *
 * @method static InlineQueryResultCachedMpeg4GifCollection make()
 * @method static InlineQueryResultCachedMpeg4GifCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif
 */
final class InlineQueryResultCachedMpeg4GifCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedMpeg4Gif::fromPayload($payload);
    }
}
