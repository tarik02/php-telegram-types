<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class StickerSetCollection
 *
 * @method StickerSetCollection push(\Tarik02\Telegram\Types\StickerSet $item)
 * @method \Tarik02\Telegram\Types\StickerSet get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\StickerSet> getIterator()
 *
 * @method static StickerSetCollection make()
 * @method static StickerSetCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\StickerSet
 */
final class StickerSetCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\StickerSet
     */
    public static function makeItem(): \Tarik02\Telegram\Types\StickerSet
    {
        return \Tarik02\Telegram\Types\StickerSet::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\StickerSet
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\StickerSet
    {
        return \Tarik02\Telegram\Types\StickerSet::fromPayload($payload);
    }
}
