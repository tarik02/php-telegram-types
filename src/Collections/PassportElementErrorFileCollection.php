<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorFileCollection
 *
 * @method PassportElementErrorFileCollection push(\Tarik02\Telegram\Entities\PassportElementErrorFile $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorFile> getIterator()
 *
 * @method static PassportElementErrorFileCollection make()
 * @method static PassportElementErrorFileCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorFile
 */
final class PassportElementErrorFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorFile
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorFile
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorFile::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorFile
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorFile
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorFile::fromPayload($payload);
    }
}
