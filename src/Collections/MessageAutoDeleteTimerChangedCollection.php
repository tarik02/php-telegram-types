<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MessageAutoDeleteTimerChangedCollection
 *
 * @method MessageAutoDeleteTimerChangedCollection push(\Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged $item)
 * @method \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged> getIterator()
 *
 * @method static MessageAutoDeleteTimerChangedCollection make()
 * @method static MessageAutoDeleteTimerChangedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged
 */
final class MessageAutoDeleteTimerChangedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged
    {
        return \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged::fromPayload($payload);
    }
}
