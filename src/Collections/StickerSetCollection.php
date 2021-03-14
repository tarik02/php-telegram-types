<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class StickerSetCollection
 *
 * @method StickerSetCollection push(\Tarik02\Telegram\Entities\StickerSet $item)
 * @method \Tarik02\Telegram\Entities\StickerSet get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\StickerSet> getIterator()
 *
 * @method static StickerSetCollection make()
 * @method static StickerSetCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\StickerSet
 */
final class StickerSetCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\StickerSet
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\StickerSet
    {
        return \Tarik02\Telegram\Entities\StickerSet::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\StickerSet
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\StickerSet
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\StickerSet::fromPayload($payload);
    }
}
