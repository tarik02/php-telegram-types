<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorFilesCollection
 *
 * @method PassportElementErrorFilesCollection push(\Tarik02\Telegram\Entities\PassportElementErrorFiles $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorFiles get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorFiles> getIterator()
 *
 * @method static PassportElementErrorFilesCollection make()
 * @method static PassportElementErrorFilesCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorFiles
 */
final class PassportElementErrorFilesCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorFiles
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorFiles
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorFiles::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorFiles
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorFiles
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorFiles::fromPayload($payload);
    }
}
