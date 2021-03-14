<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PollOptionCollection
 *
 * @method PollOptionCollection push(\Tarik02\Telegram\Entities\PollOption $item)
 * @method \Tarik02\Telegram\Entities\PollOption get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PollOption> getIterator()
 *
 * @method static PollOptionCollection make()
 * @method static PollOptionCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PollOption
 */
final class PollOptionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PollOption
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PollOption
    {
        return \Tarik02\Telegram\Entities\PollOption::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PollOption
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PollOption
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PollOption::fromPayload($payload);
    }
}
