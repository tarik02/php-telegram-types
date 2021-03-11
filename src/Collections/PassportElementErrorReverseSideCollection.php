<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorReverseSideCollection
 *
 * @method PassportElementErrorReverseSideCollection push(\Tarik02\Telegram\Types\PassportElementErrorReverseSide $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorReverseSide get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorReverseSide> getIterator()
 *
 * @method static PassportElementErrorReverseSideCollection make()
 * @method static PassportElementErrorReverseSideCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorReverseSide
 */
final class PassportElementErrorReverseSideCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorReverseSide
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorReverseSide
    {
        return \Tarik02\Telegram\Types\PassportElementErrorReverseSide::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorReverseSide
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorReverseSide
    {
        return \Tarik02\Telegram\Types\PassportElementErrorReverseSide::fromPayload($payload);
    }
}
