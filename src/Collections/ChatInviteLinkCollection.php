<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatInviteLinkCollection
 *
 * @method ChatInviteLinkCollection push(\Tarik02\Telegram\Entities\ChatInviteLink $item)
 * @method \Tarik02\Telegram\Entities\ChatInviteLink get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatInviteLink> getIterator()
 *
 * @method static ChatInviteLinkCollection make()
 * @method static ChatInviteLinkCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatInviteLink
 */
class ChatInviteLinkCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatInviteLink
    {
        return \Tarik02\Telegram\Entities\ChatInviteLink::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatInviteLink
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatInviteLink::fromPayload($payload);
    }
}
