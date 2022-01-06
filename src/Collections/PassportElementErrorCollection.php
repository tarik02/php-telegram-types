<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorCollection
 *
 * @method PassportElementErrorCollection push(\Tarik02\Telegram\Entities\PassportElementError $item)
 * @method \Tarik02\Telegram\Entities\PassportElementError get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementError> getIterator()
 *
 * @method static PassportElementErrorCollection make()
 * @method static PassportElementErrorCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementError
 */
class PassportElementErrorCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementError
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementError
    {
        return \Tarik02\Telegram\Entities\PassportElementError::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementError
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementError
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementError::fromPayload($payload);
    }
}
