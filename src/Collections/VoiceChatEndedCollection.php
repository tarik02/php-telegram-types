<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceChatEndedCollection
 *
 * @method VoiceChatEndedCollection push(\Tarik02\Telegram\Entities\VoiceChatEnded $item)
 * @method \Tarik02\Telegram\Entities\VoiceChatEnded get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\VoiceChatEnded> getIterator()
 *
 * @method static VoiceChatEndedCollection make()
 * @method static VoiceChatEndedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\VoiceChatEnded
 */
final class VoiceChatEndedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\VoiceChatEnded
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\VoiceChatEnded
    {
        return \Tarik02\Telegram\Entities\VoiceChatEnded::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\VoiceChatEnded
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\VoiceChatEnded
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\VoiceChatEnded::fromPayload($payload);
    }
}
