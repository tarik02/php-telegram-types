<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatLocationCollection
 *
 * @method ChatLocationCollection push(\Tarik02\Telegram\Entities\ChatLocation $item)
 * @method \Tarik02\Telegram\Entities\ChatLocation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatLocation> getIterator()
 *
 * @method static ChatLocationCollection make()
 * @method static ChatLocationCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatLocation
 */
class ChatLocationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatLocation
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatLocation
    {
        return \Tarik02\Telegram\Entities\ChatLocation::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatLocation
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatLocation
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatLocation::fromPayload($payload);
    }
}
