<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ShippingQueryCollection
 *
 * @method ShippingQueryCollection push(\Tarik02\Telegram\Entities\ShippingQuery $item)
 * @method \Tarik02\Telegram\Entities\ShippingQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ShippingQuery> getIterator()
 *
 * @method static ShippingQueryCollection make()
 * @method static ShippingQueryCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ShippingQuery
 */
final class ShippingQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ShippingQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ShippingQuery
    {
        return \Tarik02\Telegram\Entities\ShippingQuery::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ShippingQuery
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ShippingQuery
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ShippingQuery::fromPayload($payload);
    }
}
