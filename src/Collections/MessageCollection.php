<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MessageCollection
 *
 * @method MessageCollection push(\Tarik02\Telegram\Entities\Message $item)
 * @method \Tarik02\Telegram\Entities\Message get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Message> getIterator()
 *
 * @method static MessageCollection make()
 * @method static MessageCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Message
 */
class MessageCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Message
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Message
    {
        return \Tarik02\Telegram\Entities\Message::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Message
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Message
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Message::fromPayload($payload);
    }
}
