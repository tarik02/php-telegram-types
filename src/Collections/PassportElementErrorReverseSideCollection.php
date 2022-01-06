<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorReverseSideCollection
 *
 * @method PassportElementErrorReverseSideCollection push(\Tarik02\Telegram\Entities\PassportElementErrorReverseSide $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorReverseSide get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorReverseSide> getIterator()
 *
 * @method static PassportElementErrorReverseSideCollection make()
 * @method static PassportElementErrorReverseSideCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorReverseSide
 */
class PassportElementErrorReverseSideCollection extends \Tarik02\Telegram\Collections\PassportElementErrorCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorReverseSide
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorReverseSide
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorReverseSide::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorReverseSide
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorReverseSide
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorReverseSide::fromPayload($payload);
    }
}
