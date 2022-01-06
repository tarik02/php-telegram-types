<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultLocation
 *
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the location.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultlocation
 */
class InlineQueryResultLocation extends \Tarik02\Telegram\Entities\InlineQueryResult implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Type of the result, must be *location*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *location*
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
     * Location latitude in degrees
     *
     * @return float
     */
    public function latitude(): float
    {
        return $this->payload['latitude'];
    }

    /**
     * Location latitude in degrees
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
     * Location longitude in degrees
     *
     * @return float
     */
    public function longitude(): float
    {
        return $this->payload['longitude'];
    }

    /**
     * Location longitude in degrees
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
     * Location title
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Location title
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
     * *Optional*. Content of the message to be sent instead of the location
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
     * *Optional*. Content of the message to be sent instead of the location
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultLocationCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultLocationCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultLocationCollection::make();
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
