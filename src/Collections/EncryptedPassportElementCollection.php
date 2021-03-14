<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class EncryptedPassportElementCollection
 *
 * @method EncryptedPassportElementCollection push(\Tarik02\Telegram\Entities\EncryptedPassportElement $item)
 * @method \Tarik02\Telegram\Entities\EncryptedPassportElement get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\EncryptedPassportElement> getIterator()
 *
 * @method static EncryptedPassportElementCollection make()
 * @method static EncryptedPassportElementCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\EncryptedPassportElement
 */
final class EncryptedPassportElementCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\EncryptedPassportElement
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\EncryptedPassportElement
    {
        return \Tarik02\Telegram\Entities\EncryptedPassportElement::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\EncryptedPassportElement
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\EncryptedPassportElement
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\EncryptedPassportElement::fromPayload($payload);
    }
}
