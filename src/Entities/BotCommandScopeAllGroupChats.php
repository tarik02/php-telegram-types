<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class BotCommandScopeAllGroupChats
 *
 * Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering all group and supergroup chats.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#botcommandscopeallgroupchats
 */
class BotCommandScopeAllGroupChats implements \Tarik02\Telegram\Entities\BotCommandScope
{
    /**
     * Scope type, must be *all\_group\_chats*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Scope type, must be *all\_group\_chats*
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
     * @return \Tarik02\Telegram\Collections\BotCommandScopeAllGroupChatsCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\BotCommandScopeAllGroupChatsCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandScopeAllGroupChatsCollection::make();
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
