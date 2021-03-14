<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorFrontSideCollection
 *
 * @method PassportElementErrorFrontSideCollection push(\Tarik02\Telegram\Entities\PassportElementErrorFrontSide $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorFrontSide get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorFrontSide> getIterator()
 *
 * @method static PassportElementErrorFrontSideCollection make()
 * @method static PassportElementErrorFrontSideCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorFrontSide
 */
final class PassportElementErrorFrontSideCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorFrontSide
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorFrontSide
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorFrontSide::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorFrontSide
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorFrontSide
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorFrontSide::fromPayload($payload);
    }
}
