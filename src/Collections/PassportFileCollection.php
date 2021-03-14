<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportFileCollection
 *
 * @method PassportFileCollection push(\Tarik02\Telegram\Entities\PassportFile $item)
 * @method \Tarik02\Telegram\Entities\PassportFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportFile> getIterator()
 *
 * @method static PassportFileCollection make()
 * @method static PassportFileCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportFile
 */
final class PassportFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportFile
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportFile
    {
        return \Tarik02\Telegram\Entities\PassportFile::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportFile
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportFile
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportFile::fromPayload($payload);
    }
}
