<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceChatScheduledCollection
 *
 * @method VoiceChatScheduledCollection push(\Tarik02\Telegram\Entities\VoiceChatScheduled $item)
 * @method \Tarik02\Telegram\Entities\VoiceChatScheduled get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\VoiceChatScheduled> getIterator()
 *
 * @method static VoiceChatScheduledCollection make()
 * @method static VoiceChatScheduledCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\VoiceChatScheduled
 */
final class VoiceChatScheduledCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\VoiceChatScheduled
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\VoiceChatScheduled
    {
        return \Tarik02\Telegram\Entities\VoiceChatScheduled::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\VoiceChatScheduled
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\VoiceChatScheduled
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\VoiceChatScheduled::fromPayload($payload);
    }
}
