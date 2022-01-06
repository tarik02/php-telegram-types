<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeChatCollection
 *
 * @method BotCommandScopeChatCollection push(\Tarik02\Telegram\Entities\BotCommandScopeChat $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeChat get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeChat> getIterator()
 *
 * @method static BotCommandScopeChatCollection make()
 * @method static BotCommandScopeChatCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeChat
 */
class BotCommandScopeChatCollection extends \Tarik02\Telegram\Collections\BotCommandScopeCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeChat
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeChat
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeChat::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeChat
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeChat
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeChat::fromPayload($payload);
    }
}
