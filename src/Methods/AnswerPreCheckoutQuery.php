<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class AnswerPreCheckoutQuery
 *
 * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an [Update](https://core.telegram.org/bots/api/#update) with the field *pre\_checkout\_query*. Use this method to respond to such pre-checkout queries. On success, True is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#answerprecheckoutquery
 */
class AnswerPreCheckoutQuery extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'answerPreCheckoutQuery';
    }

    /**
     * Unique identifier for the query to be answered
     *
     * @return string
     */
    public function preCheckoutQueryId(): string
    {
        return $this->payload['pre_checkout_query_id'];
    }

    /**
     * Unique identifier for the query to be answered
     *
     * @param string $preCheckoutQueryId
     * @return self
     */
    public function withPreCheckoutQueryId(string $preCheckoutQueryId): self
    {
        $payload = $this->payload;
        $payload['pre_checkout_query_id'] = $preCheckoutQueryId;
        return new self($payload);
    }

    /**
     * Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
     *
     * @return bool
     */
    public function ok(): bool
    {
        return $this->payload['ok'];
    }

    /**
     * Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
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
     * Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     *
     * @return string|null
     */
    public function errorMessage(): ?string
    {
        return $this->payload['error_message'] ?? null;
    }

    /**
     * Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
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
