<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportElementErrorTranslationFiles
 *
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportelementerrortranslationfiles
 */
class PassportElementErrorTranslationFiles extends \Tarik02\Telegram\Entities\PassportElementError implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Error source, must be *translation\_files*
     *
     * @return string
     */
    public function source(): string
    {
        return $this->payload['source'];
    }

    /**
     * Error source, must be *translation\_files*
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
     * List of base64-encoded file hashes
     *
     * @return string[]
     */
    public function fileHashes(): array
    {
        return $this->payload['file_hashes'];
    }

    /**
     * List of base64-encoded file hashes
     *
     * @param string[] $fileHashes
     * @return self
     */
    public function withFileHashes(array $fileHashes): self
    {
        $payload = $this->payload;
        $payload['file_hashes'] = $fileHashes;
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
     * @return \Tarik02\Telegram\Collections\PassportElementErrorTranslationFilesCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportElementErrorTranslationFilesCollection
    {
        return \Tarik02\Telegram\Collections\PassportElementErrorTranslationFilesCollection::make();
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
