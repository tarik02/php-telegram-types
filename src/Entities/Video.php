<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Video
 *
 * This object represents a video file.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#video
 */
class Video implements \Tarik02\Telegram\Contracts\Payloadable
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
     * Video width as defined by sender
     *
     * @return int
     */
    public function width(): int
    {
        return $this->payload['width'];
    }

    /**
     * Video width as defined by sender
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
     * Video height as defined by sender
     *
     * @return int
     */
    public function height(): int
    {
        return $this->payload['height'];
    }

    /**
     * Video height as defined by sender
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
     * Duration of the video in seconds as defined by sender
     *
     * @return int
     */
    public function duration(): int
    {
        return $this->payload['duration'];
    }

    /**
     * Duration of the video in seconds as defined by sender
     *
     * @param int $duration
     * @return self
     */
    public function withDuration(int $duration): self
    {
        $payload = $this->payload;
        $payload['duration'] = $duration;
        return new self($payload);
    }

    /**
     * *Optional*. Video thumbnail
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
     * *Optional*. Video thumbnail
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
     * *Optional*. Mime type of a file as defined by sender
     *
     * @return string|null
     */
    public function mimeType(): ?string
    {
        return $this->payload['mime_type'] ?? null;
    }

    /**
     * *Optional*. Mime type of a file as defined by sender
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
     * *Optional*. File size in bytes
     *
     * @return int|null
     */
    public function fileSize(): ?int
    {
        return $this->payload['file_size'] ?? null;
    }

    /**
     * *Optional*. File size in bytes
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
     * @return \Tarik02\Telegram\Collections\VideoCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\VideoCollection
    {
        return \Tarik02\Telegram\Collections\VideoCollection::make();
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
