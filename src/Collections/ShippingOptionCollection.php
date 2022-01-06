<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ShippingOptionCollection
 *
 * @method ShippingOptionCollection push(\Tarik02\Telegram\Entities\ShippingOption $item)
 * @method \Tarik02\Telegram\Entities\ShippingOption get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ShippingOption> getIterator()
 *
 * @method static ShippingOptionCollection make()
 * @method static ShippingOptionCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ShippingOption
 */
class ShippingOptionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ShippingOption
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ShippingOption
    {
        return \Tarik02\Telegram\Entities\ShippingOption::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ShippingOption
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ShippingOption
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ShippingOption::fromPayload($payload);
    }
}
