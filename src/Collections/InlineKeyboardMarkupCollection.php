<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineKeyboardMarkupCollection
 *
 * @method InlineKeyboardMarkupCollection push(\Tarik02\Telegram\Types\InlineKeyboardMarkup $item)
 * @method \Tarik02\Telegram\Types\InlineKeyboardMarkup get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineKeyboardMarkup> getIterator()
 *
 * @method static InlineKeyboardMarkupCollection make()
 * @method static InlineKeyboardMarkupCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineKeyboardMarkup
 */
final class InlineKeyboardMarkupCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineKeyboardMarkup
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineKeyboardMarkup
    {
        return \Tarik02\Telegram\Types\InlineKeyboardMarkup::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineKeyboardMarkup
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineKeyboardMarkup
    {
        return \Tarik02\Telegram\Types\InlineKeyboardMarkup::fromPayload($payload);
    }
}
