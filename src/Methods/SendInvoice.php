<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendInvoice
 *
 * Use this method to send invoices. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#sendinvoice
 */
class SendInvoice extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'sendInvoice';
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
     * Product name, 1-32 characters
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Product name, 1-32 characters
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
     * Product description, 1-255 characters
     *
     * @return string
     */
    public function description(): string
    {
        return $this->payload['description'];
    }

    /**
     * Product description, 1-255 characters
     *
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $payload = $this->payload;
        $payload['description'] = $description;
        return new self($payload);
    }

    /**
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     *
     * @return string
     */
    public function payload(): string
    {
        return $this->payload['payload'];
    }

    /**
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     *
     * @param string $payload
     * @return self
     */
    public function withPayload(string $payload): self
    {
        $payload = $this->payload;
        $payload['payload'] = $payload;
        return new self($payload);
    }

    /**
     * Payments provider token, obtained via [Botfather](https://t.me/botfather)
     *
     * @return string
     */
    public function providerToken(): string
    {
        return $this->payload['provider_token'];
    }

    /**
     * Payments provider token, obtained via [Botfather](https://t.me/botfather)
     *
     * @param string $providerToken
     * @return self
     */
    public function withProviderToken(string $providerToken): self
    {
        $payload = $this->payload;
        $payload['provider_token'] = $providerToken;
        return new self($payload);
    }

    /**
     * Three-letter ISO 4217 currency code, see [more on currencies](/bots/payments#supported-currencies)
     *
     * @return string
     */
    public function currency(): string
    {
        return $this->payload['currency'];
    }

    /**
     * Three-letter ISO 4217 currency code, see [more on currencies](/bots/payments#supported-currencies)
     *
     * @param string $currency
     * @return self
     */
    public function withCurrency(string $currency): self
    {
        $payload = $this->payload;
        $payload['currency'] = $currency;
        return new self($payload);
    }

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     *
     * @return \Tarik02\Telegram\Collections\LabeledPriceCollection
     */
    public function prices(): \Tarik02\Telegram\Collections\LabeledPriceCollection
    {
        return \Tarik02\Telegram\Collections\LabeledPriceCollection::fromPayload($this->payload['prices'] ?? []);
    }

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     *
     * @param \Tarik02\Telegram\Collections\LabeledPriceCollection $prices
     * @return self
     */
    public function withPrices(\Tarik02\Telegram\Collections\LabeledPriceCollection $prices): self
    {
        $payload = $this->payload;
        $payload['prices'] = $prices->toPayload();
        return new self($payload);
    }

    /**
     * The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     *
     * @return int|null
     */
    public function maxTipAmount(): ?int
    {
        return $this->payload['max_tip_amount'] ?? null;
    }

    /**
     * The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     *
     * @param int|null $maxTipAmount
     * @return self
     */
    public function withMaxTipAmount(?int $maxTipAmount): self
    {
        $payload = $this->payload;
        $payload['max_tip_amount'] = $maxTipAmount;
        return new self($payload);
    }

    /**
     * A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     *
     * @return int[]|null
     */
    public function suggestedTipAmounts(): ?array
    {
        return $this->payload['suggested_tip_amounts'] ?? null;
    }

    /**
     * A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     *
     * @param int[]|null $suggestedTipAmounts
     * @return self
     */
    public function withSuggestedTipAmounts(?array $suggestedTipAmounts): self
    {
        $payload = $this->payload;
        $payload['suggested_tip_amounts'] = $suggestedTipAmounts;
        return new self($payload);
    }

    /**
     * Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter
     *
     * @return string|null
     */
    public function startParameter(): ?string
    {
        return $this->payload['start_parameter'] ?? null;
    }

    /**
     * Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter
     *
     * @param string|null $startParameter
     * @return self
     */
    public function withStartParameter(?string $startParameter): self
    {
        $payload = $this->payload;
        $payload['start_parameter'] = $startParameter;
        return new self($payload);
    }

    /**
     * A JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     *
     * @return string|null
     */
    public function providerData(): ?string
    {
        return $this->payload['provider_data'] ?? null;
    }

    /**
     * A JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     *
     * @param string|null $providerData
     * @return self
     */
    public function withProviderData(?string $providerData): self
    {
        $payload = $this->payload;
        $payload['provider_data'] = $providerData;
        return new self($payload);
    }

    /**
     * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     *
     * @return string|null
     */
    public function photoUrl(): ?string
    {
        return $this->payload['photo_url'] ?? null;
    }

    /**
     * URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     *
     * @param string|null $photoUrl
     * @return self
     */
    public function withPhotoUrl(?string $photoUrl): self
    {
        $payload = $this->payload;
        $payload['photo_url'] = $photoUrl;
        return new self($payload);
    }

    /**
     * Photo size
     *
     * @return int|null
     */
    public function photoSize(): ?int
    {
        return $this->payload['photo_size'] ?? null;
    }

    /**
     * Photo size
     *
     * @param int|null $photoSize
     * @return self
     */
    public function withPhotoSize(?int $photoSize): self
    {
        $payload = $this->payload;
        $payload['photo_size'] = $photoSize;
        return new self($payload);
    }

    /**
     * Photo width
     *
     * @return int|null
     */
    public function photoWidth(): ?int
    {
        return $this->payload['photo_width'] ?? null;
    }

    /**
     * Photo width
     *
     * @param int|null $photoWidth
     * @return self
     */
    public function withPhotoWidth(?int $photoWidth): self
    {
        $payload = $this->payload;
        $payload['photo_width'] = $photoWidth;
        return new self($payload);
    }

    /**
     * Photo height
     *
     * @return int|null
     */
    public function photoHeight(): ?int
    {
        return $this->payload['photo_height'] ?? null;
    }

    /**
     * Photo height
     *
     * @param int|null $photoHeight
     * @return self
     */
    public function withPhotoHeight(?int $photoHeight): self
    {
        $payload = $this->payload;
        $payload['photo_height'] = $photoHeight;
        return new self($payload);
    }

    /**
     * Pass *True*, if you require the user's full name to complete the order
     *
     * @return bool|null
     */
    public function needName(): bool
    {
        return $this->payload['need_name'] ?? false;
    }

    /**
     * Pass *True*, if you require the user's full name to complete the order
     *
     * @param bool|null $needName
     * @return self
     */
    public function withNeedName(bool $needName): self
    {
        $payload = $this->payload;
        $payload['need_name'] = $needName;
        return new self($payload);
    }

    /**
     * Pass *True*, if you require the user's phone number to complete the order
     *
     * @return bool|null
     */
    public function needPhoneNumber(): bool
    {
        return $this->payload['need_phone_number'] ?? false;
    }

    /**
     * Pass *True*, if you require the user's phone number to complete the order
     *
     * @param bool|null $needPhoneNumber
     * @return self
     */
    public function withNeedPhoneNumber(bool $needPhoneNumber): self
    {
        $payload = $this->payload;
        $payload['need_phone_number'] = $needPhoneNumber;
        return new self($payload);
    }

    /**
     * Pass *True*, if you require the user's email address to complete the order
     *
     * @return bool|null
     */
    public function needEmail(): bool
    {
        return $this->payload['need_email'] ?? false;
    }

    /**
     * Pass *True*, if you require the user's email address to complete the order
     *
     * @param bool|null $needEmail
     * @return self
     */
    public function withNeedEmail(bool $needEmail): self
    {
        $payload = $this->payload;
        $payload['need_email'] = $needEmail;
        return new self($payload);
    }

    /**
     * Pass *True*, if you require the user's shipping address to complete the order
     *
     * @return bool|null
     */
    public function needShippingAddress(): bool
    {
        return $this->payload['need_shipping_address'] ?? false;
    }

    /**
     * Pass *True*, if you require the user's shipping address to complete the order
     *
     * @param bool|null $needShippingAddress
     * @return self
     */
    public function withNeedShippingAddress(bool $needShippingAddress): self
    {
        $payload = $this->payload;
        $payload['need_shipping_address'] = $needShippingAddress;
        return new self($payload);
    }

    /**
     * Pass *True*, if user's phone number should be sent to provider
     *
     * @return bool|null
     */
    public function sendPhoneNumberToProvider(): bool
    {
        return $this->payload['send_phone_number_to_provider'] ?? false;
    }

    /**
     * Pass *True*, if user's phone number should be sent to provider
     *
     * @param bool|null $sendPhoneNumberToProvider
     * @return self
     */
    public function withSendPhoneNumberToProvider(bool $sendPhoneNumberToProvider): self
    {
        $payload = $this->payload;
        $payload['send_phone_number_to_provider'] = $sendPhoneNumberToProvider;
        return new self($payload);
    }

    /**
     * Pass *True*, if user's email address should be sent to provider
     *
     * @return bool|null
     */
    public function sendEmailToProvider(): bool
    {
        return $this->payload['send_email_to_provider'] ?? false;
    }

    /**
     * Pass *True*, if user's email address should be sent to provider
     *
     * @param bool|null $sendEmailToProvider
     * @return self
     */
    public function withSendEmailToProvider(bool $sendEmailToProvider): self
    {
        $payload = $this->payload;
        $payload['send_email_to_provider'] = $sendEmailToProvider;
        return new self($payload);
    }

    /**
     * Pass *True*, if the final price depends on the shipping method
     *
     * @return bool|null
     */
    public function isFlexible(): bool
    {
        return $this->payload['is_flexible'] ?? false;
    }

    /**
     * Pass *True*, if the final price depends on the shipping method
     *
     * @param bool|null $isFlexible
     * @return self
     */
    public function withIsFlexible(bool $isFlexible): self
    {
        $payload = $this->payload;
        $payload['is_flexible'] = $isFlexible;
        return new self($payload);
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     */
    public function disableNotification(): bool
    {
        return $this->payload['disable_notification'] ?? false;
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @param bool|null $disableNotification
     * @return self
     */
    public function withDisableNotification(bool $disableNotification): self
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
    public function allowSendingWithoutReply(): bool
    {
        return $this->payload['allow_sending_without_reply'] ?? false;
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @param bool|null $allowSendingWithoutReply
     * @return self
     */
    public function withAllowSendingWithoutReply(bool $allowSendingWithoutReply): self
    {
        $payload = $this->payload;
        $payload['allow_sending_without_reply'] = $allowSendingWithoutReply;
        return new self($payload);
    }

    /**
     * A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.
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
     * A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.
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
