<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetUpdates
 *
 * Use this method to receive incoming updates using long polling ([wiki](https://en.wikipedia.org/wiki/Push_technology#Long_polling)). An Array of [Update](https://core.telegram.org/bots/api/#update) objects is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getupdates
 */
class GetUpdates extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'getUpdates';
    }

    /**
     * Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as [getUpdates](https://core.telegram.org/bots/api/#getupdates) is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will forgotten.
     *
     * @return int|null
     */
    public function offset(): ?int
    {
        return $this->payload['offset'] ?? null;
    }

    /**
     * Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as [getUpdates](https://core.telegram.org/bots/api/#getupdates) is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will forgotten.
     *
     * @param int|null $offset
     * @return self
     */
    public function withOffset(?int $offset): self
    {
        $payload = $this->payload;
        $payload['offset'] = $offset;
        return new self($payload);
    }

    /**
     * Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return int|null
     */
    public function limit(): ?int
    {
        return $this->payload['limit'] ?? null;
    }

    /**
     * Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @param int|null $limit
     * @return self
     */
    public function withLimit(?int $limit): self
    {
        $payload = $this->payload;
        $payload['limit'] = $limit;
        return new self($payload);
    }

    /**
     * Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     *
     * @return int|null
     */
    public function timeout(): ?int
    {
        return $this->payload['timeout'] ?? null;
    }

    /**
     * Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     *
     * @param int|null $timeout
     * @return self
     */
    public function withTimeout(?int $timeout): self
    {
        $payload = $this->payload;
        $payload['timeout'] = $timeout;
        return new self($payload);
    }

    /**
     * A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited\_channel\_post”, “callback\_query”] to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member* (default). If not specified, the previous setting will be used.  
     * 
     * Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
     *
     * @return string[]|null
     */
    public function allowedUpdates(): ?array
    {
        return $this->payload['allowed_updates'] ?? null;
    }

    /**
     * A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited\_channel\_post”, “callback\_query”] to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member* (default). If not specified, the previous setting will be used.  
     * 
     * Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
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
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Collections\UpdateCollection
     */
    public static function createResponse($payload): \Tarik02\Telegram\Collections\UpdateCollection
    {
        return \Tarik02\Telegram\Collections\UpdateCollection::fromPayload($payload ?? []);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
