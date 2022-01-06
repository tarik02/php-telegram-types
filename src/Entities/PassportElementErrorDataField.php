<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportElementErrorDataField
 *
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportelementerrordatafield
 */
class PassportElementErrorDataField extends \Tarik02\Telegram\Entities\PassportElementError implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Error source, must be *data*
     *
     * @return string
     */
    public function source(): string
    {
        return $this->payload['source'];
    }

    /**
     * Error source, must be *data*
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
     * The section of the user's Telegram Passport which has the error, one of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * The section of the user's Telegram Passport which has the error, one of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”
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
     * Name of the data field which has the error
     *
     * @return string
     */
    public function fieldName(): string
    {
        return $this->payload['field_name'];
    }

    /**
     * Name of the data field which has the error
     *
     * @param string $fieldName
     * @return self
     */
    public function withFieldName(string $fieldName): self
    {
        $payload = $this->payload;
        $payload['field_name'] = $fieldName;
        return new self($payload);
    }

    /**
     * Base64-encoded data hash
     *
     * @return string
     */
    public function dataHash(): string
    {
        return $this->payload['data_hash'];
    }

    /**
     * Base64-encoded data hash
     *
     * @param string $dataHash
     * @return self
     */
    public function withDataHash(string $dataHash): self
    {
        $payload = $this->payload;
        $payload['data_hash'] = $dataHash;
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
     * @return \Tarik02\Telegram\Collections\PassportElementErrorDataFieldCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportElementErrorDataFieldCollection
    {
        return \Tarik02\Telegram\Collections\PassportElementErrorDataFieldCollection::make();
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
