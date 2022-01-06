<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ChatMemberAdministratorCollection
 *
 * @method ChatMemberAdministratorCollection push(\Tarik02\Telegram\Entities\ChatMemberAdministrator $item)
 * @method \Tarik02\Telegram\Entities\ChatMemberAdministrator get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ChatMemberAdministrator> getIterator()
 *
 * @method static ChatMemberAdministratorCollection make()
 * @method static ChatMemberAdministratorCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ChatMemberAdministrator
 */
class ChatMemberAdministratorCollection extends \Tarik02\Telegram\Collections\ChatMemberCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ChatMemberAdministrator
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ChatMemberAdministrator
    {
        return \Tarik02\Telegram\Entities\ChatMemberAdministrator::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ChatMemberAdministrator
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ChatMemberAdministrator
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ChatMemberAdministrator::fromPayload($payload);
    }
}
