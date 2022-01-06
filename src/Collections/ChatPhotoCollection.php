<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatPhotoCollection
 *
 * @method ChatPhotoCollection push(\Tarik02\Telegram\Entities\ChatPhoto $item)
 * @method \Tarik02\Telegram\Entities\ChatPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatPhoto> getIterator()
 *
 * @method static ChatPhotoCollection make()
 * @method static ChatPhotoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatPhoto
 */
class ChatPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatPhoto
    {
        return \Tarik02\Telegram\Entities\ChatPhoto::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatPhoto
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatPhoto
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatPhoto::fromPayload($payload);
    }
}
