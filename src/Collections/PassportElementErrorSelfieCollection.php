<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorSelfieCollection
 *
 * @method PassportElementErrorSelfieCollection push(\Tarik02\Telegram\Types\PassportElementErrorSelfie $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorSelfie get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorSelfie> getIterator()
 *
 * @method static PassportElementErrorSelfieCollection make()
 * @method static PassportElementErrorSelfieCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorSelfie
 */
final class PassportElementErrorSelfieCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorSelfie
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorSelfie
    {
        return \Tarik02\Telegram\Types\PassportElementErrorSelfie::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorSelfie
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorSelfie
    {
        return \Tarik02\Telegram\Types\PassportElementErrorSelfie::fromPayload($payload);
    }
}
