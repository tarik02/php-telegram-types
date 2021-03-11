<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SetGameScore
 *
 * Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot, returns the edited [Message](https://core.telegram.org/bots/api/#message), otherwise returns *True*. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#setgamescore
 */
class SetGameScore extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'setGameScore';
    }

    /**
     * User identifier
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * User identifier
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
     * New score, must be non-negative
     *
     * @return int
     */
    public function score(): int
    {
        return $this->payload['score'];
    }

    /**
     * New score, must be non-negative
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
     * Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     *
     * @return bool|null
     */
    public function force(): ?bool
    {
        return $this->payload['force'] ?? null;
    }

    /**
     * Pass True, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     *
     * @param bool|null $force
     * @return self
     */
    public function withForce(?bool $force): self
    {
        $payload = $this->payload;
        $payload['force'] = $force;
        return new self($payload);
    }

    /**
     * Pass True, if the game message should not be automatically edited to include the current scoreboard
     *
     * @return bool|null
     */
    public function disableEditMessage(): ?bool
    {
        return $this->payload['disable_edit_message'] ?? null;
    }

    /**
     * Pass True, if the game message should not be automatically edited to include the current scoreboard
     *
     * @param bool|null $disableEditMessage
     * @return self
     */
    public function withDisableEditMessage(?bool $disableEditMessage): self
    {
        $payload = $this->payload;
        $payload['disable_edit_message'] = $disableEditMessage;
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
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public static function createResponse($payload)
    {
        $source = $payload;
        if (isset($source['message_id'])) {
            return \Tarik02\Telegram\Entities\Message::fromPayload($source);
        }

        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
