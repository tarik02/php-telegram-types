<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PollOptionCollection
 *
 * @method PollOptionCollection push(\Tarik02\Telegram\Types\PollOption $item)
 * @method \Tarik02\Telegram\Types\PollOption get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PollOption> getIterator()
 *
 * @method static PollOptionCollection make()
 * @method static PollOptionCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PollOption
 */
final class PollOptionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PollOption
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PollOption
    {
        return \Tarik02\Telegram\Types\PollOption::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PollOption
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PollOption
    {
        return \Tarik02\Telegram\Types\PollOption::fromPayload($payload);
    }
}
