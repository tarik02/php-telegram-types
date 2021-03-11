<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ShippingQueryCollection
 *
 * @method ShippingQueryCollection push(\Tarik02\Telegram\Types\ShippingQuery $item)
 * @method \Tarik02\Telegram\Types\ShippingQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ShippingQuery> getIterator()
 *
 * @method static ShippingQueryCollection make()
 * @method static ShippingQueryCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ShippingQuery
 */
final class ShippingQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ShippingQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ShippingQuery
    {
        return \Tarik02\Telegram\Types\ShippingQuery::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ShippingQuery
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ShippingQuery
    {
        return \Tarik02\Telegram\Types\ShippingQuery::fromPayload($payload);
    }
}
