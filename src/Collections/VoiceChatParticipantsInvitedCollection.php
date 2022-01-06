<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceChatParticipantsInvitedCollection
 *
 * @method VoiceChatParticipantsInvitedCollection push(\Tarik02\Telegram\Entities\VoiceChatParticipantsInvited $item)
 * @method \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\VoiceChatParticipantsInvited> getIterator()
 *
 * @method static VoiceChatParticipantsInvitedCollection make()
 * @method static VoiceChatParticipantsInvitedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited
 */
class VoiceChatParticipantsInvitedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited
    {
        return \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited::fromPayload($payload);
    }
}
