<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceChatStartedCollection
 *
 * @method VoiceChatStartedCollection push(\Tarik02\Telegram\Entities\VoiceChatStarted $item)
 * @method \Tarik02\Telegram\Entities\VoiceChatStarted get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\VoiceChatStarted> getIterator()
 *
 * @method static VoiceChatStartedCollection make()
 * @method static VoiceChatStartedCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\VoiceChatStarted
 */
final class VoiceChatStartedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\VoiceChatStarted
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\VoiceChatStarted
    {
        return \Tarik02\Telegram\Entities\VoiceChatStarted::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\VoiceChatStarted
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\VoiceChatStarted
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\VoiceChatStarted::fromPayload($payload);
    }
}
