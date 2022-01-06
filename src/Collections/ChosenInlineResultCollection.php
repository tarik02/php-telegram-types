<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChosenInlineResultCollection
 *
 * @method ChosenInlineResultCollection push(\Tarik02\Telegram\Entities\ChosenInlineResult $item)
 * @method \Tarik02\Telegram\Entities\ChosenInlineResult get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChosenInlineResult> getIterator()
 *
 * @method static ChosenInlineResultCollection make()
 * @method static ChosenInlineResultCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChosenInlineResult
 */
class ChosenInlineResultCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChosenInlineResult
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChosenInlineResult
    {
        return \Tarik02\Telegram\Entities\ChosenInlineResult::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChosenInlineResult
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChosenInlineResult
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChosenInlineResult::fromPayload($payload);
    }
}
