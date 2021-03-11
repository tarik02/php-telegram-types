<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class SuccessfulPayment
 *
 * This object contains basic information about a successful payment.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#successfulpayment
 */
class SuccessfulPayment implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Three-letter ISO 4217 [currency](/bots/payments#supported-currencies) code
     *
     * @return string
     */
    public function currency(): string
    {
        return $this->payload['currency'];
    }

    /**
     * Three-letter ISO 4217 [currency](/bots/payments#supported-currencies) code
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
     * Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     *
     * @return int
     */
    public function totalAmount(): int
    {
        return $this->payload['total_amount'];
    }

    /**
     * Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     *
     * @param int $totalAmount
     * @return self
     */
    public function withTotalAmount(int $totalAmount): self
    {
        $payload = $this->payload;
        $payload['total_amount'] = $totalAmount;
        return new self($payload);
    }

    /**
     * Bot specified invoice payload
     *
     * @return string
     */
    public function invoicePayload(): string
    {
        return $this->payload['invoice_payload'];
    }

    /**
     * Bot specified invoice payload
     *
     * @param string $invoicePayload
     * @return self
     */
    public function withInvoicePayload(string $invoicePayload): self
    {
        $payload = $this->payload;
        $payload['invoice_payload'] = $invoicePayload;
        return new self($payload);
    }

    /**
     * *Optional*. Identifier of the shipping option chosen by the user
     *
     * @return string|null
     */
    public function shippingOptionId(): ?string
    {
        return $this->payload['shipping_option_id'] ?? null;
    }

    /**
     * *Optional*. Identifier of the shipping option chosen by the user
     *
     * @param string|null $shippingOptionId
     * @return self
     */
    public function withShippingOptionId(?string $shippingOptionId): self
    {
        $payload = $this->payload;
        $payload['shipping_option_id'] = $shippingOptionId;
        return new self($payload);
    }

    /**
     * *Optional*. Order info provided by the user
     *
     * @return \Tarik02\Telegram\Entities\OrderInfo|null
     */
    public function orderInfo(): ?\Tarik02\Telegram\Entities\OrderInfo
    {
        if (($this->payload['order_info'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\OrderInfo::fromPayload($this->payload['order_info']);
    }

    /**
     * *Optional*. Order info provided by the user
     *
     * @param \Tarik02\Telegram\Entities\OrderInfo|null $orderInfo
     * @return self
     */
    public function withOrderInfo(?\Tarik02\Telegram\Entities\OrderInfo $orderInfo): self
    {
        $payload = $this->payload;
        if ($orderInfo !== null) {
            $payload['order_info'] = $orderInfo->toPayload();
        } else {
            unset($payload['order_info']);
        }
        return new self($payload);
    }

    /**
     * Telegram payment identifier
     *
     * @return string
     */
    public function telegramPaymentChargeId(): string
    {
        return $this->payload['telegram_payment_charge_id'];
    }

    /**
     * Telegram payment identifier
     *
     * @param string $telegramPaymentChargeId
     * @return self
     */
    public function withTelegramPaymentChargeId(string $telegramPaymentChargeId): self
    {
        $payload = $this->payload;
        $payload['telegram_payment_charge_id'] = $telegramPaymentChargeId;
        return new self($payload);
    }

    /**
     * Provider payment identifier
     *
     * @return string
     */
    public function providerPaymentChargeId(): string
    {
        return $this->payload['provider_payment_charge_id'];
    }

    /**
     * Provider payment identifier
     *
     * @param string $providerPaymentChargeId
     * @return self
     */
    public function withProviderPaymentChargeId(string $providerPaymentChargeId): self
    {
        $payload = $this->payload;
        $payload['provider_payment_charge_id'] = $providerPaymentChargeId;
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
     * @return \Tarik02\Telegram\Collections\SuccessfulPaymentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\SuccessfulPaymentCollection
    {
        return \Tarik02\Telegram\Collections\SuccessfulPaymentCollection::make();
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
