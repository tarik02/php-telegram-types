<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class UserProfilePhotosCollection
 *
 * @method UserProfilePhotosCollection push(\Tarik02\Telegram\Entities\UserProfilePhotos $item)
 * @method \Tarik02\Telegram\Entities\UserProfilePhotos get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\UserProfilePhotos> getIterator()
 *
 * @method static UserProfilePhotosCollection make()
 * @method static UserProfilePhotosCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\UserProfilePhotos
 */
class UserProfilePhotosCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\UserProfilePhotos
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\UserProfilePhotos
    {
        return \Tarik02\Telegram\Entities\UserProfilePhotos::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\UserProfilePhotos
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\UserProfilePhotos
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\UserProfilePhotos::fromPayload($payload);
    }
}
