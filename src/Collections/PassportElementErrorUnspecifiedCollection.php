<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorUnspecifiedCollection
 *
 * @method PassportElementErrorUnspecifiedCollection push(\Tarik02\Telegram\Types\PassportElementErrorUnspecified $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorUnspecified get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorUnspecified> getIterator()
 *
 * @method static PassportElementErrorUnspecifiedCollection make()
 * @method static PassportElementErrorUnspecifiedCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorUnspecified
 */
final class PassportElementErrorUnspecifiedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorUnspecified
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorUnspecified
    {
        return \Tarik02\Telegram\Types\PassportElementErrorUnspecified::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorUnspecified
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorUnspecified
    {
        return \Tarik02\Telegram\Types\PassportElementErrorUnspecified::fromPayload($payload);
    }
}
