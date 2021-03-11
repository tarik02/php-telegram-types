<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChosenInlineResultCollection
 *
 * @method ChosenInlineResultCollection push(\Tarik02\Telegram\Types\ChosenInlineResult $item)
 * @method \Tarik02\Telegram\Types\ChosenInlineResult get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ChosenInlineResult> getIterator()
 *
 * @method static ChosenInlineResultCollection make()
 * @method static ChosenInlineResultCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ChosenInlineResult
 */
final class ChosenInlineResultCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ChosenInlineResult
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ChosenInlineResult
    {
        return \Tarik02\Telegram\Types\ChosenInlineResult::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ChosenInlineResult
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ChosenInlineResult
    {
        return \Tarik02\Telegram\Types\ChosenInlineResult::fromPayload($payload);
    }
}
