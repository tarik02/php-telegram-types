<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberOwnerCollection
 *
 * @method ChatMemberOwnerCollection push(\Tarik02\Telegram\Entities\ChatMemberOwner $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberOwner get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberOwner> getIterator()
 *
 * @method static ChatMemberOwnerCollection make()
 * @method static ChatMemberOwnerCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberOwner
 */
final class ChatMemberOwnerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberOwner
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberOwner
    {
        return \Tarik02\Telegram\Entities\ChatMemberOwner::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberOwner
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberOwner
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberOwner::fromPayload($payload);
    }
}
