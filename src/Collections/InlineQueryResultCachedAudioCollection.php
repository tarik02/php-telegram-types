<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedAudioCollection
 *
 * @method InlineQueryResultCachedAudioCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedAudio $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedAudio> getIterator()
 *
 * @method static InlineQueryResultCachedAudioCollection make()
 * @method static InlineQueryResultCachedAudioCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio
 */
class InlineQueryResultCachedAudioCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedAudio::fromPayload($payload);
    }
}
