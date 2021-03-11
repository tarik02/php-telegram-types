<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQuery
 *
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequery
 */
class InlineQuery implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique identifier for this query
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this query
     *
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $payload = $this->payload;
        $payload['id'] = $id;
        return new self($payload);
    }

    /**
     * Sender
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function from(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * Sender
     *
     * @param \Tarik02\Telegram\Entities\User $from
     * @return self
     */
    public function withFrom(\Tarik02\Telegram\Entities\User $from): self
    {
        $payload = $this->payload;
        $payload['from'] = $from->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. Sender location, only for bots that request user location
     *
     * @return \Tarik02\Telegram\Entities\Location|null
     */
    public function location(): ?\Tarik02\Telegram\Entities\Location
    {
        if (($this->payload['location'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Location::fromPayload($this->payload['location']);
    }

    /**
     * *Optional*. Sender location, only for bots that request user location
     *
     * @param \Tarik02\Telegram\Entities\Location|null $location
     * @return self
     */
    public function withLocation(?\Tarik02\Telegram\Entities\Location $location): self
    {
        $payload = $this->payload;
        if ($location !== null) {
            $payload['location'] = $location->toPayload();
        } else {
            unset($payload['location']);
        }
        return new self($payload);
    }

    /**
     * Text of the query (up to 256 characters)
     *
     * @return string
     */
    public function query(): string
    {
        return $this->payload['query'];
    }

    /**
     * Text of the query (up to 256 characters)
     *
     * @param string $query
     * @return self
     */
    public function withQuery(string $query): self
    {
        $payload = $this->payload;
        $payload['query'] = $query;
        return new self($payload);
    }

    /**
     * Offset of the results to be returned, can be controlled by the bot
     *
     * @return string
     */
    public function offset(): string
    {
        return $this->payload['offset'];
    }

    /**
     * Offset of the results to be returned, can be controlled by the bot
     *
     * @param string $offset
     * @return self
     */
    public function withOffset(string $offset): self
    {
        $payload = $this->payload;
        $payload['offset'] = $offset;
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
     * @return \Tarik02\Telegram\Collections\InlineQueryCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryCollection::make();
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
