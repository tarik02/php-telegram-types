<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultGameCollection
 *
 * @method InlineQueryResultGameCollection push(\Tarik02\Telegram\Entities\InlineQueryResultGame $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultGame get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultGame> getIterator()
 *
 * @method static InlineQueryResultGameCollection make()
 * @method static InlineQueryResultGameCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultGame
 */
final class InlineQueryResultGameCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultGame
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultGame
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultGame::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultGame
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultGame
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultGame::fromPayload($payload);
    }
}
