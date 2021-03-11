<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class UserProfilePhotosCollection
 *
 * @method UserProfilePhotosCollection push(\Tarik02\Telegram\Types\UserProfilePhotos $item)
 * @method \Tarik02\Telegram\Types\UserProfilePhotos get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\UserProfilePhotos> getIterator()
 *
 * @method static UserProfilePhotosCollection make()
 * @method static UserProfilePhotosCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\UserProfilePhotos
 */
final class UserProfilePhotosCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\UserProfilePhotos
     */
    public static function makeItem(): \Tarik02\Telegram\Types\UserProfilePhotos
    {
        return \Tarik02\Telegram\Types\UserProfilePhotos::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\UserProfilePhotos
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\UserProfilePhotos
    {
        return \Tarik02\Telegram\Types\UserProfilePhotos::fromPayload($payload);
    }
}
