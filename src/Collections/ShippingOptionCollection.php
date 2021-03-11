<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ShippingOptionCollection
 *
 * @method ShippingOptionCollection push(\Tarik02\Telegram\Types\ShippingOption $item)
 * @method \Tarik02\Telegram\Types\ShippingOption get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ShippingOption> getIterator()
 *
 * @method static ShippingOptionCollection make()
 * @method static ShippingOptionCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ShippingOption
 */
final class ShippingOptionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ShippingOption
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ShippingOption
    {
        return \Tarik02\Telegram\Types\ShippingOption::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ShippingOption
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ShippingOption
    {
        return \Tarik02\Telegram\Types\ShippingOption::fromPayload($payload);
    }
}
