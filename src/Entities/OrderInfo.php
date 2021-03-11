<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class OrderInfo
 *
 * This object represents information about an order.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#orderinfo
 */
class OrderInfo implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * *Optional*. User name
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->payload['name'] ?? null;
    }

    /**
     * *Optional*. User name
     *
     * @param string|null $name
     * @return self
     */
    public function withName(?string $name): self
    {
        $payload = $this->payload;
        $payload['name'] = $name;
        return new self($payload);
    }

    /**
     * *Optional*. User's phone number
     *
     * @return string|null
     */
    public function phoneNumber(): ?string
    {
        return $this->payload['phone_number'] ?? null;
    }

    /**
     * *Optional*. User's phone number
     *
     * @param string|null $phoneNumber
     * @return self
     */
    public function withPhoneNumber(?string $phoneNumber): self
    {
        $payload = $this->payload;
        $payload['phone_number'] = $phoneNumber;
        return new self($payload);
    }

    /**
     * *Optional*. User email
     *
     * @return string|null
     */
    public function email(): ?string
    {
        return $this->payload['email'] ?? null;
    }

    /**
     * *Optional*. User email
     *
     * @param string|null $email
     * @return self
     */
    public function withEmail(?string $email): self
    {
        $payload = $this->payload;
        $payload['email'] = $email;
        return new self($payload);
    }

    /**
     * *Optional*. User shipping address
     *
     * @return \Tarik02\Telegram\Entities\ShippingAddress|null
     */
    public function shippingAddress(): ?\Tarik02\Telegram\Entities\ShippingAddress
    {
        if (($this->payload['shipping_address'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ShippingAddress::fromPayload($this->payload['shipping_address']);
    }

    /**
     * *Optional*. User shipping address
     *
     * @param \Tarik02\Telegram\Entities\ShippingAddress|null $shippingAddress
     * @return self
     */
    public function withShippingAddress(?\Tarik02\Telegram\Entities\ShippingAddress $shippingAddress): self
    {
        $payload = $this->payload;
        if ($shippingAddress !== null) {
            $payload['shipping_address'] = $shippingAddress->toPayload();
        } else {
            unset($payload['shipping_address']);
        }
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
     * @return \Tarik02\Telegram\Collections\OrderInfoCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\OrderInfoCollection
    {
        return \Tarik02\Telegram\Collections\OrderInfoCollection::make();
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
