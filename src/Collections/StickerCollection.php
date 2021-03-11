<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class StickerCollection
 *
 * @method StickerCollection push(\Tarik02\Telegram\Types\Sticker $item)
 * @method \Tarik02\Telegram\Types\Sticker get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Sticker> getIterator()
 *
 * @method static StickerCollection make()
 * @method static StickerCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Sticker
 */
final class StickerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Sticker
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Sticker
    {
        return \Tarik02\Telegram\Types\Sticker::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Sticker
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Sticker
    {
        return \Tarik02\Telegram\Types\Sticker::fromPayload($payload);
    }
}
