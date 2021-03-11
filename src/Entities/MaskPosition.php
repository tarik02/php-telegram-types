<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class MaskPosition
 *
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#maskposition
 */
class MaskPosition implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     *
     * @return string
     */
    public function point(): string
    {
        return $this->payload['point'];
    }

    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     *
     * @param string $point
     * @return self
     */
    public function withPoint(string $point): self
    {
        $payload = $this->payload;
        $payload['point'] = $point;
        return new self($payload);
    }

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     *
     * @return float
     */
    public function xShift(): float
    {
        return $this->payload['x_shift'];
    }

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     *
     * @param float $xShift
     * @return self
     */
    public function withXShift(float $xShift): self
    {
        $payload = $this->payload;
        $payload['x_shift'] = $xShift;
        return new self($payload);
    }

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     *
     * @return float
     */
    public function yShift(): float
    {
        return $this->payload['y_shift'];
    }

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     *
     * @param float $yShift
     * @return self
     */
    public function withYShift(float $yShift): self
    {
        $payload = $this->payload;
        $payload['y_shift'] = $yShift;
        return new self($payload);
    }

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @return float
     */
    public function scale(): float
    {
        return $this->payload['scale'];
    }

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @param float $scale
     * @return self
     */
    public function withScale(float $scale): self
    {
        $payload = $this->payload;
        $payload['scale'] = $scale;
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
     * @return \Tarik02\Telegram\Collections\MaskPositionCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\MaskPositionCollection
    {
        return \Tarik02\Telegram\Collections\MaskPositionCollection::make();
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
