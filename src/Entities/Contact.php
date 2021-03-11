<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Contact
 *
 * This object represents a phone contact.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#contact
 */
class Contact implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Contact's phone number
     *
     * @return string
     */
    public function phoneNumber(): string
    {
        return $this->payload['phone_number'];
    }

    /**
     * Contact's phone number
     *
     * @param string $phoneNumber
     * @return self
     */
    public function withPhoneNumber(string $phoneNumber): self
    {
        $payload = $this->payload;
        $payload['phone_number'] = $phoneNumber;
        return new self($payload);
    }

    /**
     * Contact's first name
     *
     * @return string
     */
    public function firstName(): string
    {
        return $this->payload['first_name'];
    }

    /**
     * Contact's first name
     *
     * @param string $firstName
     * @return self
     */
    public function withFirstName(string $firstName): self
    {
        $payload = $this->payload;
        $payload['first_name'] = $firstName;
        return new self($payload);
    }

    /**
     * *Optional*. Contact's last name
     *
     * @return string|null
     */
    public function lastName(): ?string
    {
        return $this->payload['last_name'] ?? null;
    }

    /**
     * *Optional*. Contact's last name
     *
     * @param string|null $lastName
     * @return self
     */
    public function withLastName(?string $lastName): self
    {
        $payload = $this->payload;
        $payload['last_name'] = $lastName;
        return new self($payload);
    }

    /**
     * *Optional*. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     */
    public function userId(): ?int
    {
        return $this->payload['user_id'] ?? null;
    }

    /**
     * *Optional*. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @param int|null $userId
     * @return self
     */
    public function withUserId(?int $userId): self
    {
        $payload = $this->payload;
        $payload['user_id'] = $userId;
        return new self($payload);
    }

    /**
     * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard)
     *
     * @return string|null
     */
    public function vcard(): ?string
    {
        return $this->payload['vcard'] ?? null;
    }

    /**
     * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard)
     *
     * @param string|null $vcard
     * @return self
     */
    public function withVcard(?string $vcard): self
    {
        $payload = $this->payload;
        $payload['vcard'] = $vcard;
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
     * @return \Tarik02\Telegram\Collections\ContactCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ContactCollection
    {
        return \Tarik02\Telegram\Collections\ContactCollection::make();
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
