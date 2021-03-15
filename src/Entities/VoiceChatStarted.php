<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class VoiceChatStarted
 *
 * This object represents a service message about a voice chat started in the chat. Currently holds no information.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#voicechatstarted
 */
class VoiceChatStarted implements \Tarik02\Telegram\Contracts\Payloadable
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
     * @return \Tarik02\Telegram\Collections\VoiceChatStartedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\VoiceChatStartedCollection
    {
        return \Tarik02\Telegram\Collections\VoiceChatStartedCollection::make();
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
