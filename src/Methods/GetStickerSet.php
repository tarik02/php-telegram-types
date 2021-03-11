<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetStickerSet
 *
 * Use this method to get a sticker set. On success, a [StickerSet](https://core.telegram.org/bots/api/#stickerset) object is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getstickerset
 */
class GetStickerSet extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'getStickerSet';
    }

    /**
     * Name of the sticker set
     *
     * @return string
     */
    public function name(): string
    {
        return $this->payload['name'];
    }

    /**
     * Name of the sticker set
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
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\StickerSet
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\StickerSet
    {
        return \Tarik02\Telegram\Entities\StickerSet::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
