<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class DiceCollection
 *
 * @method DiceCollection push(\Tarik02\Telegram\Entities\Dice $item)
 * @method \Tarik02\Telegram\Entities\Dice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Dice> getIterator()
 *
 * @method static DiceCollection make()
 * @method static DiceCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Dice
 */
class DiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Dice
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Dice
    {
        return \Tarik02\Telegram\Entities\Dice::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Dice
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Dice
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Dice::fromPayload($payload);
    }
}
