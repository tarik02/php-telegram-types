<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatCollection
 *
 * @method ChatCollection push(\Tarik02\Telegram\Entities\Chat $item)
 * @method \Tarik02\Telegram\Entities\Chat get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Chat> getIterator()
 *
 * @method static ChatCollection make()
 * @method static ChatCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Chat
 */
final class ChatCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Chat
    {
        return \Tarik02\Telegram\Entities\Chat::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Chat
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Chat::fromPayload($payload);
    }
}
