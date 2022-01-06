<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultVideoCollection
 *
 * @method InlineQueryResultVideoCollection push(\Tarik02\Telegram\Entities\InlineQueryResultVideo $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultVideo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultVideo> getIterator()
 *
 * @method static InlineQueryResultVideoCollection make()
 * @method static InlineQueryResultVideoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultVideo
 */
class InlineQueryResultVideoCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultVideo
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultVideo
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultVideo::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultVideo
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultVideo
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultVideo::fromPayload($payload);
    }
}
