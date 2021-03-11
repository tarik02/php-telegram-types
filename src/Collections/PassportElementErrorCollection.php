<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorCollection
 *
 * @method PassportElementErrorCollection push(\Tarik02\Telegram\Types\PassportElementError $item)
 * @method \Tarik02\Telegram\Types\PassportElementError get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementError> getIterator()
 *
 * @method static PassportElementErrorCollection make()
 * @method static PassportElementErrorCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementError
 */
final class PassportElementErrorCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementError
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementError
    {
        return \Tarik02\Telegram\Types\PassportElementError::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementError
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementError
    {
        return \Tarik02\Telegram\Types\PassportElementError::fromPayload($payload);
    }
}
