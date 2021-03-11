<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceChatEndedCollection
 *
 * @method VoiceChatEndedCollection push(\Tarik02\Telegram\Types\VoiceChatEnded $item)
 * @method \Tarik02\Telegram\Types\VoiceChatEnded get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\VoiceChatEnded> getIterator()
 *
 * @method static VoiceChatEndedCollection make()
 * @method static VoiceChatEndedCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\VoiceChatEnded
 */
final class VoiceChatEndedCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\VoiceChatEnded
     */
    public static function makeItem(): \Tarik02\Telegram\Types\VoiceChatEnded
    {
        return \Tarik02\Telegram\Types\VoiceChatEnded::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\VoiceChatEnded
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\VoiceChatEnded
    {
        return \Tarik02\Telegram\Types\VoiceChatEnded::fromPayload($payload);
    }
}
