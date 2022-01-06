<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportElementErrorTranslationFile
 *
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportelementerrortranslationfile
 */
class PassportElementErrorTranslationFile extends \Tarik02\Telegram\Entities\PassportElementError implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Error source, must be *translation\_file*
     *
     * @return string
     */
    public function source(): string
    {
        return $this->payload['source'];
    }

    /**
     * Error source, must be *translation\_file*
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
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
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
     * Base64-encoded file hash
     *
     * @return string
     */
    public function fileHash(): string
    {
        return $this->payload['file_hash'];
    }

    /**
     * Base64-encoded file hash
     *
     * @param string $fileHash
     * @return self
     */
    public function withFileHash(string $fileHash): self
    {
        $payload = $this->payload;
        $payload['file_hash'] = $fileHash;
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
     * @return \Tarik02\Telegram\Collections\PassportElementErrorTranslationFileCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportElementErrorTranslationFileCollection
    {
        return \Tarik02\Telegram\Collections\PassportElementErrorTranslationFileCollection::make();
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
