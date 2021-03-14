<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberUpdatedCollection
 *
 * @method ChatMemberUpdatedCollection push(\Tarik02\Telegram\Entities\ChatMemberUpdated $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberUpdated get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberUpdated> getIterator()
 *
 * @method static ChatMemberUpdatedCollection make()
 * @method static ChatMemberUpdatedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberUpdated
 */
final class ChatMemberUpdatedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberUpdated
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberUpdated
    {
        return \Tarik02\Telegram\Entities\ChatMemberUpdated::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberUpdated
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberUpdated
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberUpdated::fromPayload($payload);
    }
}
