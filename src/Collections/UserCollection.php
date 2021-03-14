<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class UserCollection
 *
 * @method UserCollection push(\Tarik02\Telegram\Entities\User $item)
 * @method \Tarik02\Telegram\Entities\User get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\User> getIterator()
 *
 * @method static UserCollection make()
 * @method static UserCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\User
 */
final class UserCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\User
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\User
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\User
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\User::fromPayload($payload);
    }
}
