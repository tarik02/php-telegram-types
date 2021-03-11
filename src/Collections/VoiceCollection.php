<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceCollection
 *
 * @method VoiceCollection push(\Tarik02\Telegram\Types\Voice $item)
 * @method \Tarik02\Telegram\Types\Voice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Voice> getIterator()
 *
 * @method static VoiceCollection make()
 * @method static VoiceCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Voice
 */
final class VoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Voice
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Voice
    {
        return \Tarik02\Telegram\Types\Voice::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Voice
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Voice
    {
        return \Tarik02\Telegram\Types\Voice::fromPayload($payload);
    }
}
