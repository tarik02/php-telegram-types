<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class VoiceChatScheduled
 *
 * This object represents a service message about a voice chat scheduled in the chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#voicechatscheduled
 */
class VoiceChatScheduled implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Point in time (Unix timestamp) when the voice chat is supposed to be started by a chat administrator
     *
     * @return int
     */
    public function startDate(): int
    {
        return $this->payload['start_date'];
    }

    /**
     * Point in time (Unix timestamp) when the voice chat is supposed to be started by a chat administrator
     *
     * @param int $startDate
     * @return self
     */
    public function withStartDate(int $startDate): self
    {
        $payload = $this->payload;
        $payload['start_date'] = $startDate;
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
     * @return \Tarik02\Telegram\Collections\VoiceChatScheduledCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\VoiceChatScheduledCollection
    {
        return \Tarik02\Telegram\Collections\VoiceChatScheduledCollection::make();
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
