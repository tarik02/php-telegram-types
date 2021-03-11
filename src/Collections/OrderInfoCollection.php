<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class OrderInfoCollection
 *
 * @method OrderInfoCollection push(\Tarik02\Telegram\Types\OrderInfo $item)
 * @method \Tarik02\Telegram\Types\OrderInfo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\OrderInfo> getIterator()
 *
 * @method static OrderInfoCollection make()
 * @method static OrderInfoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\OrderInfo
 */
final class OrderInfoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\OrderInfo
     */
    public static function makeItem(): \Tarik02\Telegram\Types\OrderInfo
    {
        return \Tarik02\Telegram\Types\OrderInfo::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\OrderInfo
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\OrderInfo
    {
        return \Tarik02\Telegram\Types\OrderInfo::fromPayload($payload);
    }
}
