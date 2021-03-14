<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class StickerCollection
 *
 * @method StickerCollection push(\Tarik02\Telegram\Entities\Sticker $item)
 * @method \Tarik02\Telegram\Entities\Sticker get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Sticker> getIterator()
 *
 * @method static StickerCollection make()
 * @method static StickerCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Sticker
 */
final class StickerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Sticker
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Sticker
    {
        return \Tarik02\Telegram\Entities\Sticker::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Sticker
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Sticker
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Sticker::fromPayload($payload);
    }
}
