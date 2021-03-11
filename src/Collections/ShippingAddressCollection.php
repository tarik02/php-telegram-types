<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ShippingAddressCollection
 *
 * @method ShippingAddressCollection push(\Tarik02\Telegram\Types\ShippingAddress $item)
 * @method \Tarik02\Telegram\Types\ShippingAddress get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ShippingAddress> getIterator()
 *
 * @method static ShippingAddressCollection make()
 * @method static ShippingAddressCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ShippingAddress
 */
final class ShippingAddressCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ShippingAddress
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ShippingAddress
    {
        return \Tarik02\Telegram\Types\ShippingAddress::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ShippingAddress
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ShippingAddress
    {
        return \Tarik02\Telegram\Types\ShippingAddress::fromPayload($payload);
    }
}
