<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaAudioCollection
 *
 * @method InputMediaAudioCollection push(\Tarik02\Telegram\Types\InputMediaAudio $item)
 * @method \Tarik02\Telegram\Types\InputMediaAudio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMediaAudio> getIterator()
 *
 * @method static InputMediaAudioCollection make()
 * @method static InputMediaAudioCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMediaAudio
 */
final class InputMediaAudioCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMediaAudio
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMediaAudio
    {
        return \Tarik02\Telegram\Types\InputMediaAudio::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMediaAudio
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMediaAudio
    {
        return \Tarik02\Telegram\Types\InputMediaAudio::fromPayload($payload);
    }
}
