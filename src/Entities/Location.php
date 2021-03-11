<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Location
 *
 * This object represents a point on the map.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#location
 */
class Location implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Longitude as defined by sender
     *
     * @return float
     */
    public function longitude(): float
    {
        return $this->payload['longitude'];
    }

    /**
     * Longitude as defined by sender
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
     * Latitude as defined by sender
     *
     * @return float
     */
    public function latitude(): float
    {
        return $this->payload['latitude'];
    }

    /**
     * Latitude as defined by sender
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
     * *Optional*. Time relative to the message sending date, during which the location can be updated, in seconds. For active live locations only.
     *
     * @return int|null
     */
    public function livePeriod(): ?int
    {
        return $this->payload['live_period'] ?? null;
    }

    /**
     * *Optional*. Time relative to the message sending date, during which the location can be updated, in seconds. For active live locations only.
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
     * *Optional*. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     *
     * @return int|null
     */
    public function heading(): ?int
    {
        return $this->payload['heading'] ?? null;
    }

    /**
     * *Optional*. The direction in which user is moving, in degrees; 1-360. For active live locations only.
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
     * *Optional*. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     *
     * @return int|null
     */
    public function proximityAlertRadius(): ?int
    {
        return $this->payload['proximity_alert_radius'] ?? null;
    }

    /**
     * *Optional*. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
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
     * @return \Tarik02\Telegram\Collections\LocationCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\LocationCollection
    {
        return \Tarik02\Telegram\Collections\LocationCollection::make();
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
