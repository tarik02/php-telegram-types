<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeChatMemberCollection
 *
 * @method BotCommandScopeChatMemberCollection push(\Tarik02\Telegram\Entities\BotCommandScopeChatMember $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeChatMember get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeChatMember> getIterator()
 *
 * @method static BotCommandScopeChatMemberCollection make()
 * @method static BotCommandScopeChatMemberCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeChatMember
 */
class BotCommandScopeChatMemberCollection extends \Tarik02\Telegram\Collections\BotCommandScopeCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeChatMember
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeChatMember
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeChatMember::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeChatMember
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeChatMember
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeChatMember::fromPayload($payload);
    }
}
