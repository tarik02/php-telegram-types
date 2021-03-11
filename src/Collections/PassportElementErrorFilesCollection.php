<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorFilesCollection
 *
 * @method PassportElementErrorFilesCollection push(\Tarik02\Telegram\Types\PassportElementErrorFiles $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorFiles get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorFiles> getIterator()
 *
 * @method static PassportElementErrorFilesCollection make()
 * @method static PassportElementErrorFilesCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorFiles
 */
final class PassportElementErrorFilesCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorFiles
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorFiles
    {
        return \Tarik02\Telegram\Types\PassportElementErrorFiles::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorFiles
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorFiles
    {
        return \Tarik02\Telegram\Types\PassportElementErrorFiles::fromPayload($payload);
    }
}
