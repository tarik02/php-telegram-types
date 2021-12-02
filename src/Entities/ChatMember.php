<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMember
 *
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmember
 */
abstract class ChatMember implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\ChatMemberCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberCollection::make();
    }
}
