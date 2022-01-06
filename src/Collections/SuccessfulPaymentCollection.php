<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class SuccessfulPaymentCollection
 *
 * @method SuccessfulPaymentCollection push(\Tarik02\Telegram\Entities\SuccessfulPayment $item)
 * @method \Tarik02\Telegram\Entities\SuccessfulPayment get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\SuccessfulPayment> getIterator()
 *
 * @method static SuccessfulPaymentCollection make()
 * @method static SuccessfulPaymentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\SuccessfulPayment
 */
class SuccessfulPaymentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\SuccessfulPayment
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\SuccessfulPayment
    {
        return \Tarik02\Telegram\Entities\SuccessfulPayment::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\SuccessfulPayment
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\SuccessfulPayment
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\SuccessfulPayment::fromPayload($payload);
    }
}
