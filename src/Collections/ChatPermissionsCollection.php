<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatPermissionsCollection
 *
 * @method ChatPermissionsCollection push(\Tarik02\Telegram\Entities\ChatPermissions $item)
 * @method \Tarik02\Telegram\Entities\ChatPermissions get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatPermissions> getIterator()
 *
 * @method static ChatPermissionsCollection make()
 * @method static ChatPermissionsCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatPermissions
 */
class ChatPermissionsCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatPermissions
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatPermissions
    {
        return \Tarik02\Telegram\Entities\ChatPermissions::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatPermissions
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatPermissions
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatPermissions::fromPayload($payload);
    }
}
