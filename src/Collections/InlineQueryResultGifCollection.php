<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultGifCollection
 *
 * @method InlineQueryResultGifCollection push(\Tarik02\Telegram\Types\InlineQueryResultGif $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultGif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultGif> getIterator()
 *
 * @method static InlineQueryResultGifCollection make()
 * @method static InlineQueryResultGifCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultGif
 */
final class InlineQueryResultGifCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultGif
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultGif
    {
        return \Tarik02\Telegram\Types\InlineQueryResultGif::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultGif
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultGif
    {
        return \Tarik02\Telegram\Types\InlineQueryResultGif::fromPayload($payload);
    }
}
