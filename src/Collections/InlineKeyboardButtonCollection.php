<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineKeyboardButtonCollection
 *
 * @method InlineKeyboardButtonCollection push(\Tarik02\Telegram\Entities\InlineKeyboardButton $item)
 * @method \Tarik02\Telegram\Entities\InlineKeyboardButton get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineKeyboardButton> getIterator()
 *
 * @method static InlineKeyboardButtonCollection make()
 * @method static InlineKeyboardButtonCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineKeyboardButton
 */
final class InlineKeyboardButtonCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineKeyboardButton
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineKeyboardButton
    {
        return \Tarik02\Telegram\Entities\InlineKeyboardButton::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Entities\InlineKeyboardButton
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Entities\InlineKeyboardButton
    {
        return \Tarik02\Telegram\Entities\InlineKeyboardButton::fromPayload($payload);
    }

    /**
     * @return InlineKeyboardButtonCollectionCollection
     */
    public static function collection(): InlineKeyboardButtonCollectionCollection
    {
        return InlineKeyboardButtonCollectionCollection::make();
    }
}
