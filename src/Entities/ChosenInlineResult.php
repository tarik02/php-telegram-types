<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChosenInlineResult
 *
 * Represents a [result](https://core.telegram.org/bots/api/#inlinequeryresult) of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#choseninlineresult
 */
class ChosenInlineResult implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * The unique identifier for the result that was chosen
     *
     * @return string
     */
    public function resultId(): string
    {
        return $this->payload['result_id'];
    }

    /**
     * The unique identifier for the result that was chosen
     *
     * @param string $resultId
     * @return self
     */
    public function withResultId(string $resultId): self
    {
        $payload = $this->payload;
        $payload['result_id'] = $resultId;
        return new self($payload);
    }

    /**
     * The user that chose the result
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function from(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * The user that chose the result
     *
     * @param \Tarik02\Telegram\Entities\User $from
     * @return self
     */
    public function withFrom(\Tarik02\Telegram\Entities\User $from): self
    {
        $payload = $this->payload;
        $payload['from'] = $from->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. Sender location, only for bots that require user location
     *
     * @return \Tarik02\Telegram\Entities\Location|null
     */
    public function location(): ?\Tarik02\Telegram\Entities\Location
    {
        if (($this->payload['location'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Location::fromPayload($this->payload['location']);
    }

    /**
     * *Optional*. Sender location, only for bots that require user location
     *
     * @param \Tarik02\Telegram\Entities\Location|null $location
     * @return self
     */
    public function withLocation(?\Tarik02\Telegram\Entities\Location $location): self
    {
        $payload = $this->payload;
        if ($location !== null) {
            $payload['location'] = $location->toPayload();
        } else {
            unset($payload['location']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Identifier of the sent inline message. Available only if there is an [inline keyboard](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) attached to the message. Will be also received in [callback queries](https://core.telegram.org/bots/api/#callbackquery) and can be used to [edit](https://core.telegram.org/bots/api/#updating-messages) the message.
     *
     * @return string|null
     */
    public function inlineMessageId(): ?string
    {
        return $this->payload['inline_message_id'] ?? null;
    }

    /**
     * *Optional*. Identifier of the sent inline message. Available only if there is an [inline keyboard](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) attached to the message. Will be also received in [callback queries](https://core.telegram.org/bots/api/#callbackquery) and can be used to [edit](https://core.telegram.org/bots/api/#updating-messages) the message.
     *
     * @param string|null $inlineMessageId
     * @return self
     */
    public function withInlineMessageId(?string $inlineMessageId): self
    {
        $payload = $this->payload;
        $payload['inline_message_id'] = $inlineMessageId;
        return new self($payload);
    }

    /**
     * The query that was used to obtain the result
     *
     * @return string
     */
    public function query(): string
    {
        return $this->payload['query'];
    }

    /**
     * The query that was used to obtain the result
     *
     * @param string $query
     * @return self
     */
    public function withQuery(string $query): self
    {
        $payload = $this->payload;
        $payload['query'] = $query;
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
     * @return \Tarik02\Telegram\Collections\ChosenInlineResultCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChosenInlineResultCollection
    {
        return \Tarik02\Telegram\Collections\ChosenInlineResultCollection::make();
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
