<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class FileCollection
 *
 * @method FileCollection push(\Tarik02\Telegram\Types\File $item)
 * @method \Tarik02\Telegram\Types\File get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\File> getIterator()
 *
 * @method static FileCollection make()
 * @method static FileCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\File
 */
final class FileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\File
     */
    public static function makeItem(): \Tarik02\Telegram\Types\File
    {
        return \Tarik02\Telegram\Types\File::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\File
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\File
    {
        return \Tarik02\Telegram\Types\File::fromPayload($payload);
    }
}
