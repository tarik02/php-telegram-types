<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class KeyboardButton
 *
 * This object represents one button of the reply keyboard. For simple text buttons *String* can be used instead of this object to specify text of the button. Optional fields *request\_contact*, *request\_location*, and *request\_poll* are mutually exclusive.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#keyboardbutton
 */
class KeyboardButton implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     *
     * @return string
     */
    public function text(): string
    {
        return $this->payload['text'];
    }

    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
     *
     * @param string $text
     * @return self
     */
    public function withText(string $text): self
    {
        $payload = $this->payload;
        $payload['text'] = $text;
        return new self($payload);
    }

    /**
     * *Optional*. If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
     *
     * @return bool|null
     */
    public function requestContact(): bool
    {
        return $this->payload['request_contact'] ?? false;
    }

    /**
     * *Optional*. If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
     *
     * @param bool|null $requestContact
     * @return self
     */
    public function withRequestContact(bool $requestContact): self
    {
        $payload = $this->payload;
        $payload['request_contact'] = $requestContact;
        return new self($payload);
    }

    /**
     * *Optional*. If *True*, the user's current location will be sent when the button is pressed. Available in private chats only
     *
     * @return bool|null
     */
    public function requestLocation(): bool
    {
        return $this->payload['request_location'] ?? false;
    }

    /**
     * *Optional*. If *True*, the user's current location will be sent when the button is pressed. Available in private chats only
     *
     * @param bool|null $requestLocation
     * @return self
     */
    public function withRequestLocation(bool $requestLocation): self
    {
        $payload = $this->payload;
        $payload['request_location'] = $requestLocation;
        return new self($payload);
    }

    /**
     * *Optional*. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only
     *
     * @return \Tarik02\Telegram\Entities\KeyboardButtonPollType|null
     */
    public function requestPoll(): ?\Tarik02\Telegram\Entities\KeyboardButtonPollType
    {
        if (($this->payload['request_poll'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\KeyboardButtonPollType::fromPayload($this->payload['request_poll']);
    }

    /**
     * *Optional*. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only
     *
     * @param \Tarik02\Telegram\Entities\KeyboardButtonPollType|null $requestPoll
     * @return self
     */
    public function withRequestPoll(?\Tarik02\Telegram\Entities\KeyboardButtonPollType $requestPoll): self
    {
        $payload = $this->payload;
        if ($requestPoll !== null) {
            $payload['request_poll'] = $requestPoll->toPayload();
        } else {
            unset($payload['request_poll']);
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
     * @return \Tarik02\Telegram\Collections\KeyboardButtonCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\KeyboardButtonCollection
    {
        return \Tarik02\Telegram\Collections\KeyboardButtonCollection::make();
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
