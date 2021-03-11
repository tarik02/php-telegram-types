<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class KeyboardButtonCollectionCollection
 *
 * @method KeyboardButtonCollectionCollection push(\Tarik02\Telegram\Collections\KeyboardButtonCollection $item)
 * @method \Tarik02\Telegram\Collections\KeyboardButtonCollection get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Collections\KeyboardButtonCollection> getIterator()
 *
 * @method static KeyboardButtonCollectionCollection make()
 * @method static KeyboardButtonCollectionCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Collections\KeyboardButtonCollection
 */
final class KeyboardButtonCollectionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\KeyboardButtonCollection
     */
    public static function makeItem(): \Tarik02\Telegram\Collections\KeyboardButtonCollection
    {
        return \Tarik02\Telegram\Collections\KeyboardButtonCollection::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Collections\KeyboardButtonCollection
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Collections\KeyboardButtonCollection
    {
        return \Tarik02\Telegram\Collections\KeyboardButtonCollection::fromPayload($payload);
    }
}
