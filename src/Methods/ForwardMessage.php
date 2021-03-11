<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class ForwardMessage
 *
 * Use this method to forward messages of any kind. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#forwardmessage
 */
class ForwardMessage extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'forwardMessage';
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @param int|string $chatId
     * @return self
     */
    public function withChatId($chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     *
     * @return int|string
     */
    public function fromChatId()
    {
        return $this->payload['from_chat_id'];
    }

    /**
     * Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     *
     * @param int|string $fromChatId
     * @return self
     */
    public function withFromChatId($fromChatId): self
    {
        $payload = $this->payload;
        $payload['from_chat_id'] = $fromChatId;
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
     * Message identifier in the chat specified in *from\_chat\_id*
     *
     * @return int
     */
    public function messageId(): int
    {
        return $this->payload['message_id'];
    }

    /**
     * Message identifier in the chat specified in *from\_chat\_id*
     *
     * @param int $messageId
     * @return self
     */
    public function withMessageId(int $messageId): self
    {
        $payload = $this->payload;
        $payload['message_id'] = $messageId;
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
