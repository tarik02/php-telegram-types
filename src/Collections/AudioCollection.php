<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class AudioCollection
 *
 * @method AudioCollection push(\Tarik02\Telegram\Types\Audio $item)
 * @method \Tarik02\Telegram\Types\Audio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Audio> getIterator()
 *
 * @method static AudioCollection make()
 * @method static AudioCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Audio
 */
final class AudioCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Audio
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Audio
    {
        return \Tarik02\Telegram\Types\Audio::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Audio
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Audio
    {
        return \Tarik02\Telegram\Types\Audio::fromPayload($payload);
    }
}
