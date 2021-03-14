<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedGifCollection
 *
 * @method InlineQueryResultCachedGifCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedGif $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedGif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedGif> getIterator()
 *
 * @method static InlineQueryResultCachedGifCollection make()
 * @method static InlineQueryResultCachedGifCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedGif
 */
final class InlineQueryResultCachedGifCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedGif
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedGif
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedGif::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedGif
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedGif
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedGif::fromPayload($payload);
    }
}
