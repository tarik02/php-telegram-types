<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultAudioCollection
 *
 * @method InlineQueryResultAudioCollection push(\Tarik02\Telegram\Types\InlineQueryResultAudio $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultAudio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultAudio> getIterator()
 *
 * @method static InlineQueryResultAudioCollection make()
 * @method static InlineQueryResultAudioCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultAudio
 */
final class InlineQueryResultAudioCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultAudio
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultAudio
    {
        return \Tarik02\Telegram\Types\InlineQueryResultAudio::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultAudio
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultAudio
    {
        return \Tarik02\Telegram\Types\InlineQueryResultAudio::fromPayload($payload);
    }
}
