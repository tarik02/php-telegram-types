<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PollOption
 *
 * This object contains information about one answer option in a poll.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#polloption
 */
class PollOption implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Option text, 1-100 characters
     *
     * @return string
     */
    public function text(): string
    {
        return $this->payload['text'];
    }

    /**
     * Option text, 1-100 characters
     *
     * @param string $text
     * @return self
     */
    public function withText(string $text): self
    {
        $payload = $this->payload;
        $payload['text'] = $text;
        return new self($payload);
    }

    /**
     * Number of users that voted for this option
     *
     * @return int
     */
    public function voterCount(): int
    {
        return $this->payload['voter_count'];
    }

    /**
     * Number of users that voted for this option
     *
     * @param int $voterCount
     * @return self
     */
    public function withVoterCount(int $voterCount): self
    {
        $payload = $this->payload;
        $payload['voter_count'] = $voterCount;
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
     * @return \Tarik02\Telegram\Collections\PollOptionCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PollOptionCollection
    {
        return \Tarik02\Telegram\Collections\PollOptionCollection::make();
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
