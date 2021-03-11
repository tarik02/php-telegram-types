<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ShippingAddress
 *
 * This object represents a shipping address.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#shippingaddress
 */
class ShippingAddress implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @return string
     */
    public function countryCode(): string
    {
        return $this->payload['country_code'];
    }

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @param string $countryCode
     * @return self
     */
    public function withCountryCode(string $countryCode): self
    {
        $payload = $this->payload;
        $payload['country_code'] = $countryCode;
        return new self($payload);
    }

    /**
     * State, if applicable
     *
     * @return string
     */
    public function state(): string
    {
        return $this->payload['state'];
    }

    /**
     * State, if applicable
     *
     * @param string $state
     * @return self
     */
    public function withState(string $state): self
    {
        $payload = $this->payload;
        $payload['state'] = $state;
        return new self($payload);
    }

    /**
     * City
     *
     * @return string
     */
    public function city(): string
    {
        return $this->payload['city'];
    }

    /**
     * City
     *
     * @param string $city
     * @return self
     */
    public function withCity(string $city): self
    {
        $payload = $this->payload;
        $payload['city'] = $city;
        return new self($payload);
    }

    /**
     * First line for the address
     *
     * @return string
     */
    public function streetLine1(): string
    {
        return $this->payload['street_line1'];
    }

    /**
     * First line for the address
     *
     * @param string $streetLine1
     * @return self
     */
    public function withStreetLine1(string $streetLine1): self
    {
        $payload = $this->payload;
        $payload['street_line1'] = $streetLine1;
        return new self($payload);
    }

    /**
     * Second line for the address
     *
     * @return string
     */
    public function streetLine2(): string
    {
        return $this->payload['street_line2'];
    }

    /**
     * Second line for the address
     *
     * @param string $streetLine2
     * @return self
     */
    public function withStreetLine2(string $streetLine2): self
    {
        $payload = $this->payload;
        $payload['street_line2'] = $streetLine2;
        return new self($payload);
    }

    /**
     * Address post code
     *
     * @return string
     */
    public function postCode(): string
    {
        return $this->payload['post_code'];
    }

    /**
     * Address post code
     *
     * @param string $postCode
     * @return self
     */
    public function withPostCode(string $postCode): self
    {
        $payload = $this->payload;
        $payload['post_code'] = $postCode;
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
     * @return \Tarik02\Telegram\Collections\ShippingAddressCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ShippingAddressCollection
    {
        return \Tarik02\Telegram\Collections\ShippingAddressCollection::make();
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
