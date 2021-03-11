<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportElementErrorUnspecified
 *
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportelementerrorunspecified
 */
class PassportElementErrorUnspecified implements \Tarik02\Telegram\Entities\PassportElementError
{
    /**
     * Error source, must be *unspecified*
     *
     * @return string
     */
    public function source(): string
    {
        return $this->payload['source'];
    }

    /**
     * Error source, must be *unspecified*
     *
     * @param string $source
     * @return self
     */
    public function withSource(string $source): self
    {
        $payload = $this->payload;
        $payload['source'] = $source;
        return new self($payload);
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * Base64-encoded element hash
     *
     * @return string
     */
    public function elementHash(): string
    {
        return $this->payload['element_hash'];
    }

    /**
     * Base64-encoded element hash
     *
     * @param string $elementHash
     * @return self
     */
    public function withElementHash(string $elementHash): self
    {
        $payload = $this->payload;
        $payload['element_hash'] = $elementHash;
        return new self($payload);
    }

    /**
     * Error message
     *
     * @return string
     */
    public function message(): string
    {
        return $this->payload['message'];
    }

    /**
     * Error message
     *
     * @param string $message
     * @return self
     */
    public function withMessage(string $message): self
    {
        $payload = $this->payload;
        $payload['message'] = $message;
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
     * @return \Tarik02\Telegram\Collections\PassportElementErrorUnspecifiedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportElementErrorUnspecifiedCollection
    {
        return \Tarik02\Telegram\Collections\PassportElementErrorUnspecifiedCollection::make();
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
