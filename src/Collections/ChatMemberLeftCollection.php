<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberLeftCollection
 *
 * @method ChatMemberLeftCollection push(\Tarik02\Telegram\Entities\ChatMemberLeft $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberLeft get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberLeft> getIterator()
 *
 * @method static ChatMemberLeftCollection make()
 * @method static ChatMemberLeftCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberLeft
 */
final class ChatMemberLeftCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberLeft
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberLeft
    {
        return \Tarik02\Telegram\Entities\ChatMemberLeft::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberLeft
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberLeft
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberLeft::fromPayload($payload);
    }
}
