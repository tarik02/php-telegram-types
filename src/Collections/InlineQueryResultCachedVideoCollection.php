<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedVideoCollection
 *
 * @method InlineQueryResultCachedVideoCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedVideo $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedVideo> getIterator()
 *
 * @method static InlineQueryResultCachedVideoCollection make()
 * @method static InlineQueryResultCachedVideoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo
 */
class InlineQueryResultCachedVideoCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedVideo::fromPayload($payload);
    }
}
