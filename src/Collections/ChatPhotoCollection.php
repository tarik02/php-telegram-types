<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatPhotoCollection
 *
 * @method ChatPhotoCollection push(\Tarik02\Telegram\Types\ChatPhoto $item)
 * @method \Tarik02\Telegram\Types\ChatPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ChatPhoto> getIterator()
 *
 * @method static ChatPhotoCollection make()
 * @method static ChatPhotoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ChatPhoto
 */
final class ChatPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ChatPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ChatPhoto
    {
        return \Tarik02\Telegram\Types\ChatPhoto::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ChatPhoto
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ChatPhoto
    {
        return \Tarik02\Telegram\Types\ChatPhoto::fromPayload($payload);
    }
}
