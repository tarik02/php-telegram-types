<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class UnbanChatSenderChat
 *
 * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#unbanchatsenderchat
 */
class UnbanChatSenderChat extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'unbanChatSenderChat';
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
     * Unique identifier of the target sender chat
     *
     * @return int
     */
    public function senderChatId(): int
    {
        return $this->payload['sender_chat_id'];
    }

    /**
     * Unique identifier of the target sender chat
     *
     * @param int $senderChatId
     * @return self
     */
    public function withSenderChatId(int $senderChatId): self
    {
        $payload = $this->payload;
        $payload['sender_chat_id'] = $senderChatId;
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
     * @return bool
     */
    public static function createResponse($payload): bool
    {
        return $payload ?? false;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
