<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class AnswerShippingQuery
 *
 * If you sent an invoice requesting a shipping address and the parameter *is\_flexible* was specified, the Bot API will send an [Update](https://core.telegram.org/bots/api/#update) with a *shipping\_query* field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#answershippingquery
 */
class AnswerShippingQuery extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'answerShippingQuery';
    }

    /**
     * Unique identifier for the query to be answered
     *
     * @return string
     */
    public function shippingQueryId(): string
    {
        return $this->payload['shipping_query_id'];
    }

    /**
     * Unique identifier for the query to be answered
     *
     * @param string $shippingQueryId
     * @return self
     */
    public function withShippingQueryId(string $shippingQueryId): self
    {
        $payload = $this->payload;
        $payload['shipping_query_id'] = $shippingQueryId;
        return new self($payload);
    }

    /**
     * Specify True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
     *
     * @return bool
     */
    public function ok(): bool
    {
        return $this->payload['ok'];
    }

    /**
     * Specify True if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
     *
     * @param bool $ok
     * @return self
     */
    public function withOk(bool $ok): self
    {
        $payload = $this->payload;
        $payload['ok'] = $ok;
        return new self($payload);
    }

    /**
     * Required if *ok* is True. A JSON-serialized array of available shipping options.
     *
     * @return \Tarik02\Telegram\Collections\ShippingOptionCollection|null
     */
    public function shippingOptions(): \Tarik02\Telegram\Collections\ShippingOptionCollection
    {
        if (($this->payload['shipping_options'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\ShippingOptionCollection::fromPayload($this->payload['shipping_options'] ?? []);
    }

    /**
     * Required if *ok* is True. A JSON-serialized array of available shipping options.
     *
     * @param \Tarik02\Telegram\Collections\ShippingOptionCollection|null $shippingOptions
     * @return self
     */
    public function withShippingOptions(\Tarik02\Telegram\Collections\ShippingOptionCollection $shippingOptions): self
    {
        $payload = $this->payload;
        if ($shippingOptions !== null) {
            $payload['shipping_options'] = $shippingOptions->toPayload();
        } else {
            unset($payload['shipping_options']);
        }
        return new self($payload);
    }

    /**
     * Required if *ok* is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     *
     * @return string|null
     */
    public function errorMessage(): ?string
    {
        return $this->payload['error_message'] ?? null;
    }

    /**
     * Required if *ok* is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     *
     * @param string|null $errorMessage
     * @return self
     */
    public function withErrorMessage(?string $errorMessage): self
    {
        $payload = $this->payload;
        $payload['error_message'] = $errorMessage;
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
     * @return bool
     */
    public static function createResponse($payload): bool
    {
        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
