<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaPhotoCollection
 *
 * @method InputMediaPhotoCollection push(\Tarik02\Telegram\Types\InputMediaPhoto $item)
 * @method \Tarik02\Telegram\Types\InputMediaPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMediaPhoto> getIterator()
 *
 * @method static InputMediaPhotoCollection make()
 * @method static InputMediaPhotoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMediaPhoto
 */
final class InputMediaPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMediaPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMediaPhoto
    {
        return \Tarik02\Telegram\Types\InputMediaPhoto::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMediaPhoto
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMediaPhoto
    {
        return \Tarik02\Telegram\Types\InputMediaPhoto::fromPayload($payload);
    }
}
