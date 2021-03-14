<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PollAnswerCollection
 *
 * @method PollAnswerCollection push(\Tarik02\Telegram\Entities\PollAnswer $item)
 * @method \Tarik02\Telegram\Entities\PollAnswer get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PollAnswer> getIterator()
 *
 * @method static PollAnswerCollection make()
 * @method static PollAnswerCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PollAnswer
 */
final class PollAnswerCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PollAnswer
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PollAnswer
    {
        return \Tarik02\Telegram\Entities\PollAnswer::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PollAnswer
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PollAnswer
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PollAnswer::fromPayload($payload);
    }
}
