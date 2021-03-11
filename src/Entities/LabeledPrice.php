<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class LabeledPrice
 *
 * This object represents a portion of the price for goods or services.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#labeledprice
 */
class LabeledPrice implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Portion label
     *
     * @return string
     */
    public function label(): string
    {
        return $this->payload['label'];
    }

    /**
     * Portion label
     *
     * @param string $label
     * @return self
     */
    public function withLabel(string $label): self
    {
        $payload = $this->payload;
        $payload['label'] = $label;
        return new self($payload);
    }

    /**
     * Price of the product in the *smallest units* of the [currency](/bots/payments#supported-currencies) (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     *
     * @return int
     */
    public function amount(): int
    {
        return $this->payload['amount'];
    }

    /**
     * Price of the product in the *smallest units* of the [currency](/bots/payments#supported-currencies) (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     *
     * @param int $amount
     * @return self
     */
    public function withAmount(int $amount): self
    {
        $payload = $this->payload;
        $payload['amount'] = $amount;
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
     * @return \Tarik02\Telegram\Collections\LabeledPriceCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\LabeledPriceCollection
    {
        return \Tarik02\Telegram\Collections\LabeledPriceCollection::make();
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
