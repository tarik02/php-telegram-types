<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorSelfieCollection
 *
 * @method PassportElementErrorSelfieCollection push(\Tarik02\Telegram\Entities\PassportElementErrorSelfie $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorSelfie get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorSelfie> getIterator()
 *
 * @method static PassportElementErrorSelfieCollection make()
 * @method static PassportElementErrorSelfieCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorSelfie
 */
final class PassportElementErrorSelfieCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorSelfie
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorSelfie
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorSelfie::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorSelfie
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorSelfie
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorSelfie::fromPayload($payload);
    }
}
