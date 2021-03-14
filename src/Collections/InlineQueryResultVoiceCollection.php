<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultVoiceCollection
 *
 * @method InlineQueryResultVoiceCollection push(\Tarik02\Telegram\Entities\InlineQueryResultVoice $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultVoice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultVoice> getIterator()
 *
 * @method static InlineQueryResultVoiceCollection make()
 * @method static InlineQueryResultVoiceCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultVoice
 */
final class InlineQueryResultVoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultVoice
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultVoice
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultVoice::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultVoice
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultVoice
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultVoice::fromPayload($payload);
    }
}
