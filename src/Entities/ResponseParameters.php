<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ResponseParameters
 *
 * Contains information about why a request was unsuccessful.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#responseparameters
 */
class ResponseParameters implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     */
    public function migrateToChatId(): ?int
    {
        return $this->payload['migrate_to_chat_id'] ?? null;
    }

    /**
     * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @param int|null $migrateToChatId
     * @return self
     */
    public function withMigrateToChatId(?int $migrateToChatId): self
    {
        $payload = $this->payload;
        $payload['migrate_to_chat_id'] = $migrateToChatId;
        return new self($payload);
    }

    /**
     * *Optional*. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     *
     * @return int|null
     */
    public function retryAfter(): ?int
    {
        return $this->payload['retry_after'] ?? null;
    }

    /**
     * *Optional*. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     *
     * @param int|null $retryAfter
     * @return self
     */
    public function withRetryAfter(?int $retryAfter): self
    {
        $payload = $this->payload;
        $payload['retry_after'] = $retryAfter;
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
     * @return \Tarik02\Telegram\Collections\ResponseParametersCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ResponseParametersCollection
    {
        return \Tarik02\Telegram\Collections\ResponseParametersCollection::make();
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
