<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MessageIdCollection
 *
 * @method MessageIdCollection push(\Tarik02\Telegram\Types\MessageId $item)
 * @method \Tarik02\Telegram\Types\MessageId get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\MessageId> getIterator()
 *
 * @method static MessageIdCollection make()
 * @method static MessageIdCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\MessageId
 */
final class MessageIdCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\MessageId
     */
    public static function makeItem(): \Tarik02\Telegram\Types\MessageId
    {
        return \Tarik02\Telegram\Types\MessageId::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\MessageId
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\MessageId
    {
        return \Tarik02\Telegram\Types\MessageId::fromPayload($payload);
    }
}
