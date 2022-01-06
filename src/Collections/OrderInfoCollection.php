<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class OrderInfoCollection
 *
 * @method OrderInfoCollection push(\Tarik02\Telegram\Entities\OrderInfo $item)
 * @method \Tarik02\Telegram\Entities\OrderInfo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\OrderInfo> getIterator()
 *
 * @method static OrderInfoCollection make()
 * @method static OrderInfoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\OrderInfo
 */
class OrderInfoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\OrderInfo
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\OrderInfo
    {
        return \Tarik02\Telegram\Entities\OrderInfo::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\OrderInfo
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\OrderInfo
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\OrderInfo::fromPayload($payload);
    }
}
