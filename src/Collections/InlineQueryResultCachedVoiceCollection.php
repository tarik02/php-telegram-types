<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedVoiceCollection
 *
 * @method InlineQueryResultCachedVoiceCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedVoice $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedVoice> getIterator()
 *
 * @method static InlineQueryResultCachedVoiceCollection make()
 * @method static InlineQueryResultCachedVoiceCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice
 */
final class InlineQueryResultCachedVoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedVoice::fromPayload($payload);
    }
}
