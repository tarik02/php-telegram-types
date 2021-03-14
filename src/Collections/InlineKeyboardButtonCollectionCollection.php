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
 * @method static InlineKeyboardButtonCollectionCollection fromPayload($payload)
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
     * @param mixed $payload
     * @return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection::fromPayload($payload);
    }
}
