<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeChatAdministratorsCollection
 *
 * @method BotCommandScopeChatAdministratorsCollection push(\Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators> getIterator()
 *
 * @method static BotCommandScopeChatAdministratorsCollection make()
 * @method static BotCommandScopeChatAdministratorsCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators
 */
class BotCommandScopeChatAdministratorsCollection extends \Tarik02\Telegram\Collections\BotCommandScopeCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators::fromPayload($payload);
    }
}
