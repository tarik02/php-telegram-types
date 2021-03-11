<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MessageAutoDeleteTimerChangedCollection
 *
 * @method MessageAutoDeleteTimerChangedCollection push(\Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged $item)
 * @method \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged> getIterator()
 *
 * @method static MessageAutoDeleteTimerChangedCollection make()
 * @method static MessageAutoDeleteTimerChangedCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged
 */
final class MessageAutoDeleteTimerChangedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged
     */
    public static function makeItem(): \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged
    {
        return \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged
    {
        return \Tarik02\Telegram\Types\MessageAutoDeleteTimerChanged::fromPayload($payload);
    }
}
