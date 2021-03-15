<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class CallbackGameCollection
 *
 * @method CallbackGameCollection push(\Tarik02\Telegram\Entities\CallbackGame $item)
 * @method \Tarik02\Telegram\Entities\CallbackGame get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\CallbackGame> getIterator()
 *
 * @method static CallbackGameCollection make()
 * @method static CallbackGameCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\CallbackGame
 */
final class CallbackGameCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\CallbackGame
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\CallbackGame
    {
        return \Tarik02\Telegram\Entities\CallbackGame::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\CallbackGame
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\CallbackGame
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\CallbackGame::fromPayload($payload);
    }
}
