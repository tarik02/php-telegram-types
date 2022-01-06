<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaPhotoCollection
 *
 * @method InputMediaPhotoCollection push(\Tarik02\Telegram\Entities\InputMediaPhoto $item)
 * @method \Tarik02\Telegram\Entities\InputMediaPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMediaPhoto> getIterator()
 *
 * @method static InputMediaPhotoCollection make()
 * @method static InputMediaPhotoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMediaPhoto
 */
class InputMediaPhotoCollection extends \Tarik02\Telegram\Collections\InputMediaCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMediaPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMediaPhoto
    {
        return \Tarik02\Telegram\Entities\InputMediaPhoto::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMediaPhoto
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMediaPhoto
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMediaPhoto::fromPayload($payload);
    }
}
