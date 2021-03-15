<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class StickerSet
 *
 * This object represents a sticker set.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#stickerset
 */
class StickerSet implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Sticker set name
     *
     * @return string
     */
    public function name(): string
    {
        return $this->payload['name'];
    }

    /**
     * Sticker set name
     *
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $payload = $this->payload;
        $payload['name'] = $name;
        return new self($payload);
    }

    /**
     * Sticker set title
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Sticker set title
     *
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * *True*, if the sticker set contains [animated stickers](https://telegram.org/blog/animated-stickers)
     *
     * @return bool
     */
    public function isAnimated(): bool
    {
        return $this->payload['is_animated'] ?? false;
    }

    /**
     * *True*, if the sticker set contains [animated stickers](https://telegram.org/blog/animated-stickers)
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
     * *True*, if the sticker set contains masks
     *
     * @return bool
     */
    public function containsMasks(): bool
    {
        return $this->payload['contains_masks'] ?? false;
    }

    /**
     * *True*, if the sticker set contains masks
     *
     * @param bool $containsMasks
     * @return self
     */
    public function withContainsMasks(bool $containsMasks): self
    {
        $payload = $this->payload;
        $payload['contains_masks'] = $containsMasks;
        return new self($payload);
    }

    /**
     * List of all set stickers
     *
     * @return \Tarik02\Telegram\Collections\StickerCollection
     */
    public function stickers(): \Tarik02\Telegram\Collections\StickerCollection
    {
        return \Tarik02\Telegram\Collections\StickerCollection::fromPayload($this->payload['stickers'] ?? []);
    }

    /**
     * List of all set stickers
     *
     * @param \Tarik02\Telegram\Collections\StickerCollection $stickers
     * @return self
     */
    public function withStickers(\Tarik02\Telegram\Collections\StickerCollection $stickers): self
    {
        $payload = $this->payload;
        $payload['stickers'] = $stickers->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. Sticker set thumbnail in the .WEBP or .TGS format
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
     * *Optional*. Sticker set thumbnail in the .WEBP or .TGS format
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
     * @return \Tarik02\Telegram\Collections\StickerSetCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\StickerSetCollection
    {
        return \Tarik02\Telegram\Collections\StickerSetCollection::make();
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
