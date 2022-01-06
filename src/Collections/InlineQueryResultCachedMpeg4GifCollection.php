<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedMpeg4GifCollection
 *
 * @method InlineQueryResultCachedMpeg4GifCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif> getIterator()
 *
 * @method static InlineQueryResultCachedMpeg4GifCollection make()
 * @method static InlineQueryResultCachedMpeg4GifCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif
 */
class InlineQueryResultCachedMpeg4GifCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedMpeg4Gif::fromPayload($payload);
    }
}
