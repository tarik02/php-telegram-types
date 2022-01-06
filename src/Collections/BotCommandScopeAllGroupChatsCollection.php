<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeAllGroupChatsCollection
 *
 * @method BotCommandScopeAllGroupChatsCollection push(\Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats> getIterator()
 *
 * @method static BotCommandScopeAllGroupChatsCollection make()
 * @method static BotCommandScopeAllGroupChatsCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats
 */
class BotCommandScopeAllGroupChatsCollection extends \Tarik02\Telegram\Collections\BotCommandScopeCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats::fromPayload($payload);
    }
}
