<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberUpdatedCollection
 *
 * @method ChatMemberUpdatedCollection push(\Tarik02\Telegram\Types\ChatMemberUpdated $item)
 * @method \Tarik02\Telegram\Types\ChatMemberUpdated get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ChatMemberUpdated> getIterator()
 *
 * @method static ChatMemberUpdatedCollection make()
 * @method static ChatMemberUpdatedCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ChatMemberUpdated
 */
final class ChatMemberUpdatedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ChatMemberUpdated
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ChatMemberUpdated
    {
        return \Tarik02\Telegram\Types\ChatMemberUpdated::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ChatMemberUpdated
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ChatMemberUpdated
    {
        return \Tarik02\Telegram\Types\ChatMemberUpdated::fromPayload($payload);
    }
}
