<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class KeyboardButtonCollection
 *
 * @method KeyboardButtonCollection push(\Tarik02\Telegram\Entities\KeyboardButton $item)
 * @method \Tarik02\Telegram\Entities\KeyboardButton get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\KeyboardButton> getIterator()
 *
 * @method static KeyboardButtonCollection make()
 * @method static KeyboardButtonCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\KeyboardButton
 */
final class KeyboardButtonCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\KeyboardButton
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\KeyboardButton
    {
        return \Tarik02\Telegram\Entities\KeyboardButton::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Entities\KeyboardButton
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Entities\KeyboardButton
    {
        return \Tarik02\Telegram\Entities\KeyboardButton::fromPayload($payload);
    }

    /**
     * @return KeyboardButtonCollectionCollection
     */
    public static function collection(): KeyboardButtonCollectionCollection
    {
        return KeyboardButtonCollectionCollection::make();
    }
}
