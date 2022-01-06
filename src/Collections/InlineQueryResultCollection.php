<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCollection
 *
 * @method InlineQueryResultCollection push(\Tarik02\Telegram\Entities\InlineQueryResult $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResult get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResult> getIterator()
 *
 * @method static InlineQueryResultCollection make()
 * @method static InlineQueryResultCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResult
 */
class InlineQueryResultCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResult
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResult
    {
        return \Tarik02\Telegram\Entities\InlineQueryResult::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResult
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResult
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResult::fromPayload($payload);
    }
}
