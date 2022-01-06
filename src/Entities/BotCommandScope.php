<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class BotCommandScope
 *
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#botcommandscope
 */
abstract class BotCommandScope implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\BotCommandScopeCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\BotCommandScopeCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandScopeCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        $key = $payload['type'] ?? null;

        switch ($key) {
            case 'default':
                return \Tarik02\Telegram\Entities\BotCommandScopeDefault::fromPayload($payload);

            case 'all_private_chats':
                return \Tarik02\Telegram\Entities\BotCommandScopeAllPrivateChats::fromPayload($payload);

            case 'all_group_chats':
                return \Tarik02\Telegram\Entities\BotCommandScopeAllGroupChats::fromPayload($payload);

            case 'all_chat_administrators':
                return \Tarik02\Telegram\Entities\BotCommandScopeAllChatAdministrators::fromPayload($payload);

            case 'chat':
                return \Tarik02\Telegram\Entities\BotCommandScopeChat::fromPayload($payload);

            case 'chat_administrators':
                return \Tarik02\Telegram\Entities\BotCommandScopeChatAdministrators::fromPayload($payload);

            case 'chat_member':
                return \Tarik02\Telegram\Entities\BotCommandScopeChatMember::fromPayload($payload);

        }

        throw new \InvalidArgumentException('Field \'type\' expected to have value of: \'default\' or \'all_private_chats\' or \'all_group_chats\' or \'all_chat_administrators\' or \'chat\' or \'chat_administrators\' or \'chat_member\'; got ' . ($value ?? 'null') . '.');
    }
}
