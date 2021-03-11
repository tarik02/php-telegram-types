<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ContactCollection
 *
 * @method ContactCollection push(\Tarik02\Telegram\Types\Contact $item)
 * @method \Tarik02\Telegram\Types\Contact get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Contact> getIterator()
 *
 * @method static ContactCollection make()
 * @method static ContactCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Contact
 */
final class ContactCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Contact
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Contact
    {
        return \Tarik02\Telegram\Types\Contact::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Contact
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Contact
    {
        return \Tarik02\Telegram\Types\Contact::fromPayload($payload);
    }
}
