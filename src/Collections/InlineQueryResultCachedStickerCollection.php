<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedStickerCollection
 *
 * @method InlineQueryResultCachedStickerCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedSticker $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedSticker> getIterator()
 *
 * @method static InlineQueryResultCachedStickerCollection make()
 * @method static InlineQueryResultCachedStickerCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker
 */
final class InlineQueryResultCachedStickerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker::fromPayload($payload);
    }
}
