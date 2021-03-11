<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SetMyCommands
 *
 * Use this method to change the list of the bot's commands. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#setmycommands
 */
class SetMyCommands extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'setMyCommands';
    }

    /**
     * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     *
     * @return \Tarik02\Telegram\Collections\BotCommandCollection
     */
    public function commands(): \Tarik02\Telegram\Collections\BotCommandCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandCollection::fromPayload($this->payload['commands'] ?? []);
    }

    /**
     * A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     *
     * @param \Tarik02\Telegram\Collections\BotCommandCollection $commands
     * @return self
     */
    public function withCommands(\Tarik02\Telegram\Collections\BotCommandCollection $commands): self
    {
        $payload = $this->payload;
        $payload['commands'] = $commands->toPayload();
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
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * @param mixed $payload
     * @return bool
     */
    public static function createResponse($payload): bool
    {
        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
