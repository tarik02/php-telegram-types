<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeAllChatAdministratorsCollection
 *
 * @method BotCommandScopeAllChatAdministratorsCollection push(\Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators> getIterator()
 *
 * @method static BotCommandScopeAllChatAdministratorsCollection make()
 * @method static BotCommandScopeAllChatAdministratorsCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators
 */
class BotCommandScopeAllChatAdministratorsCollection extends \Tarik02\Telegram\Collections\BotCommandScopeCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators::fromPayload($payload);
    }
}
