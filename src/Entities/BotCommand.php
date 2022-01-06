<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class BotCommand
 *
 * This object represents a bot command.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#botcommand
 */
class BotCommand implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     *
     * @return string
     */
    public function command(): string
    {
        return $this->payload['command'];
    }

    /**
     * Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     *
     * @param string $command
     * @return self
     */
    public function withCommand(string $command): self
    {
        $payload = $this->payload;
        $payload['command'] = $command;
        return new self($payload);
    }

    /**
     * Description of the command; 1-256 characters.
     *
     * @return string
     */
    public function description(): string
    {
        return $this->payload['description'];
    }

    /**
     * Description of the command; 1-256 characters.
     *
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $payload = $this->payload;
        $payload['description'] = $description;
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
     * @return \Tarik02\Telegram\Collections\BotCommandCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\BotCommandCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandCollection::make();
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
