<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryCollection
 *
 * @method InlineQueryCollection push(\Tarik02\Telegram\Types\InlineQuery $item)
 * @method \Tarik02\Telegram\Types\InlineQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQuery> getIterator()
 *
 * @method static InlineQueryCollection make()
 * @method static InlineQueryCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQuery
 */
final class InlineQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQuery
    {
        return \Tarik02\Telegram\Types\InlineQuery::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQuery
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQuery
    {
        return \Tarik02\Telegram\Types\InlineQuery::fromPayload($payload);
    }
}
