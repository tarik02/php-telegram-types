<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeAllPrivateChatsCollection
 *
 * @method BotCommandScopeAllPrivateChatsCollection push(\Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats> getIterator()
 *
 * @method static BotCommandScopeAllPrivateChatsCollection make()
 * @method static BotCommandScopeAllPrivateChatsCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats
 */
final class BotCommandScopeAllPrivateChatsCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats::fromPayload($payload);
    }
}
