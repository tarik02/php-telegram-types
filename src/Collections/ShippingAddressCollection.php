<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ShippingAddressCollection
 *
 * @method ShippingAddressCollection push(\Tarik02\Telegram\Entities\ShippingAddress $item)
 * @method \Tarik02\Telegram\Entities\ShippingAddress get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ShippingAddress> getIterator()
 *
 * @method static ShippingAddressCollection make()
 * @method static ShippingAddressCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ShippingAddress
 */
final class ShippingAddressCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ShippingAddress
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ShippingAddress
    {
        return \Tarik02\Telegram\Entities\ShippingAddress::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ShippingAddress
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ShippingAddress
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ShippingAddress::fromPayload($payload);
    }
}
