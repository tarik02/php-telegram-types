<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberBannedCollection
 *
 * @method ChatMemberBannedCollection push(\Tarik02\Telegram\Entities\ChatMemberBanned $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberBanned get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberBanned> getIterator()
 *
 * @method static ChatMemberBannedCollection make()
 * @method static ChatMemberBannedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberBanned
 */
final class ChatMemberBannedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberBanned
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberBanned
    {
        return \Tarik02\Telegram\Entities\ChatMemberBanned::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberBanned
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberBanned
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberBanned::fromPayload($payload);
    }
}
