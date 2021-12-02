<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class BotCommandScopeDefault
 *
 * Represents the default [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands. Default commands are used if no commands with a [narrower scope](https://core.telegram.org/bots/api/#determining-list-of-commands) are specified for the user.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#botcommandscopedefault
 */
class BotCommandScopeDefault implements \Tarik02\Telegram\Entities\BotCommandScope
{
    /**
     * Scope type, must be *default*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Scope type, must be *default*
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
     * @return \Tarik02\Telegram\Collections\BotCommandScopeDefaultCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\BotCommandScopeDefaultCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandScopeDefaultCollection::make();
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
