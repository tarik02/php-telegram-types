<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatInviteLinkCollection
 *
 * @method ChatInviteLinkCollection push(\Tarik02\Telegram\Types\ChatInviteLink $item)
 * @method \Tarik02\Telegram\Types\ChatInviteLink get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ChatInviteLink> getIterator()
 *
 * @method static ChatInviteLinkCollection make()
 * @method static ChatInviteLinkCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ChatInviteLink
 */
final class ChatInviteLinkCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ChatInviteLink
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ChatInviteLink
    {
        return \Tarik02\Telegram\Types\ChatInviteLink::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ChatInviteLink
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ChatInviteLink
    {
        return \Tarik02\Telegram\Types\ChatInviteLink::fromPayload($payload);
    }
}
