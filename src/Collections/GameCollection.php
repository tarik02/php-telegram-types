<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class GameCollection
 *
 * @method GameCollection push(\Tarik02\Telegram\Types\Game $item)
 * @method \Tarik02\Telegram\Types\Game get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Game> getIterator()
 *
 * @method static GameCollection make()
 * @method static GameCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Game
 */
final class GameCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Game
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Game
    {
        return \Tarik02\Telegram\Types\Game::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Game
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Game
    {
        return \Tarik02\Telegram\Types\Game::fromPayload($payload);
    }
}
