<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PollCollection
 *
 * @method PollCollection push(\Tarik02\Telegram\Entities\Poll $item)
 * @method \Tarik02\Telegram\Entities\Poll get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Poll> getIterator()
 *
 * @method static PollCollection make()
 * @method static PollCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Poll
 */
class PollCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Poll
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Poll
    {
        return \Tarik02\Telegram\Entities\Poll::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Poll
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Poll
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Poll::fromPayload($payload);
    }
}
