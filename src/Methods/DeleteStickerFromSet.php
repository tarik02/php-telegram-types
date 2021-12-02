<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class DeleteStickerFromSet
 *
 * Use this method to delete a sticker from a set created by the bot. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#deletestickerfromset
 */
class DeleteStickerFromSet extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'deleteStickerFromSet';
    }

    /**
     * File identifier of the sticker
     *
     * @return string
     */
    public function sticker(): string
    {
        return $this->payload['sticker'];
    }

    /**
     * File identifier of the sticker
     *
     * @param string $sticker
     * @return self
     */
    public function withSticker(string $sticker): self
    {
        $payload = $this->payload;
        $payload['sticker'] = $sticker;
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
     * @return bool
     */
    public static function createResponse($payload): bool
    {
        return $payload ?? false;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
