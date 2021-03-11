<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultGameCollection
 *
 * @method InlineQueryResultGameCollection push(\Tarik02\Telegram\Types\InlineQueryResultGame $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultGame get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultGame> getIterator()
 *
 * @method static InlineQueryResultGameCollection make()
 * @method static InlineQueryResultGameCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultGame
 */
final class InlineQueryResultGameCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultGame
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultGame
    {
        return \Tarik02\Telegram\Types\InlineQueryResultGame::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultGame
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultGame
    {
        return \Tarik02\Telegram\Types\InlineQueryResultGame::fromPayload($payload);
    }
}
