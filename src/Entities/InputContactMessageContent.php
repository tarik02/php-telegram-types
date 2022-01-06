<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputContactMessageContent
 *
 * Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a contact message to be sent as the result of an inline query.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputcontactmessagecontent
 */
class InputContactMessageContent extends \Tarik02\Telegram\Entities\InputMessageContent implements \Tarik02\Telegram\Contracts\Payloadable
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
     * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     *
     * @return string|null
     */
    public function vcard(): ?string
    {
        return $this->payload['vcard'] ?? null;
    }

    /**
     * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
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
     * @return \Tarik02\Telegram\Collections\InputContactMessageContentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputContactMessageContentCollection
    {
        return \Tarik02\Telegram\Collections\InputContactMessageContentCollection::make();
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
