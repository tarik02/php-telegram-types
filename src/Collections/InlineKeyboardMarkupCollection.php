<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineKeyboardMarkupCollection
 *
 * @method InlineKeyboardMarkupCollection push(\Tarik02\Telegram\Entities\InlineKeyboardMarkup $item)
 * @method \Tarik02\Telegram\Entities\InlineKeyboardMarkup get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineKeyboardMarkup> getIterator()
 *
 * @method static InlineKeyboardMarkupCollection make()
 * @method static InlineKeyboardMarkupCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineKeyboardMarkup
 */
final class InlineKeyboardMarkupCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($payload);
    }
}
