<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class FileCollection
 *
 * @method FileCollection push(\Tarik02\Telegram\Entities\File $item)
 * @method \Tarik02\Telegram\Entities\File get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\File> getIterator()
 *
 * @method static FileCollection make()
 * @method static FileCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\File
 */
class FileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\File
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\File
    {
        return \Tarik02\Telegram\Entities\File::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\File
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\File
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\File::fromPayload($payload);
    }
}
