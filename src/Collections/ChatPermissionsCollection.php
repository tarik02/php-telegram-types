<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatPermissionsCollection
 *
 * @method ChatPermissionsCollection push(\Tarik02\Telegram\Types\ChatPermissions $item)
 * @method \Tarik02\Telegram\Types\ChatPermissions get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ChatPermissions> getIterator()
 *
 * @method static ChatPermissionsCollection make()
 * @method static ChatPermissionsCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ChatPermissions
 */
final class ChatPermissionsCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ChatPermissions
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ChatPermissions
    {
        return \Tarik02\Telegram\Types\ChatPermissions::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ChatPermissions
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ChatPermissions
    {
        return \Tarik02\Telegram\Types\ChatPermissions::fromPayload($payload);
    }
}
