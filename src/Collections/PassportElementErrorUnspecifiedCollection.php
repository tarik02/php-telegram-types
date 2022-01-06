<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorUnspecifiedCollection
 *
 * @method PassportElementErrorUnspecifiedCollection push(\Tarik02\Telegram\Entities\PassportElementErrorUnspecified $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorUnspecified get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorUnspecified> getIterator()
 *
 * @method static PassportElementErrorUnspecifiedCollection make()
 * @method static PassportElementErrorUnspecifiedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorUnspecified
 */
class PassportElementErrorUnspecifiedCollection extends \Tarik02\Telegram\Collections\PassportElementErrorCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorUnspecified
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorUnspecified
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorUnspecified::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorUnspecified
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorUnspecified
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorUnspecified::fromPayload($payload);
    }
}
