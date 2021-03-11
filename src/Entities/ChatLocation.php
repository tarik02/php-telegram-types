<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatLocation
 *
 * Represents a location to which a chat is connected.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatlocation
 */
class ChatLocation implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * The location to which the supergroup is connected. Can't be a live location.
     *
     * @return \Tarik02\Telegram\Entities\Location
     */
    public function location(): \Tarik02\Telegram\Entities\Location
    {
        return \Tarik02\Telegram\Entities\Location::fromPayload($this->payload['location']);
    }

    /**
     * The location to which the supergroup is connected. Can't be a live location.
     *
     * @param \Tarik02\Telegram\Entities\Location $location
     * @return self
     */
    public function withLocation(\Tarik02\Telegram\Entities\Location $location): self
    {
        $payload = $this->payload;
        $payload['location'] = $location->toPayload();
        return new self($payload);
    }

    /**
     * Location address; 1-64 characters, as defined by the chat owner
     *
     * @return string
     */
    public function address(): string
    {
        return $this->payload['address'];
    }

    /**
     * Location address; 1-64 characters, as defined by the chat owner
     *
     * @param string $address
     * @return self
     */
    public function withAddress(string $address): self
    {
        $payload = $this->payload;
        $payload['address'] = $address;
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
     * @return \Tarik02\Telegram\Collections\ChatLocationCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatLocationCollection
    {
        return \Tarik02\Telegram\Collections\ChatLocationCollection::make();
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
