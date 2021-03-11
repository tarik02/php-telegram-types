<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Invoice
 *
 * This object contains basic information about an invoice.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#invoice
 */
class Invoice implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Product name
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Product name
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
     * Product description
     *
     * @return string
     */
    public function description(): string
    {
        return $this->payload['description'];
    }

    /**
     * Product description
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
     * Unique bot deep-linking parameter that can be used to generate this invoice
     *
     * @return string
     */
    public function startParameter(): string
    {
        return $this->payload['start_parameter'];
    }

    /**
     * Unique bot deep-linking parameter that can be used to generate this invoice
     *
     * @param string $startParameter
     * @return self
     */
    public function withStartParameter(string $startParameter): self
    {
        $payload = $this->payload;
        $payload['start_parameter'] = $startParameter;
        return new self($payload);
    }

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
     * @return \Tarik02\Telegram\Collections\InvoiceCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InvoiceCollection
    {
        return \Tarik02\Telegram\Collections\InvoiceCollection::make();
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
