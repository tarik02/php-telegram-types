<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetGameHighScores
 *
 * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. On success, returns an *Array* of [GameHighScore](https://core.telegram.org/bots/api/#gamehighscore) objects.
 * 
 * This method will currently return scores for the target user, plus two of their closest neighbors on each side. Will also return the top three users if the user and his neighbors are not among them. Please note that this behavior is subject to change.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getgamehighscores
 */
class GetGameHighScores extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'getGameHighScores';
    }

    /**
     * Target user id
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * Target user id
     *
     * @param int $userId
     * @return self
     */
    public function withUserId(int $userId): self
    {
        $payload = $this->payload;
        $payload['user_id'] = $userId;
        return new self($payload);
    }

    /**
     * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     *
     * @return int|null
     */
    public function chatId(): ?int
    {
        return $this->payload['chat_id'] ?? null;
    }

    /**
     * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     *
     * @param int|null $chatId
     * @return self
     */
    public function withChatId(?int $chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * Required if *inline\_message\_id* is not specified. Identifier of the sent message
     *
     * @return int|null
     */
    public function messageId(): ?int
    {
        return $this->payload['message_id'] ?? null;
    }

    /**
     * Required if *inline\_message\_id* is not specified. Identifier of the sent message
     *
     * @param int|null $messageId
     * @return self
     */
    public function withMessageId(?int $messageId): self
    {
        $payload = $this->payload;
        $payload['message_id'] = $messageId;
        return new self($payload);
    }

    /**
     * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     *
     * @return string|null
     */
    public function inlineMessageId(): ?string
    {
        return $this->payload['inline_message_id'] ?? null;
    }

    /**
     * Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
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
     * @return \Tarik02\Telegram\Collections\GameHighScoreCollection
     */
    public static function createResponse($payload): \Tarik02\Telegram\Collections\GameHighScoreCollection
    {
        return \Tarik02\Telegram\Collections\GameHighScoreCollection::fromPayload($payload ?? []);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
