<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCollection
 *
 * @method InlineQueryResultCollection push(\Tarik02\Telegram\Types\InlineQueryResult $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResult get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResult> getIterator()
 *
 * @method static InlineQueryResultCollection make()
 * @method static InlineQueryResultCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResult
 */
final class InlineQueryResultCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResult
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResult
    {
        return \Tarik02\Telegram\Types\InlineQueryResult::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResult
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResult
    {
        return \Tarik02\Telegram\Types\InlineQueryResult::fromPayload($payload);
    }
}
