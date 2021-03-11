<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendGame
 *
 * Use this method to send a game. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#sendgame
 */
class SendGame extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'sendGame';
    }

    /**
     * Unique identifier for the target chat
     *
     * @return int
     */
    public function chatId(): int
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat
     *
     * @param int $chatId
     * @return self
     */
    public function withChatId(int $chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * Short name of the game, serves as the unique identifier for the game. Set up your games via [Botfather](https://t.me/botfather).
     *
     * @return string
     */
    public function gameShortName(): string
    {
        return $this->payload['game_short_name'];
    }

    /**
     * Short name of the game, serves as the unique identifier for the game. Set up your games via [Botfather](https://t.me/botfather).
     *
     * @param string $gameShortName
     * @return self
     */
    public function withGameShortName(string $gameShortName): self
    {
        $payload = $this->payload;
        $payload['game_short_name'] = $gameShortName;
        return new self($payload);
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     */
    public function disableNotification(): ?bool
    {
        return $this->payload['disable_notification'] ?? null;
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @param bool|null $disableNotification
     * @return self
     */
    public function withDisableNotification(?bool $disableNotification): self
    {
        $payload = $this->payload;
        $payload['disable_notification'] = $disableNotification;
        return new self($payload);
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @return int|null
     */
    public function replyToMessageId(): ?int
    {
        return $this->payload['reply_to_message_id'] ?? null;
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @param int|null $replyToMessageId
     * @return self
     */
    public function withReplyToMessageId(?int $replyToMessageId): self
    {
        $payload = $this->payload;
        $payload['reply_to_message_id'] = $replyToMessageId;
        return new self($payload);
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @return bool|null
     */
    public function allowSendingWithoutReply(): ?bool
    {
        return $this->payload['allow_sending_without_reply'] ?? null;
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @param bool|null $allowSendingWithoutReply
     * @return self
     */
    public function withAllowSendingWithoutReply(?bool $allowSendingWithoutReply): self
    {
        $payload = $this->payload;
        $payload['allow_sending_without_reply'] = $allowSendingWithoutReply;
        return new self($payload);
    }

    /**
     * A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating). If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null
     */
    public function replyMarkup(): ?\Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($this->payload['reply_markup']);
    }

    /**
     * A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating). If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup(?\Tarik02\Telegram\Entities\InlineKeyboardMarkup $replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } else {
            unset($payload['reply_markup']);
        }
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
     * @return \Tarik02\Telegram\Entities\Message
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\Message
    {
        return \Tarik02\Telegram\Entities\Message::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
