<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorFileCollection
 *
 * @method PassportElementErrorFileCollection push(\Tarik02\Telegram\Types\PassportElementErrorFile $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorFile> getIterator()
 *
 * @method static PassportElementErrorFileCollection make()
 * @method static PassportElementErrorFileCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorFile
 */
final class PassportElementErrorFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorFile
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorFile
    {
        return \Tarik02\Telegram\Types\PassportElementErrorFile::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorFile
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorFile
    {
        return \Tarik02\Telegram\Types\PassportElementErrorFile::fromPayload($payload);
    }
}
