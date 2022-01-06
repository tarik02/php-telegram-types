<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultGifCollection
 *
 * @method InlineQueryResultGifCollection push(\Tarik02\Telegram\Entities\InlineQueryResultGif $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultGif get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultGif> getIterator()
 *
 * @method static InlineQueryResultGifCollection make()
 * @method static InlineQueryResultGifCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultGif
 */
class InlineQueryResultGifCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultGif
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultGif
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultGif::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultGif
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultGif
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultGif::fromPayload($payload);
    }
}
