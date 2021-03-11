<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PollAnswerCollection
 *
 * @method PollAnswerCollection push(\Tarik02\Telegram\Types\PollAnswer $item)
 * @method \Tarik02\Telegram\Types\PollAnswer get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PollAnswer> getIterator()
 *
 * @method static PollAnswerCollection make()
 * @method static PollAnswerCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PollAnswer
 */
final class PollAnswerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PollAnswer
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PollAnswer
    {
        return \Tarik02\Telegram\Types\PollAnswer::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PollAnswer
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PollAnswer
    {
        return \Tarik02\Telegram\Types\PollAnswer::fromPayload($payload);
    }
}
