<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultContact
 *
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the contact.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultcontact
 */
class InlineQueryResultContact extends \Tarik02\Telegram\Entities\InlineQueryResult implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Type of the result, must be *contact*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *contact*
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
     * Contact's phone number
     *
     * @return string
     */
    public function phoneNumber(): string
    {
        return $this->payload['phone_number'];
    }

    /**
     * Contact's phone number
     *
     * @param string $phoneNumber
     * @return self
     */
    public function withPhoneNumber(string $phoneNumber): self
    {
        $payload = $this->payload;
        $payload['phone_number'] = $phoneNumber;
        return new self($payload);
    }

    /**
     * Contact's first name
     *
     * @return string
     */
    public function firstName(): string
    {
        return $this->payload['first_name'];
    }

    /**
     * Contact's first name
     *
     * @param string $firstName
     * @return self
     */
    public function withFirstName(string $firstName): self
    {
        $payload = $this->payload;
        $payload['first_name'] = $firstName;
        return new self($payload);
    }

    /**
     * *Optional*. Contact's last name
     *
     * @return string|null
     */
    public function lastName(): ?string
    {
        return $this->payload['last_name'] ?? null;
    }

    /**
     * *Optional*. Contact's last name
     *
     * @param string|null $lastName
     * @return self
     */
    public function withLastName(?string $lastName): self
    {
        $payload = $this->payload;
        $payload['last_name'] = $lastName;
        return new self($payload);
    }

    /**
     * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     *
     * @return string|null
     */
    public function vcard(): ?string
    {
        return $this->payload['vcard'] ?? null;
    }

    /**
     * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     *
     * @param string|null $vcard
     * @return self
     */
    public function withVcard(?string $vcard): self
    {
        $payload = $this->payload;
        $payload['vcard'] = $vcard;
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
     * *Optional*. Content of the message to be sent instead of the contact
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
     * *Optional*. Content of the message to be sent instead of the contact
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultContactCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultContactCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultContactCollection::make();
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
