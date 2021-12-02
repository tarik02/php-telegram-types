<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberRestrictedCollection
 *
 * @method ChatMemberRestrictedCollection push(\Tarik02\Telegram\Entities\ChatMemberRestricted $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberRestricted get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberRestricted> getIterator()
 *
 * @method static ChatMemberRestrictedCollection make()
 * @method static ChatMemberRestrictedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberRestricted
 */
final class ChatMemberRestrictedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberRestricted
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberRestricted
    {
        return \Tarik02\Telegram\Entities\ChatMemberRestricted::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberRestricted
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberRestricted
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberRestricted::fromPayload($payload);
    }
}
