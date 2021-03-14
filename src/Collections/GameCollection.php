<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class GameCollection
 *
 * @method GameCollection push(\Tarik02\Telegram\Entities\Game $item)
 * @method \Tarik02\Telegram\Entities\Game get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Game> getIterator()
 *
 * @method static GameCollection make()
 * @method static GameCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Game
 */
final class GameCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Game
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Game
    {
        return \Tarik02\Telegram\Entities\Game::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Game
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Game
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Game::fromPayload($payload);
    }
}
