<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedStickerCollection
 *
 * @method InlineQueryResultCachedStickerCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedSticker $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedSticker get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedSticker> getIterator()
 *
 * @method static InlineQueryResultCachedStickerCollection make()
 * @method static InlineQueryResultCachedStickerCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedSticker
 */
final class InlineQueryResultCachedStickerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedSticker
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedSticker
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedSticker::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedSticker
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedSticker
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedSticker::fromPayload($payload);
    }
}
