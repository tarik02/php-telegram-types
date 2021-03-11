<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultVenue
 *
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the venue.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultvenue
 */
class InlineQueryResultVenue implements \Tarik02\Telegram\Entities\InlineQueryResult
{
    /**
     * Type of the result, must be *venue*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *venue*
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * Unique identifier for this result, 1-64 Bytes
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this result, 1-64 Bytes
     *
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $payload = $this->payload;
        $payload['id'] = $id;
        return new self($payload);
    }

    /**
     * Latitude of the venue location in degrees
     *
     * @return float
     */
    public function latitude(): float
    {
        return $this->payload['latitude'];
    }

    /**
     * Latitude of the venue location in degrees
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
     * Longitude of the venue location in degrees
     *
     * @return float
     */
    public function longitude(): float
    {
        return $this->payload['longitude'];
    }

    /**
     * Longitude of the venue location in degrees
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
     * Title of the venue
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Title of the venue
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
     * *Optional*. Foursquare identifier of the venue if known
     *
     * @return string|null
     */
    public function foursquareId(): ?string
    {
        return $this->payload['foursquare_id'] ?? null;
    }

    /**
     * *Optional*. Foursquare identifier of the venue if known
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
     * *Optional*. [Inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null
     */
    public function replyMarkup(): ?\Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($this->payload['reply_markup']);
    }

    /**
     * *Optional*. [Inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup(?\Tarik02\Telegram\Entities\InlineKeyboardMarkup $replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } else {
            unset($payload['reply_markup']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Content of the message to be sent instead of the venue
     *
     * @return \Tarik02\Telegram\Entities\InputMessageContent|null
     */
    public function inputMessageContent(): ?\Tarik02\Telegram\Entities\InputMessageContent
    {
        if (($this->payload['input_message_content'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InputMessageContent::fromPayload($this->payload['input_message_content']);
    }

    /**
     * *Optional*. Content of the message to be sent instead of the venue
     *
     * @param \Tarik02\Telegram\Entities\InputMessageContent|null $inputMessageContent
     * @return self
     */
    public function withInputMessageContent(?\Tarik02\Telegram\Entities\InputMessageContent $inputMessageContent): self
    {
        $payload = $this->payload;
        if ($inputMessageContent !== null) {
            $payload['input_message_content'] = $inputMessageContent->toPayload();
        } else {
            unset($payload['input_message_content']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Url of the thumbnail for the result
     *
     * @return string|null
     */
    public function thumbUrl(): ?string
    {
        return $this->payload['thumb_url'] ?? null;
    }

    /**
     * *Optional*. Url of the thumbnail for the result
     *
     * @param string|null $thumbUrl
     * @return self
     */
    public function withThumbUrl(?string $thumbUrl): self
    {
        $payload = $this->payload;
        $payload['thumb_url'] = $thumbUrl;
        return new self($payload);
    }

    /**
     * *Optional*. Thumbnail width
     *
     * @return int|null
     */
    public function thumbWidth(): ?int
    {
        return $this->payload['thumb_width'] ?? null;
    }

    /**
     * *Optional*. Thumbnail width
     *
     * @param int|null $thumbWidth
     * @return self
     */
    public function withThumbWidth(?int $thumbWidth): self
    {
        $payload = $this->payload;
        $payload['thumb_width'] = $thumbWidth;
        return new self($payload);
    }

    /**
     * *Optional*. Thumbnail height
     *
     * @return int|null
     */
    public function thumbHeight(): ?int
    {
        return $this->payload['thumb_height'] ?? null;
    }

    /**
     * *Optional*. Thumbnail height
     *
     * @param int|null $thumbHeight
     * @return self
     */
    public function withThumbHeight(?int $thumbHeight): self
    {
        $payload = $this->payload;
        $payload['thumb_height'] = $thumbHeight;
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultVenueCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultVenueCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultVenueCollection::make();
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
