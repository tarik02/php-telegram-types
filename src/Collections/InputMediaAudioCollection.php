<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaAudioCollection
 *
 * @method InputMediaAudioCollection push(\Tarik02\Telegram\Entities\InputMediaAudio $item)
 * @method \Tarik02\Telegram\Entities\InputMediaAudio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMediaAudio> getIterator()
 *
 * @method static InputMediaAudioCollection make()
 * @method static InputMediaAudioCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMediaAudio
 */
final class InputMediaAudioCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMediaAudio
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMediaAudio
    {
        return \Tarik02\Telegram\Entities\InputMediaAudio::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMediaAudio
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMediaAudio
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMediaAudio::fromPayload($payload);
    }
}
