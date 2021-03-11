<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ReplyKeyboardMarkupCollection
 *
 * @method ReplyKeyboardMarkupCollection push(\Tarik02\Telegram\Types\ReplyKeyboardMarkup $item)
 * @method \Tarik02\Telegram\Types\ReplyKeyboardMarkup get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ReplyKeyboardMarkup> getIterator()
 *
 * @method static ReplyKeyboardMarkupCollection make()
 * @method static ReplyKeyboardMarkupCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ReplyKeyboardMarkup
 */
final class ReplyKeyboardMarkupCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ReplyKeyboardMarkup
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ReplyKeyboardMarkup
    {
        return \Tarik02\Telegram\Types\ReplyKeyboardMarkup::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ReplyKeyboardMarkup
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ReplyKeyboardMarkup
    {
        return \Tarik02\Telegram\Types\ReplyKeyboardMarkup::fromPayload($payload);
    }
}
