<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class VoiceChatEnded
 *
 * This object represents a service message about a voice chat ended in the chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#voicechatended
 */
class VoiceChatEnded implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Voice chat duration in seconds
     *
     * @return int
     */
    public function duration(): int
    {
        return $this->payload['duration'];
    }

    /**
     * Voice chat duration in seconds
     *
     * @param int $duration
     * @return self
     */
    public function withDuration(int $duration): self
    {
        $payload = $this->payload;
        $payload['duration'] = $duration;
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
     * @return \Tarik02\Telegram\Collections\VoiceChatEndedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\VoiceChatEndedCollection
    {
        return \Tarik02\Telegram\Collections\VoiceChatEndedCollection::make();
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
