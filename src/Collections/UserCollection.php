<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class UserCollection
 *
 * @method UserCollection push(\Tarik02\Telegram\Types\User $item)
 * @method \Tarik02\Telegram\Types\User get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\User> getIterator()
 *
 * @method static UserCollection make()
 * @method static UserCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\User
 */
final class UserCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\User
     */
    public static function makeItem(): \Tarik02\Telegram\Types\User
    {
        return \Tarik02\Telegram\Types\User::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\User
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\User
    {
        return \Tarik02\Telegram\Types\User::fromPayload($payload);
    }
}
