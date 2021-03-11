<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Document
 *
 * This object represents a general file (as opposed to [photos](https://core.telegram.org/bots/api/#photosize), [voice messages](https://core.telegram.org/bots/api/#voice) and [audio files](https://core.telegram.org/bots/api/#audio)).
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#document
 */
class Document implements \Tarik02\Telegram\Contracts\Payloadable
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
     * *Optional*. Document thumbnail as defined by sender
     *
     * @return \Tarik02\Telegram\Entities\PhotoSize|null
     */
    public function thumb(): ?\Tarik02\Telegram\Entities\PhotoSize
    {
        if (($this->payload['thumb'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PhotoSize::fromPayload($this->payload['thumb']);
    }

    /**
     * *Optional*. Document thumbnail as defined by sender
     *
     * @param \Tarik02\Telegram\Entities\PhotoSize|null $thumb
     * @return self
     */
    public function withThumb(?\Tarik02\Telegram\Entities\PhotoSize $thumb): self
    {
        $payload = $this->payload;
        if ($thumb !== null) {
            $payload['thumb'] = $thumb->toPayload();
        } else {
            unset($payload['thumb']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Original filename as defined by sender
     *
     * @return string|null
     */
    public function fileName(): ?string
    {
        return $this->payload['file_name'] ?? null;
    }

    /**
     * *Optional*. Original filename as defined by sender
     *
     * @param string|null $fileName
     * @return self
     */
    public function withFileName(?string $fileName): self
    {
        $payload = $this->payload;
        $payload['file_name'] = $fileName;
        return new self($payload);
    }

    /**
     * *Optional*. MIME type of the file as defined by sender
     *
     * @return string|null
     */
    public function mimeType(): ?string
    {
        return $this->payload['mime_type'] ?? null;
    }

    /**
     * *Optional*. MIME type of the file as defined by sender
     *
     * @param string|null $mimeType
     * @return self
     */
    public function withMimeType(?string $mimeType): self
    {
        $payload = $this->payload;
        $payload['mime_type'] = $mimeType;
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
     * @return \Tarik02\Telegram\Collections\DocumentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\DocumentCollection
    {
        return \Tarik02\Telegram\Collections\DocumentCollection::make();
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
