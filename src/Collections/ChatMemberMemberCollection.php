<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberMemberCollection
 *
 * @method ChatMemberMemberCollection push(\Tarik02\Telegram\Entities\ChatMemberMember $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberMember get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberMember> getIterator()
 *
 * @method static ChatMemberMemberCollection make()
 * @method static ChatMemberMemberCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberMember
 */
final class ChatMemberMemberCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberMember
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberMember
    {
        return \Tarik02\Telegram\Entities\ChatMemberMember::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberMember
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberMember
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberMember::fromPayload($payload);
    }
}
