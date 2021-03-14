<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ContactCollection
 *
 * @method ContactCollection push(\Tarik02\Telegram\Entities\Contact $item)
 * @method \Tarik02\Telegram\Entities\Contact get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Contact> getIterator()
 *
 * @method static ContactCollection make()
 * @method static ContactCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Contact
 */
final class ContactCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Contact
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Contact
    {
        return \Tarik02\Telegram\Entities\Contact::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Contact
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Contact
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Contact::fromPayload($payload);
    }
}
