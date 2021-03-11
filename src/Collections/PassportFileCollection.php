<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportFileCollection
 *
 * @method PassportFileCollection push(\Tarik02\Telegram\Types\PassportFile $item)
 * @method \Tarik02\Telegram\Types\PassportFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportFile> getIterator()
 *
 * @method static PassportFileCollection make()
 * @method static PassportFileCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportFile
 */
final class PassportFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportFile
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportFile
    {
        return \Tarik02\Telegram\Types\PassportFile::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportFile
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportFile
    {
        return \Tarik02\Telegram\Types\PassportFile::fromPayload($payload);
    }
}
