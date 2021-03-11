<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultVoiceCollection
 *
 * @method InlineQueryResultVoiceCollection push(\Tarik02\Telegram\Types\InlineQueryResultVoice $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultVoice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultVoice> getIterator()
 *
 * @method static InlineQueryResultVoiceCollection make()
 * @method static InlineQueryResultVoiceCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultVoice
 */
final class InlineQueryResultVoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultVoice
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultVoice
    {
        return \Tarik02\Telegram\Types\InlineQueryResultVoice::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultVoice
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultVoice
    {
        return \Tarik02\Telegram\Types\InlineQueryResultVoice::fromPayload($payload);
    }
}
