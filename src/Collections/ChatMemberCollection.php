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
 * @method static ChatMemberCollection fromPayload(array $payload)
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
     * @param array $payload
     * @return \Tarik02\Telegram\Entities\ChatMember
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Entities\ChatMember
    {
        return \Tarik02\Telegram\Entities\ChatMember::fromPayload($payload);
    }
}
