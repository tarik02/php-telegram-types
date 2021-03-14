<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputFileCollection
 *
 * @method InputFileCollection push(\Tarik02\Telegram\Entities\InputFile $item)
 * @method \Tarik02\Telegram\Entities\InputFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputFile> getIterator()
 *
 * @method static InputFileCollection make()
 * @method static InputFileCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputFile
 */
final class InputFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputFile
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputFile
    {
        return \Tarik02\Telegram\Entities\InputFile::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputFile
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputFile
    {
        if (! \is_string($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be a string.');
        }

        return \Tarik02\Telegram\Entities\InputFile::fromPayload($payload);
    }
}
