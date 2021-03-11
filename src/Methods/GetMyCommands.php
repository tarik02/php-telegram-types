<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetMyCommands
 *
 * Use this method to get the current list of the bot's commands. Requires no parameters. Returns Array of [BotCommand](https://core.telegram.org/bots/api/#botcommand) on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getmycommands
 */
class GetMyCommands extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'getMyCommands';
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
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Collections\BotCommandCollection
     */
    public static function createResponse($payload): \Tarik02\Telegram\Collections\BotCommandCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandCollection::fromPayload($payload ?? []);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
