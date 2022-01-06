<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultAudioCollection
 *
 * @method InlineQueryResultAudioCollection push(\Tarik02\Telegram\Entities\InlineQueryResultAudio $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultAudio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultAudio> getIterator()
 *
 * @method static InlineQueryResultAudioCollection make()
 * @method static InlineQueryResultAudioCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultAudio
 */
class InlineQueryResultAudioCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultAudio
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultAudio
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultAudio::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultAudio
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultAudio
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultAudio::fromPayload($payload);
    }
}
