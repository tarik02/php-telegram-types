<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorFrontSideCollection
 *
 * @method PassportElementErrorFrontSideCollection push(\Tarik02\Telegram\Types\PassportElementErrorFrontSide $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorFrontSide get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorFrontSide> getIterator()
 *
 * @method static PassportElementErrorFrontSideCollection make()
 * @method static PassportElementErrorFrontSideCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorFrontSide
 */
final class PassportElementErrorFrontSideCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorFrontSide
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorFrontSide
    {
        return \Tarik02\Telegram\Types\PassportElementErrorFrontSide::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorFrontSide
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorFrontSide
    {
        return \Tarik02\Telegram\Types\PassportElementErrorFrontSide::fromPayload($payload);
    }
}
