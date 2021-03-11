<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class EditMessageMedia
 *
 * Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded. Use a previously uploaded file via its file\_id or specify a URL. On success, if the edited message was sent by the bot, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#editmessagemedia
 */
class EditMessageMedia extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'editMessageMedia';
    }

    /**
     * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @return int|string|null
     */
    public function chatId()
    {
        return $this->payload['chat_id'] ?? null;
    }

    /**
     * Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @param int|string|null $chatId
     * @return self
     */
    public function withChatId($chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     *
     * @return int|null
     */
    public function messageId(): ?int
    {
        return $this->payload['message_id'] ?? null;
    }

    /**
     * Required if *inline\_message\_id* is not specified. Identifier of the message to edit
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
     * A JSON-serialized object for a new media content of the message
     *
     * @return \Tarik02\Telegram\Entities\InputMedia
     */
    public function media(): \Tarik02\Telegram\Entities\InputMedia
    {
        return \Tarik02\Telegram\Entities\InputMedia::fromPayload($this->payload['media']);
    }

    /**
     * A JSON-serialized object for a new media content of the message
     *
     * @param \Tarik02\Telegram\Entities\InputMedia $media
     * @return self
     */
    public function withMedia(\Tarik02\Telegram\Entities\InputMedia $media): self
    {
        $payload = $this->payload;
        $payload['media'] = $media->toPayload();
        return new self($payload);
    }

    /**
     * A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
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
     * A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
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
