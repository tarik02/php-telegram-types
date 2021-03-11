<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PollCollection
 *
 * @method PollCollection push(\Tarik02\Telegram\Types\Poll $item)
 * @method \Tarik02\Telegram\Types\Poll get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Poll> getIterator()
 *
 * @method static PollCollection make()
 * @method static PollCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Poll
 */
final class PollCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Poll
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Poll
    {
        return \Tarik02\Telegram\Types\Poll::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Poll
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Poll
    {
        return \Tarik02\Telegram\Types\Poll::fromPayload($payload);
    }
}
