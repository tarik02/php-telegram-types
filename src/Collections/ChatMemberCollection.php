<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberCollection
 *
 * @method ChatMemberCollection push(\Tarik02\Telegram\Entities\ChatMember $item)
 * @method \Tarik02\Telegram\Entities\ChatMember get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMember> getIterator()
 *
 * @method static ChatMemberCollection make()
 * @method static ChatMemberCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMember
 */
final class ChatMemberCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMember
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMember
    {
        return \Tarik02\Telegram\Entities\ChatMember::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMember
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMember
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMember::fromPayload($payload);
    }
}
