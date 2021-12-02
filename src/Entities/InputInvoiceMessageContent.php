<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputInvoiceMessageContent
 *
 * Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of an invoice message to be sent as the result of an inline query.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputinvoicemessagecontent
 */
class InputInvoiceMessageContent implements \Tarik02\Telegram\Entities\InputMessageContent
{
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
     * Payment provider token, obtained via [Botfather](https://t.me/botfather)
     *
     * @return string
     */
    public function providerToken(): string
    {
        return $this->payload['provider_token'];
    }

    /**
     * Payment provider token, obtained via [Botfather](https://t.me/botfather)
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
     * *Optional*. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     *
     * @return int|null
     */
    public function maxTipAmount(): ?int
    {
        return $this->payload['max_tip_amount'] ?? null;
    }

    /**
     * *Optional*. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
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
     * *Optional*. A JSON-serialized array of suggested amounts of tip in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     *
     * @return int[]|null
     */
    public function suggestedTipAmounts(): ?array
    {
        return $this->payload['suggested_tip_amounts'] ?? null;
    }

    /**
     * *Optional*. A JSON-serialized array of suggested amounts of tip in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
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
     * *Optional*. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     *
     * @return string|null
     */
    public function providerData(): ?string
    {
        return $this->payload['provider_data'] ?? null;
    }

    /**
     * *Optional*. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
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
     * *Optional*. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     *
     * @return string|null
     */
    public function photoUrl(): ?string
    {
        return $this->payload['photo_url'] ?? null;
    }

    /**
     * *Optional*. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
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
     * *Optional*. Photo size
     *
     * @return int|null
     */
    public function photoSize(): ?int
    {
        return $this->payload['photo_size'] ?? null;
    }

    /**
     * *Optional*. Photo size
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
     * *Optional*. Photo width
     *
     * @return int|null
     */
    public function photoWidth(): ?int
    {
        return $this->payload['photo_width'] ?? null;
    }

    /**
     * *Optional*. Photo width
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
     * *Optional*. Photo height
     *
     * @return int|null
     */
    public function photoHeight(): ?int
    {
        return $this->payload['photo_height'] ?? null;
    }

    /**
     * *Optional*. Photo height
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
     * *Optional*. Pass *True*, if you require the user's full name to complete the order
     *
     * @return bool|null
     */
    public function needName(): bool
    {
        return $this->payload['need_name'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if you require the user's full name to complete the order
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
     * *Optional*. Pass *True*, if you require the user's phone number to complete the order
     *
     * @return bool|null
     */
    public function needPhoneNumber(): bool
    {
        return $this->payload['need_phone_number'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if you require the user's phone number to complete the order
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
     * *Optional*. Pass *True*, if you require the user's email address to complete the order
     *
     * @return bool|null
     */
    public function needEmail(): bool
    {
        return $this->payload['need_email'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if you require the user's email address to complete the order
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
     * *Optional*. Pass *True*, if you require the user's shipping address to complete the order
     *
     * @return bool|null
     */
    public function needShippingAddress(): bool
    {
        return $this->payload['need_shipping_address'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if you require the user's shipping address to complete the order
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
     * *Optional*. Pass *True*, if user's phone number should be sent to provider
     *
     * @return bool|null
     */
    public function sendPhoneNumberToProvider(): bool
    {
        return $this->payload['send_phone_number_to_provider'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if user's phone number should be sent to provider
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
     * *Optional*. Pass *True*, if user's email address should be sent to provider
     *
     * @return bool|null
     */
    public function sendEmailToProvider(): bool
    {
        return $this->payload['send_email_to_provider'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if user's email address should be sent to provider
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
     * *Optional*. Pass *True*, if the final price depends on the shipping method
     *
     * @return bool|null
     */
    public function isFlexible(): bool
    {
        return $this->payload['is_flexible'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if the final price depends on the shipping method
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
     * @return \Tarik02\Telegram\Collections\InputInvoiceMessageContentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputInvoiceMessageContentCollection
    {
        return \Tarik02\Telegram\Collections\InputInvoiceMessageContentCollection::make();
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
