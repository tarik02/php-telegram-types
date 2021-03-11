<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportFile
 *
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportfile
 */
class PassportFile implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Identifier for this file, which can be used to download or reuse the file
     *
     * @return string
     */
    public function fileId(): string
    {
        return $this->payload['file_id'];
    }

    /**
     * Identifier for this file, which can be used to download or reuse the file
     *
     * @param string $fileId
     * @return self
     */
    public function withFileId(string $fileId): self
    {
        $payload = $this->payload;
        $payload['file_id'] = $fileId;
        return new self($payload);
    }

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string
     */
    public function fileUniqueId(): string
    {
        return $this->payload['file_unique_id'];
    }

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @param string $fileUniqueId
     * @return self
     */
    public function withFileUniqueId(string $fileUniqueId): self
    {
        $payload = $this->payload;
        $payload['file_unique_id'] = $fileUniqueId;
        return new self($payload);
    }

    /**
     * File size
     *
     * @return int
     */
    public function fileSize(): int
    {
        return $this->payload['file_size'];
    }

    /**
     * File size
     *
     * @param int $fileSize
     * @return self
     */
    public function withFileSize(int $fileSize): self
    {
        $payload = $this->payload;
        $payload['file_size'] = $fileSize;
        return new self($payload);
    }

    /**
     * Unix time when the file was uploaded
     *
     * @return int
     */
    public function fileDate(): int
    {
        return $this->payload['file_date'];
    }

    /**
     * Unix time when the file was uploaded
     *
     * @param int $fileDate
     * @return self
     */
    public function withFileDate(int $fileDate): self
    {
        $payload = $this->payload;
        $payload['file_date'] = $fileDate;
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
     * @return \Tarik02\Telegram\Collections\PassportFileCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportFileCollection
    {
        return \Tarik02\Telegram\Collections\PassportFileCollection::make();
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
