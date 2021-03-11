<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class WebhookInfo
 *
 * Contains information about the current status of a webhook.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#webhookinfo
 */
class WebhookInfo implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Webhook URL, may be empty if webhook is not set up
     *
     * @return string
     */
    public function url(): string
    {
        return $this->payload['url'];
    }

    /**
     * Webhook URL, may be empty if webhook is not set up
     *
     * @param string $url
     * @return self
     */
    public function withUrl(string $url): self
    {
        $payload = $this->payload;
        $payload['url'] = $url;
        return new self($payload);
    }

    /**
     * True, if a custom certificate was provided for webhook certificate checks
     *
     * @return bool
     */
    public function hasCustomCertificate(): bool
    {
        return $this->payload['has_custom_certificate'];
    }

    /**
     * True, if a custom certificate was provided for webhook certificate checks
     *
     * @param bool $hasCustomCertificate
     * @return self
     */
    public function withHasCustomCertificate(bool $hasCustomCertificate): self
    {
        $payload = $this->payload;
        $payload['has_custom_certificate'] = $hasCustomCertificate;
        return new self($payload);
    }

    /**
     * Number of updates awaiting delivery
     *
     * @return int
     */
    public function pendingUpdateCount(): int
    {
        return $this->payload['pending_update_count'];
    }

    /**
     * Number of updates awaiting delivery
     *
     * @param int $pendingUpdateCount
     * @return self
     */
    public function withPendingUpdateCount(int $pendingUpdateCount): self
    {
        $payload = $this->payload;
        $payload['pending_update_count'] = $pendingUpdateCount;
        return new self($payload);
    }

    /**
     * *Optional*. Currently used webhook IP address
     *
     * @return string|null
     */
    public function ipAddress(): ?string
    {
        return $this->payload['ip_address'] ?? null;
    }

    /**
     * *Optional*. Currently used webhook IP address
     *
     * @param string|null $ipAddress
     * @return self
     */
    public function withIpAddress(?string $ipAddress): self
    {
        $payload = $this->payload;
        $payload['ip_address'] = $ipAddress;
        return new self($payload);
    }

    /**
     * *Optional*. Unix time for the most recent error that happened when trying to deliver an update via webhook
     *
     * @return int|null
     */
    public function lastErrorDate(): ?int
    {
        return $this->payload['last_error_date'] ?? null;
    }

    /**
     * *Optional*. Unix time for the most recent error that happened when trying to deliver an update via webhook
     *
     * @param int|null $lastErrorDate
     * @return self
     */
    public function withLastErrorDate(?int $lastErrorDate): self
    {
        $payload = $this->payload;
        $payload['last_error_date'] = $lastErrorDate;
        return new self($payload);
    }

    /**
     * *Optional*. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     *
     * @return string|null
     */
    public function lastErrorMessage(): ?string
    {
        return $this->payload['last_error_message'] ?? null;
    }

    /**
     * *Optional*. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     *
     * @param string|null $lastErrorMessage
     * @return self
     */
    public function withLastErrorMessage(?string $lastErrorMessage): self
    {
        $payload = $this->payload;
        $payload['last_error_message'] = $lastErrorMessage;
        return new self($payload);
    }

    /**
     * *Optional*. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     *
     * @return int|null
     */
    public function maxConnections(): ?int
    {
        return $this->payload['max_connections'] ?? null;
    }

    /**
     * *Optional*. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     *
     * @param int|null $maxConnections
     * @return self
     */
    public function withMaxConnections(?int $maxConnections): self
    {
        $payload = $this->payload;
        $payload['max_connections'] = $maxConnections;
        return new self($payload);
    }

    /**
     * *Optional*. A list of update types the bot is subscribed to. Defaults to all update types except *chat\_member*
     *
     * @return string[]|null
     */
    public function allowedUpdates(): ?array
    {
        return $this->payload['allowed_updates'] ?? null;
    }

    /**
     * *Optional*. A list of update types the bot is subscribed to. Defaults to all update types except *chat\_member*
     *
     * @param string[]|null $allowedUpdates
     * @return self
     */
    public function withAllowedUpdates(?array $allowedUpdates): self
    {
        $payload = $this->payload;
        $payload['allowed_updates'] = $allowedUpdates;
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
     * @return \Tarik02\Telegram\Collections\WebhookInfoCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\WebhookInfoCollection
    {
        return \Tarik02\Telegram\Collections\WebhookInfoCollection::make();
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
