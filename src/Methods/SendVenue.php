<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendVenue
 *
 * Use this method to send information about a venue. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#sendvenue
 */
class SendVenue extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'sendVenue';
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @param int|string $chatId
     * @return self
     */
    public function withChatId($chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * Latitude of the venue
     *
     * @return float
     */
    public function latitude(): float
    {
        return $this->payload['latitude'];
    }

    /**
     * Latitude of the venue
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
     * Longitude of the venue
     *
     * @return float
     */
    public function longitude(): float
    {
        return $this->payload['longitude'];
    }

    /**
     * Longitude of the venue
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
     * Foursquare identifier of the venue
     *
     * @return string|null
     */
    public function foursquareId(): ?string
    {
        return $this->payload['foursquare_id'] ?? null;
    }

    /**
     * Foursquare identifier of the venue
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
     * Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
     *
     * @return string|null
     */
    public function foursquareType(): ?string
    {
        return $this->payload['foursquare_type'] ?? null;
    }

    /**
     * Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
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
     * Google Places identifier of the venue
     *
     * @return string|null
     */
    public function googlePlaceId(): ?string
    {
        return $this->payload['google_place_id'] ?? null;
    }

    /**
     * Google Places identifier of the venue
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
     * Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     *
     * @return string|null
     */
    public function googlePlaceType(): ?string
    {
        return $this->payload['google_place_type'] ?? null;
    }

    /**
     * Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
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
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     */
    public function disableNotification(): ?bool
    {
        return $this->payload['disable_notification'] ?? null;
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @param bool|null $disableNotification
     * @return self
     */
    public function withDisableNotification(?bool $disableNotification): self
    {
        $payload = $this->payload;
        $payload['disable_notification'] = $disableNotification;
        return new self($payload);
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @return int|null
     */
    public function replyToMessageId(): ?int
    {
        return $this->payload['reply_to_message_id'] ?? null;
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @param int|null $replyToMessageId
     * @return self
     */
    public function withReplyToMessageId(?int $replyToMessageId): self
    {
        $payload = $this->payload;
        $payload['reply_to_message_id'] = $replyToMessageId;
        return new self($payload);
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @return bool|null
     */
    public function allowSendingWithoutReply(): ?bool
    {
        return $this->payload['allow_sending_without_reply'] ?? null;
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @param bool|null $allowSendingWithoutReply
     * @return self
     */
    public function withAllowSendingWithoutReply(?bool $allowSendingWithoutReply): self
    {
        $payload = $this->payload;
        $payload['allow_sending_without_reply'] = $allowSendingWithoutReply;
        return new self($payload);
    }

    /**
     * Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardRemove|\Tarik02\Telegram\Entities\ForceReply|null
     */
    public function replyMarkup()
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        $source = $this->payload['reply_markup'];
        if (isset($source['inline_keyboard'])) {
            return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($source);
        }
        if (isset($source['keyboard'])) {
            return \Tarik02\Telegram\Entities\ReplyKeyboardMarkup::fromPayload($source);
        }
        if (isset($source['remove_keyboard'])) {
            return \Tarik02\Telegram\Entities\ReplyKeyboardRemove::fromPayload($source);
        }
        if (isset($source['force_reply'])) {
            return \Tarik02\Telegram\Entities\ForceReply::fromPayload($source);
        }

        return $this->payload['reply_markup'];
    }

    /**
     * Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardRemove|\Tarik02\Telegram\Entities\ForceReply|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup($replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } elseif ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup;
        } else {
            unset($payload['reply_markup']);
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
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Message
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\Message
    {
        return \Tarik02\Telegram\Entities\Message::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
