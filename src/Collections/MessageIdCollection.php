<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MessageIdCollection
 *
 * @method MessageIdCollection push(\Tarik02\Telegram\Entities\MessageId $item)
 * @method \Tarik02\Telegram\Entities\MessageId get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\MessageId> getIterator()
 *
 * @method static MessageIdCollection make()
 * @method static MessageIdCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\MessageId
 */
class MessageIdCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\MessageId
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\MessageId
    {
        return \Tarik02\Telegram\Entities\MessageId::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\MessageId
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\MessageId
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\MessageId::fromPayload($payload);
    }
}
