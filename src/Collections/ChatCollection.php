<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatCollection
 *
 * @method ChatCollection push(\Tarik02\Telegram\Types\Chat $item)
 * @method \Tarik02\Telegram\Types\Chat get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Chat> getIterator()
 *
 * @method static ChatCollection make()
 * @method static ChatCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Chat
 */
final class ChatCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Chat
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Chat
    {
        return \Tarik02\Telegram\Types\Chat::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Chat
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Chat
    {
        return \Tarik02\Telegram\Types\Chat::fromPayload($payload);
    }
}
