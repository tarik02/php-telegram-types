<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class GameHighScore
 *
 * This object represents one row of the high scores table for a game.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#gamehighscore
 */
class GameHighScore implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Position in high score table for the game
     *
     * @return int
     */
    public function position(): int
    {
        return $this->payload['position'];
    }

    /**
     * Position in high score table for the game
     *
     * @param int $position
     * @return self
     */
    public function withPosition(int $position): self
    {
        $payload = $this->payload;
        $payload['position'] = $position;
        return new self($payload);
    }

    /**
     * User
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function user(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['user']);
    }

    /**
     * User
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
     * Score
     *
     * @return int
     */
    public function score(): int
    {
        return $this->payload['score'];
    }

    /**
     * Score
     *
     * @param int $score
     * @return self
     */
    public function withScore(int $score): self
    {
        $payload = $this->payload;
        $payload['score'] = $score;
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
     * @return \Tarik02\Telegram\Collections\GameHighScoreCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\GameHighScoreCollection
    {
        return \Tarik02\Telegram\Collections\GameHighScoreCollection::make();
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
