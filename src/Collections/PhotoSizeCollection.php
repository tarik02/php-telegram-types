<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PhotoSizeCollection
 *
 * @method PhotoSizeCollection push(\Tarik02\Telegram\Entities\PhotoSize $item)
 * @method \Tarik02\Telegram\Entities\PhotoSize get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PhotoSize> getIterator()
 *
 * @method static PhotoSizeCollection make()
 * @method static PhotoSizeCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PhotoSize
 */
class PhotoSizeCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PhotoSize
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PhotoSize
    {
        return \Tarik02\Telegram\Entities\PhotoSize::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PhotoSize
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PhotoSize
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PhotoSize::fromPayload($payload);
    }

    /**
     * @return PhotoSizeCollectionCollection
     */
    public static function collection(): PhotoSizeCollectionCollection
    {
        return PhotoSizeCollectionCollection::make();
    }
}
