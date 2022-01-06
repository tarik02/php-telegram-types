<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class GameHighScoreCollection
 *
 * @method GameHighScoreCollection push(\Tarik02\Telegram\Entities\GameHighScore $item)
 * @method \Tarik02\Telegram\Entities\GameHighScore get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\GameHighScore> getIterator()
 *
 * @method static GameHighScoreCollection make()
 * @method static GameHighScoreCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\GameHighScore
 */
class GameHighScoreCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\GameHighScore
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\GameHighScore
    {
        return \Tarik02\Telegram\Entities\GameHighScore::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\GameHighScore
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\GameHighScore
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\GameHighScore::fromPayload($payload);
    }
}
