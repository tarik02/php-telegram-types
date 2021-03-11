<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatLocationCollection
 *
 * @method ChatLocationCollection push(\Tarik02\Telegram\Types\ChatLocation $item)
 * @method \Tarik02\Telegram\Types\ChatLocation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ChatLocation> getIterator()
 *
 * @method static ChatLocationCollection make()
 * @method static ChatLocationCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ChatLocation
 */
final class ChatLocationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ChatLocation
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ChatLocation
    {
        return \Tarik02\Telegram\Types\ChatLocation::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ChatLocation
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ChatLocation
    {
        return \Tarik02\Telegram\Types\ChatLocation::fromPayload($payload);
    }
}
