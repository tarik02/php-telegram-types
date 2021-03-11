<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ShippingQuery
 *
 * This object contains information about an incoming shipping query.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#shippingquery
 */
class ShippingQuery implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique query identifier
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique query identifier
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
     * User who sent the query
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function from(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * User who sent the query
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
     * Bot specified invoice payload
     *
     * @return string
     */
    public function invoicePayload(): string
    {
        return $this->payload['invoice_payload'];
    }

    /**
     * Bot specified invoice payload
     *
     * @param string $invoicePayload
     * @return self
     */
    public function withInvoicePayload(string $invoicePayload): self
    {
        $payload = $this->payload;
        $payload['invoice_payload'] = $invoicePayload;
        return new self($payload);
    }

    /**
     * User specified shipping address
     *
     * @return \Tarik02\Telegram\Entities\ShippingAddress
     */
    public function shippingAddress(): \Tarik02\Telegram\Entities\ShippingAddress
    {
        return \Tarik02\Telegram\Entities\ShippingAddress::fromPayload($this->payload['shipping_address']);
    }

    /**
     * User specified shipping address
     *
     * @param \Tarik02\Telegram\Entities\ShippingAddress $shippingAddress
     * @return self
     */
    public function withShippingAddress(\Tarik02\Telegram\Entities\ShippingAddress $shippingAddress): self
    {
        $payload = $this->payload;
        $payload['shipping_address'] = $shippingAddress->toPayload();
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
     * @return \Tarik02\Telegram\Collections\ShippingQueryCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ShippingQueryCollection
    {
        return \Tarik02\Telegram\Collections\ShippingQueryCollection::make();
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
