<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class CallbackQuery
 *
 * This object represents an incoming callback query from a callback button in an [inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating). If the button that originated the query was attached to a message sent by the bot, the field *message* will be present. If the button was attached to a message sent via the bot (in [inline mode](https://core.telegram.org/bots/api/#inline-mode)), the field *inline\_message\_id* will be present. Exactly one of the fields *data* or *game\_short\_name* will be present.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#callbackquery
 */
class CallbackQuery implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique identifier for this query
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this query
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
     * Sender
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function from(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * Sender
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
     * *Optional*. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function message(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['message'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['message']);
    }

    /**
     * *Optional*. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
     *
     * @param \Tarik02\Telegram\Entities\Message|null $message
     * @return self
     */
    public function withMessage(?\Tarik02\Telegram\Entities\Message $message): self
    {
        $payload = $this->payload;
        if ($message !== null) {
            $payload['message'] = $message->toPayload();
        } else {
            unset($payload['message']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Identifier of the message sent via the bot in inline mode, that originated the query.
     *
     * @return string|null
     */
    public function inlineMessageId(): ?string
    {
        return $this->payload['inline_message_id'] ?? null;
    }

    /**
     * *Optional*. Identifier of the message sent via the bot in inline mode, that originated the query.
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
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](https://core.telegram.org/bots/api/#games).
     *
     * @return string
     */
    public function chatInstance(): string
    {
        return $this->payload['chat_instance'];
    }

    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](https://core.telegram.org/bots/api/#games).
     *
     * @param string $chatInstance
     * @return self
     */
    public function withChatInstance(string $chatInstance): self
    {
        $payload = $this->payload;
        $payload['chat_instance'] = $chatInstance;
        return new self($payload);
    }

    /**
     * *Optional*. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     *
     * @return string|null
     */
    public function data(): ?string
    {
        return $this->payload['data'] ?? null;
    }

    /**
     * *Optional*. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     *
     * @param string|null $data
     * @return self
     */
    public function withData(?string $data): self
    {
        $payload = $this->payload;
        $payload['data'] = $data;
        return new self($payload);
    }

    /**
     * *Optional*. Short name of a [Game](https://core.telegram.org/bots/api/#games) to be returned, serves as the unique identifier for the game
     *
     * @return string|null
     */
    public function gameShortName(): ?string
    {
        return $this->payload['game_short_name'] ?? null;
    }

    /**
     * *Optional*. Short name of a [Game](https://core.telegram.org/bots/api/#games) to be returned, serves as the unique identifier for the game
     *
     * @param string|null $gameShortName
     * @return self
     */
    public function withGameShortName(?string $gameShortName): self
    {
        $payload = $this->payload;
        $payload['game_short_name'] = $gameShortName;
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
     * @return \Tarik02\Telegram\Collections\CallbackQueryCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\CallbackQueryCollection
    {
        return \Tarik02\Telegram\Collections\CallbackQueryCollection::make();
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
