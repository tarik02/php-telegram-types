<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SetWebhook
 *
 * Use this method to specify a url and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified url, containing a JSON-serialized [Update](https://core.telegram.org/bots/api/#update). In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns *True* on success.
 * 
 * If you'd like to make sure that the Webhook request comes from Telegram, we recommend using a secret path in the URL, e.g. `https://www.example.com/<token>`. Since nobody else knows your bot's token, you can be pretty sure it's us.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#setwebhook
 */
class SetWebhook extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'setWebhook';
    }

    /**
     * HTTPS url to send updates to. Use an empty string to remove webhook integration
     *
     * @return string
     */
    public function url(): string
    {
        return $this->payload['url'];
    }

    /**
     * HTTPS url to send updates to. Use an empty string to remove webhook integration
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
     * Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](/bots/self-signed) for details.
     *
     * @return \Tarik02\Telegram\Entities\InputFile|null
     */
    public function certificate(): ?\Tarik02\Telegram\Entities\InputFile
    {
        if (($this->payload['certificate'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InputFile::fromPayload($this->payload['certificate']);
    }

    /**
     * Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](/bots/self-signed) for details.
     *
     * @param \Tarik02\Telegram\Entities\InputFile|null $certificate
     * @return self
     */
    public function withCertificate(?\Tarik02\Telegram\Entities\InputFile $certificate): self
    {
        $payload = $this->payload;
        if ($certificate !== null) {
            $payload['certificate'] = $certificate->toPayload();
        } else {
            unset($payload['certificate']);
        }
        return new self($payload);
    }

    /**
     * The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     *
     * @return string|null
     */
    public function ipAddress(): ?string
    {
        return $this->payload['ip_address'] ?? null;
    }

    /**
     * The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
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
     * Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     *
     * @return int|null
     */
    public function maxConnections(): ?int
    {
        return $this->payload['max_connections'] ?? null;
    }

    /**
     * Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
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
     * A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited\_channel\_post”, “callback\_query”] to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member* (default). If not specified, the previous setting will be used.  
     * Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     *
     * @return string[]|null
     */
    public function allowedUpdates(): ?array
    {
        return $this->payload['allowed_updates'] ?? null;
    }

    /**
     * A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited\_channel\_post”, “callback\_query”] to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member* (default). If not specified, the previous setting will be used.  
     * Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
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
     * Pass *True* to drop all pending updates
     *
     * @return bool|null
     */
    public function dropPendingUpdates(): bool
    {
        return $this->payload['drop_pending_updates'] ?? false;
    }

    /**
     * Pass *True* to drop all pending updates
     *
     * @param bool|null $dropPendingUpdates
     * @return self
     */
    public function withDropPendingUpdates(bool $dropPendingUpdates): self
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
        return $payload ?? false;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
