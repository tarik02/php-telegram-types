<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatJoinRequestCollection
 *
 * @method ChatJoinRequestCollection push(\Tarik02\Telegram\Entities\ChatJoinRequest $item)
 * @method \Tarik02\Telegram\Entities\ChatJoinRequest get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatJoinRequest> getIterator()
 *
 * @method static ChatJoinRequestCollection make()
 * @method static ChatJoinRequestCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatJoinRequest
 */
final class ChatJoinRequestCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatJoinRequest
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatJoinRequest
    {
        return \Tarik02\Telegram\Entities\ChatJoinRequest::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatJoinRequest
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatJoinRequest
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatJoinRequest::fromPayload($payload);
    }
}
