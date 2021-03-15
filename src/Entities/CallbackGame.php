<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class CallbackGame
 *
 * A placeholder, currently holds no information. Use [BotFather](https://t.me/botfather) to set up your game.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#callbackgame
 */
class CallbackGame implements \Tarik02\Telegram\Contracts\Payloadable
{
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
     * @return \Tarik02\Telegram\Collections\CallbackGameCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\CallbackGameCollection
    {
        return \Tarik02\Telegram\Collections\CallbackGameCollection::make();
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
