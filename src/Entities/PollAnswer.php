<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PollAnswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#pollanswer
 */
class PollAnswer implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique poll identifier
     *
     * @return string
     */
    public function pollId(): string
    {
        return $this->payload['poll_id'];
    }

    /**
     * Unique poll identifier
     *
     * @param string $pollId
     * @return self
     */
    public function withPollId(string $pollId): self
    {
        $payload = $this->payload;
        $payload['poll_id'] = $pollId;
        return new self($payload);
    }

    /**
     * The user, who changed the answer to the poll
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function user(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['user']);
    }

    /**
     * The user, who changed the answer to the poll
     *
     * @param \Tarik02\Telegram\Entities\User $user
     * @return self
     */
    public function withUser(\Tarik02\Telegram\Entities\User $user): self
    {
        $payload = $this->payload;
        $payload['user'] = $user->toPayload();
        return new self($payload);
    }

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @return int[]
     */
    public function optionIds(): array
    {
        return $this->payload['option_ids'];
    }

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @param int[] $optionIds
     * @return self
     */
    public function withOptionIds(array $optionIds): self
    {
        $payload = $this->payload;
        $payload['option_ids'] = $optionIds;
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
     * @return \Tarik02\Telegram\Collections\PollAnswerCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PollAnswerCollection
    {
        return \Tarik02\Telegram\Collections\PollAnswerCollection::make();
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
