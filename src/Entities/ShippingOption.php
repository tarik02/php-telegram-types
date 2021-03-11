<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ShippingOption
 *
 * This object represents one shipping option.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#shippingoption
 */
class ShippingOption implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Shipping option identifier
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Shipping option identifier
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
     * Option title
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Option title
     *
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * List of price portions
     *
     * @return \Tarik02\Telegram\Collections\LabeledPriceCollection
     */
    public function prices(): \Tarik02\Telegram\Collections\LabeledPriceCollection
    {
        return \Tarik02\Telegram\Collections\LabeledPriceCollection::fromPayload($this->payload['prices'] ?? []);
    }

    /**
     * List of price portions
     *
     * @param \Tarik02\Telegram\Collections\LabeledPriceCollection $prices
     * @return self
     */
    public function withPrices(\Tarik02\Telegram\Collections\LabeledPriceCollection $prices): self
    {
        $payload = $this->payload;
        $payload['prices'] = $prices->toPayload();
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
     * @return \Tarik02\Telegram\Collections\ShippingOptionCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ShippingOptionCollection
    {
        return \Tarik02\Telegram\Collections\ShippingOptionCollection::make();
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
