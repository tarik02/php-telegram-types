<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SetStickerPositionInSet
 *
 * Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#setstickerpositioninset
 */
class SetStickerPositionInSet extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'setStickerPositionInSet';
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
     * New sticker position in the set, zero-based
     *
     * @return int
     */
    public function position(): int
    {
        return $this->payload['position'];
    }

    /**
     * New sticker position in the set, zero-based
     *
     * @param int $position
     * @return self
     */
    public function withPosition(int $position): self
    {
        $payload = $this->payload;
        $payload['position'] = $position;
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
        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
