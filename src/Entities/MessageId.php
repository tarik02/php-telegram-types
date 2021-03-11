<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class MessageId
 *
 * This object represents a unique message identifier.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#messageid
 */
class MessageId implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique message identifier
     *
     * @return int
     */
    public function messageId(): int
    {
        return $this->payload['message_id'];
    }

    /**
     * Unique message identifier
     *
     * @param int $messageId
     * @return self
     */
    public function withMessageId(int $messageId): self
    {
        $payload = $this->payload;
        $payload['message_id'] = $messageId;
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
     * @return \Tarik02\Telegram\Collections\MessageIdCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\MessageIdCollection
    {
        return \Tarik02\Telegram\Collections\MessageIdCollection::make();
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
