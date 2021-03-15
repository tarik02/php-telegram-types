<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Poll
 *
 * This object contains information about a poll.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#poll
 */
class Poll implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique poll identifier
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique poll identifier
     *
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $payload = $this->payload;
        $payload['id'] = $id;
        return new self($payload);
    }

    /**
     * Poll question, 1-300 characters
     *
     * @return string
     */
    public function question(): string
    {
        return $this->payload['question'];
    }

    /**
     * Poll question, 1-300 characters
     *
     * @param string $question
     * @return self
     */
    public function withQuestion(string $question): self
    {
        $payload = $this->payload;
        $payload['question'] = $question;
        return new self($payload);
    }

    /**
     * List of poll options
     *
     * @return \Tarik02\Telegram\Collections\PollOptionCollection
     */
    public function options(): \Tarik02\Telegram\Collections\PollOptionCollection
    {
        return \Tarik02\Telegram\Collections\PollOptionCollection::fromPayload($this->payload['options'] ?? []);
    }

    /**
     * List of poll options
     *
     * @param \Tarik02\Telegram\Collections\PollOptionCollection $options
     * @return self
     */
    public function withOptions(\Tarik02\Telegram\Collections\PollOptionCollection $options): self
    {
        $payload = $this->payload;
        $payload['options'] = $options->toPayload();
        return new self($payload);
    }

    /**
     * Total number of users that voted in the poll
     *
     * @return int
     */
    public function totalVoterCount(): int
    {
        return $this->payload['total_voter_count'];
    }

    /**
     * Total number of users that voted in the poll
     *
     * @param int $totalVoterCount
     * @return self
     */
    public function withTotalVoterCount(int $totalVoterCount): self
    {
        $payload = $this->payload;
        $payload['total_voter_count'] = $totalVoterCount;
        return new self($payload);
    }

    /**
     * True, if the poll is closed
     *
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->payload['is_closed'];
    }

    /**
     * True, if the poll is closed
     *
     * @param bool $isClosed
     * @return self
     */
    public function withIsClosed(bool $isClosed): self
    {
        $payload = $this->payload;
        $payload['is_closed'] = $isClosed;
        return new self($payload);
    }

    /**
     * True, if the poll is anonymous
     *
     * @return bool
     */
    public function isAnonymous(): bool
    {
        return $this->payload['is_anonymous'];
    }

    /**
     * True, if the poll is anonymous
     *
     * @param bool $isAnonymous
     * @return self
     */
    public function withIsAnonymous(bool $isAnonymous): self
    {
        $payload = $this->payload;
        $payload['is_anonymous'] = $isAnonymous;
        return new self($payload);
    }

    /**
     * Poll type, currently can be “regular” or “quiz”
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Poll type, currently can be “regular” or “quiz”
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * True, if the poll allows multiple answers
     *
     * @return bool
     */
    public function allowsMultipleAnswers(): bool
    {
        return $this->payload['allows_multiple_answers'];
    }

    /**
     * True, if the poll allows multiple answers
     *
     * @param bool $allowsMultipleAnswers
     * @return self
     */
    public function withAllowsMultipleAnswers(bool $allowsMultipleAnswers): self
    {
        $payload = $this->payload;
        $payload['allows_multiple_answers'] = $allowsMultipleAnswers;
        return new self($payload);
    }

    /**
     * *Optional*. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @return int|null
     */
    public function correctOptionId(): ?int
    {
        return $this->payload['correct_option_id'] ?? null;
    }

    /**
     * *Optional*. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @param int|null $correctOptionId
     * @return self
     */
    public function withCorrectOptionId(?int $correctOptionId): self
    {
        $payload = $this->payload;
        $payload['correct_option_id'] = $correctOptionId;
        return new self($payload);
    }

    /**
     * *Optional*. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     *
     * @return string|null
     */
    public function explanation(): ?string
    {
        return $this->payload['explanation'] ?? null;
    }

    /**
     * *Optional*. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
     *
     * @param string|null $explanation
     * @return self
     */
    public function withExplanation(?string $explanation): self
    {
        $payload = $this->payload;
        $payload['explanation'] = $explanation;
        return new self($payload);
    }

    /**
     * *Optional*. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function explanationEntities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['explanation_entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['explanation_entities'] ?? []);
    }

    /**
     * *Optional*. Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $explanationEntities
     * @return self
     */
    public function withExplanationEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $explanationEntities): self
    {
        $payload = $this->payload;
        if ($explanationEntities !== null) {
            $payload['explanation_entities'] = $explanationEntities->toPayload();
        } else {
            unset($payload['explanation_entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Amount of time in seconds the poll will be active after creation
     *
     * @return int|null
     */
    public function openPeriod(): ?int
    {
        return $this->payload['open_period'] ?? null;
    }

    /**
     * *Optional*. Amount of time in seconds the poll will be active after creation
     *
     * @param int|null $openPeriod
     * @return self
     */
    public function withOpenPeriod(?int $openPeriod): self
    {
        $payload = $this->payload;
        $payload['open_period'] = $openPeriod;
        return new self($payload);
    }

    /**
     * *Optional*. Point in time (Unix timestamp) when the poll will be automatically closed
     *
     * @return int|null
     */
    public function closeDate(): ?int
    {
        return $this->payload['close_date'] ?? null;
    }

    /**
     * *Optional*. Point in time (Unix timestamp) when the poll will be automatically closed
     *
     * @param int|null $closeDate
     * @return self
     */
    public function withCloseDate(?int $closeDate): self
    {
        $payload = $this->payload;
        $payload['close_date'] = $closeDate;
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
     * @return \Tarik02\Telegram\Collections\PollCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PollCollection
    {
        return \Tarik02\Telegram\Collections\PollCollection::make();
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
