<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class DeleteWebhook
 *
 * Use this method to remove webhook integration if you decide to switch back to [getUpdates](https://core.telegram.org/bots/api/#getupdates). Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#deletewebhook
 */
class DeleteWebhook extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'deleteWebhook';
    }

    /**
     * Pass *True* to drop all pending updates
     *
     * @return bool|null
     */
    public function dropPendingUpdates(): ?bool
    {
        return $this->payload['drop_pending_updates'] ?? null;
    }

    /**
     * Pass *True* to drop all pending updates
     *
     * @param bool|null $dropPendingUpdates
     * @return self
     */
    public function withDropPendingUpdates(?bool $dropPendingUpdates): self
    {
        $payload = $this->payload;
        $payload['drop_pending_updates'] = $dropPendingUpdates;
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
