<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputLocationMessageContent
 *
 * Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a location message to be sent as the result of an inline query.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputlocationmessagecontent
 */
class InputLocationMessageContent extends \Tarik02\Telegram\Entities\InputMessageContent implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Latitude of the location in degrees
     *
     * @return float
     */
    public function latitude(): float
    {
        return $this->payload['latitude'];
    }

    /**
     * Latitude of the location in degrees
     *
     * @param float $latitude
     * @return self
     */
    public function withLatitude(float $latitude): self
    {
        $payload = $this->payload;
        $payload['latitude'] = $latitude;
        return new self($payload);
    }

    /**
     * Longitude of the location in degrees
     *
     * @return float
     */
    public function longitude(): float
    {
        return $this->payload['longitude'];
    }

    /**
     * Longitude of the location in degrees
     *
     * @param float $longitude
     * @return self
     */
    public function withLongitude(float $longitude): self
    {
        $payload = $this->payload;
        $payload['longitude'] = $longitude;
        return new self($payload);
    }

    /**
     * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
     *
     * @return float|null
     */
    public function horizontalAccuracy(): ?float
    {
        return $this->payload['horizontal_accuracy'] ?? null;
    }

    /**
     * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
     *
     * @param float|null $horizontalAccuracy
     * @return self
     */
    public function withHorizontalAccuracy(?float $horizontalAccuracy): self
    {
        $payload = $this->payload;
        $payload['horizontal_accuracy'] = $horizontalAccuracy;
        return new self($payload);
    }

    /**
     * *Optional*. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @return int|null
     */
    public function livePeriod(): ?int
    {
        return $this->payload['live_period'] ?? null;
    }

    /**
     * *Optional*. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @param int|null $livePeriod
     * @return self
     */
    public function withLivePeriod(?int $livePeriod): self
    {
        $payload = $this->payload;
        $payload['live_period'] = $livePeriod;
        return new self($payload);
    }

    /**
     * *Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *
     * @return int|null
     */
    public function heading(): ?int
    {
        return $this->payload['heading'] ?? null;
    }

    /**
     * *Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *
     * @param int|null $heading
     * @return self
     */
    public function withHeading(?int $heading): self
    {
        $payload = $this->payload;
        $payload['heading'] = $heading;
        return new self($payload);
    }

    /**
     * *Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *
     * @return int|null
     */
    public function proximityAlertRadius(): ?int
    {
        return $this->payload['proximity_alert_radius'] ?? null;
    }

    /**
     * *Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *
     * @param int|null $proximityAlertRadius
     * @return self
     */
    public function withProximityAlertRadius(?int $proximityAlertRadius): self
    {
        $payload = $this->payload;
        $payload['proximity_alert_radius'] = $proximityAlertRadius;
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
     * @return \Tarik02\Telegram\Collections\InputLocationMessageContentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputLocationMessageContentCollection
    {
        return \Tarik02\Telegram\Collections\InputLocationMessageContentCollection::make();
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
