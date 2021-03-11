<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PhotoSize
 *
 * This object represents one size of a photo or a [file](https://core.telegram.org/bots/api/#document) / [sticker](https://core.telegram.org/bots/api/#sticker) thumbnail.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#photosize
 */
class PhotoSize implements \Tarik02\Telegram\Contracts\Payloadable
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
     * Photo width
     *
     * @return int
     */
    public function width(): int
    {
        return $this->payload['width'];
    }

    /**
     * Photo width
     *
     * @param int $width
     * @return self
     */
    public function withWidth(int $width): self
    {
        $payload = $this->payload;
        $payload['width'] = $width;
        return new self($payload);
    }

    /**
     * Photo height
     *
     * @return int
     */
    public function height(): int
    {
        return $this->payload['height'];
    }

    /**
     * Photo height
     *
     * @param int $height
     * @return self
     */
    public function withHeight(int $height): self
    {
        $payload = $this->payload;
        $payload['height'] = $height;
        return new self($payload);
    }

    /**
     * *Optional*. File size
     *
     * @return int|null
     */
    public function fileSize(): ?int
    {
        return $this->payload['file_size'] ?? null;
    }

    /**
     * *Optional*. File size
     *
     * @param int|null $fileSize
     * @return self
     */
    public function withFileSize(?int $fileSize): self
    {
        $payload = $this->payload;
        $payload['file_size'] = $fileSize;
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
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PhotoSizeCollection
    {
        return \Tarik02\Telegram\Collections\PhotoSizeCollection::make();
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
