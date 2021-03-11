<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedAudioCollection
 *
 * @method InlineQueryResultCachedAudioCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedAudio $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedAudio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedAudio> getIterator()
 *
 * @method static InlineQueryResultCachedAudioCollection make()
 * @method static InlineQueryResultCachedAudioCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedAudio
 */
final class InlineQueryResultCachedAudioCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedAudio
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedAudio
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedAudio::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedAudio
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedAudio
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedAudio::fromPayload($payload);
    }
}
