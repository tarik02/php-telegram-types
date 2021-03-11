<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedVoiceCollection
 *
 * @method InlineQueryResultCachedVoiceCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedVoice $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedVoice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedVoice> getIterator()
 *
 * @method static InlineQueryResultCachedVoiceCollection make()
 * @method static InlineQueryResultCachedVoiceCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedVoice
 */
final class InlineQueryResultCachedVoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedVoice
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedVoice
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedVoice::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedVoice
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedVoice
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedVoice::fromPayload($payload);
    }
}
