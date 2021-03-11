<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceChatParticipantsInvitedCollection
 *
 * @method VoiceChatParticipantsInvitedCollection push(\Tarik02\Telegram\Types\VoiceChatParticipantsInvited $item)
 * @method \Tarik02\Telegram\Types\VoiceChatParticipantsInvited get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\VoiceChatParticipantsInvited> getIterator()
 *
 * @method static VoiceChatParticipantsInvitedCollection make()
 * @method static VoiceChatParticipantsInvitedCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\VoiceChatParticipantsInvited
 */
final class VoiceChatParticipantsInvitedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\VoiceChatParticipantsInvited
     */
    public static function makeItem(): \Tarik02\Telegram\Types\VoiceChatParticipantsInvited
    {
        return \Tarik02\Telegram\Types\VoiceChatParticipantsInvited::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\VoiceChatParticipantsInvited
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\VoiceChatParticipantsInvited
    {
        return \Tarik02\Telegram\Types\VoiceChatParticipantsInvited::fromPayload($payload);
    }
}
