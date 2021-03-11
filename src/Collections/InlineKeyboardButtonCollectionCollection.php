<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineKeyboardButtonCollectionCollection
 *
 * @method InlineKeyboardButtonCollectionCollection push(\Tarik02\Telegram\Collections\InlineKeyboardButtonCollection $item)
 * @method \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Collections\InlineKeyboardButtonCollection> getIterator()
 *
 * @method static InlineKeyboardButtonCollectionCollection make()
 * @method static InlineKeyboardButtonCollectionCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
 */
final class InlineKeyboardButtonCollectionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
     */
    public static function makeItem(): \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
    {
        return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
    {
        return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection::fromPayload($payload);
    }
}
