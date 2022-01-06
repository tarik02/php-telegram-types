<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class BotCommandScopeChat
 *
 * Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering a specific chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#botcommandscopechat
 */
class BotCommandScopeChat extends \Tarik02\Telegram\Entities\BotCommandScope implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Scope type, must be *chat*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Scope type, must be *chat*
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     *
     * @param int|string $chatId
     * @return self
     */
    public function withChatId($chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * @return array
     */
    public function toPayload(): array
    {
        return $this->payload;
    }

    /**
     * @return self
     */
    public static function make(): self
    {
        return new self([]);
    }

    /**
     * @return \Tarik02\Telegram\Collections\BotCommandScopeChatCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\BotCommandScopeChatCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandScopeChatCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
