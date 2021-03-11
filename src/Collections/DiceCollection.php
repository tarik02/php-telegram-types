<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class DiceCollection
 *
 * @method DiceCollection push(\Tarik02\Telegram\Types\Dice $item)
 * @method \Tarik02\Telegram\Types\Dice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Dice> getIterator()
 *
 * @method static DiceCollection make()
 * @method static DiceCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Dice
 */
final class DiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Dice
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Dice
    {
        return \Tarik02\Telegram\Types\Dice::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Dice
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Dice
    {
        return \Tarik02\Telegram\Types\Dice::fromPayload($payload);
    }
}
