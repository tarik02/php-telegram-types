<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ReplyKeyboardRemoveCollection
 *
 * @method ReplyKeyboardRemoveCollection push(\Tarik02\Telegram\Types\ReplyKeyboardRemove $item)
 * @method \Tarik02\Telegram\Types\ReplyKeyboardRemove get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ReplyKeyboardRemove> getIterator()
 *
 * @method static ReplyKeyboardRemoveCollection make()
 * @method static ReplyKeyboardRemoveCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ReplyKeyboardRemove
 */
final class ReplyKeyboardRemoveCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ReplyKeyboardRemove
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ReplyKeyboardRemove
    {
        return \Tarik02\Telegram\Types\ReplyKeyboardRemove::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ReplyKeyboardRemove
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ReplyKeyboardRemove
    {
        return \Tarik02\Telegram\Types\ReplyKeyboardRemove::fromPayload($payload);
    }
}
