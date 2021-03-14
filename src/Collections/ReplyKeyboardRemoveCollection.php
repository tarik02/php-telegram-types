<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ReplyKeyboardRemoveCollection
 *
 * @method ReplyKeyboardRemoveCollection push(\Tarik02\Telegram\Entities\ReplyKeyboardRemove $item)
 * @method \Tarik02\Telegram\Entities\ReplyKeyboardRemove get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ReplyKeyboardRemove> getIterator()
 *
 * @method static ReplyKeyboardRemoveCollection make()
 * @method static ReplyKeyboardRemoveCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ReplyKeyboardRemove
 */
final class ReplyKeyboardRemoveCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ReplyKeyboardRemove
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ReplyKeyboardRemove
    {
        return \Tarik02\Telegram\Entities\ReplyKeyboardRemove::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ReplyKeyboardRemove
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ReplyKeyboardRemove
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ReplyKeyboardRemove::fromPayload($payload);
    }
}
