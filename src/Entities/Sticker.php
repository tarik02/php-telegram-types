<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Sticker
 *
 * This object represents a sticker.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#sticker
 */
class Sticker implements \Tarik02\Telegram\Contracts\Payloadable
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
     * Sticker width
     *
     * @return int
     */
    public function width(): int
    {
        return $this->payload['width'];
    }

    /**
     * Sticker width
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
     * Sticker height
     *
     * @return int
     */
    public function height(): int
    {
        return $this->payload['height'];
    }

    /**
     * Sticker height
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
     * *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
     *
     * @return bool
     */
    public function isAnimated(): bool
    {
        return $this->payload['is_animated'];
    }

    /**
     * *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
     *
     * @param bool $isAnimated
     * @return self
     */
    public function withIsAnimated(bool $isAnimated): self
    {
        $payload = $this->payload;
        $payload['is_animated'] = $isAnimated;
        return new self($payload);
    }

    /**
     * *Optional*. Sticker thumbnail in the .WEBP or .JPG format
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
     * *Optional*. Sticker thumbnail in the .WEBP or .JPG format
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
     * *Optional*. Emoji associated with the sticker
     *
     * @return string|null
     */
    public function emoji(): ?string
    {
        return $this->payload['emoji'] ?? null;
    }

    /**
     * *Optional*. Emoji associated with the sticker
     *
     * @param string|null $emoji
     * @return self
     */
    public function withEmoji(?string $emoji): self
    {
        $payload = $this->payload;
        $payload['emoji'] = $emoji;
        return new self($payload);
    }

    /**
     * *Optional*. Name of the sticker set to which the sticker belongs
     *
     * @return string|null
     */
    public function setName(): ?string
    {
        return $this->payload['set_name'] ?? null;
    }

    /**
     * *Optional*. Name of the sticker set to which the sticker belongs
     *
     * @param string|null $setName
     * @return self
     */
    public function withSetName(?string $setName): self
    {
        $payload = $this->payload;
        $payload['set_name'] = $setName;
        return new self($payload);
    }

    /**
     * *Optional*. For mask stickers, the position where the mask should be placed
     *
     * @return \Tarik02\Telegram\Entities\MaskPosition|null
     */
    public function maskPosition(): ?\Tarik02\Telegram\Entities\MaskPosition
    {
        if (($this->payload['mask_position'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\MaskPosition::fromPayload($this->payload['mask_position']);
    }

    /**
     * *Optional*. For mask stickers, the position where the mask should be placed
     *
     * @param \Tarik02\Telegram\Entities\MaskPosition|null $maskPosition
     * @return self
     */
    public function withMaskPosition(?\Tarik02\Telegram\Entities\MaskPosition $maskPosition): self
    {
        $payload = $this->payload;
        if ($maskPosition !== null) {
            $payload['mask_position'] = $maskPosition->toPayload();
        } else {
            unset($payload['mask_position']);
        }
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
     * @return \Tarik02\Telegram\Collections\StickerCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\StickerCollection
    {
        return \Tarik02\Telegram\Collections\StickerCollection::make();
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
