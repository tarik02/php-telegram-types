<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultMpeg4GifCollection
 *
 * @method InlineQueryResultMpeg4GifCollection push(\Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif> getIterator()
 *
 * @method static InlineQueryResultMpeg4GifCollection make()
 * @method static InlineQueryResultMpeg4GifCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif
 */
final class InlineQueryResultMpeg4GifCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif::fromPayload($payload);
    }
}
