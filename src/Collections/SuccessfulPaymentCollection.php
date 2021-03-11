<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class SuccessfulPaymentCollection
 *
 * @method SuccessfulPaymentCollection push(\Tarik02\Telegram\Types\SuccessfulPayment $item)
 * @method \Tarik02\Telegram\Types\SuccessfulPayment get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\SuccessfulPayment> getIterator()
 *
 * @method static SuccessfulPaymentCollection make()
 * @method static SuccessfulPaymentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\SuccessfulPayment
 */
final class SuccessfulPaymentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\SuccessfulPayment
     */
    public static function makeItem(): \Tarik02\Telegram\Types\SuccessfulPayment
    {
        return \Tarik02\Telegram\Types\SuccessfulPayment::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\SuccessfulPayment
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\SuccessfulPayment
    {
        return \Tarik02\Telegram\Types\SuccessfulPayment::fromPayload($payload);
    }
}
