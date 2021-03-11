<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputVenueMessageContent
 *
 * Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a venue message to be sent as the result of an inline query.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputvenuemessagecontent
 */
class InputVenueMessageContent implements \Tarik02\Telegram\Entities\InputMessageContent
{
    /**
     * Latitude of the venue in degrees
     *
     * @return float
     */
    public function latitude(): float
    {
        return $this->payload['latitude'];
    }

    /**
     * Latitude of the venue in degrees
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
     * Longitude of the venue in degrees
     *
     * @return float
     */
    public function longitude(): float
    {
        return $this->payload['longitude'];
    }

    /**
     * Longitude of the venue in degrees
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
     * Name of the venue
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Name of the venue
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
     * Address of the venue
     *
     * @return string
     */
    public function address(): string
    {
        return $this->payload['address'];
    }

    /**
     * Address of the venue
     *
     * @param string $address
     * @return self
     */
    public function withAddress(string $address): self
    {
        $payload = $this->payload;
        $payload['address'] = $address;
        return new self($payload);
    }

    /**
     * *Optional*. Foursquare identifier of the venue, if known
     *
     * @return string|null
     */
    public function foursquareId(): ?string
    {
        return $this->payload['foursquare_id'] ?? null;
    }

    /**
     * *Optional*. Foursquare identifier of the venue, if known
     *
     * @param string|null $foursquareId
     * @return self
     */
    public function withFoursquareId(?string $foursquareId): self
    {
        $payload = $this->payload;
        $payload['foursquare_id'] = $foursquareId;
        return new self($payload);
    }

    /**
     * *Optional*. Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
     *
     * @return string|null
     */
    public function foursquareType(): ?string
    {
        return $this->payload['foursquare_type'] ?? null;
    }

    /**
     * *Optional*. Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
     *
     * @param string|null $foursquareType
     * @return self
     */
    public function withFoursquareType(?string $foursquareType): self
    {
        $payload = $this->payload;
        $payload['foursquare_type'] = $foursquareType;
        return new self($payload);
    }

    /**
     * *Optional*. Google Places identifier of the venue
     *
     * @return string|null
     */
    public function googlePlaceId(): ?string
    {
        return $this->payload['google_place_id'] ?? null;
    }

    /**
     * *Optional*. Google Places identifier of the venue
     *
     * @param string|null $googlePlaceId
     * @return self
     */
    public function withGooglePlaceId(?string $googlePlaceId): self
    {
        $payload = $this->payload;
        $payload['google_place_id'] = $googlePlaceId;
        return new self($payload);
    }

    /**
     * *Optional*. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     *
     * @return string|null
     */
    public function googlePlaceType(): ?string
    {
        return $this->payload['google_place_type'] ?? null;
    }

    /**
     * *Optional*. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     *
     * @param string|null $googlePlaceType
     * @return self
     */
    public function withGooglePlaceType(?string $googlePlaceType): self
    {
        $payload = $this->payload;
        $payload['google_place_type'] = $googlePlaceType;
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
     * @return \Tarik02\Telegram\Collections\InputVenueMessageContentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputVenueMessageContentCollection
    {
        return \Tarik02\Telegram\Collections\InputVenueMessageContentCollection::make();
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
