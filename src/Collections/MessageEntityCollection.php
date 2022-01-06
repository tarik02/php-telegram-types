<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MessageEntityCollection
 *
 * @method MessageEntityCollection push(\Tarik02\Telegram\Entities\MessageEntity $item)
 * @method \Tarik02\Telegram\Entities\MessageEntity get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\MessageEntity> getIterator()
 *
 * @method static MessageEntityCollection make()
 * @method static MessageEntityCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\MessageEntity
 */
class MessageEntityCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\MessageEntity
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\MessageEntity
    {
        return \Tarik02\Telegram\Entities\MessageEntity::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\MessageEntity
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\MessageEntity
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\MessageEntity::fromPayload($payload);
    }
}
