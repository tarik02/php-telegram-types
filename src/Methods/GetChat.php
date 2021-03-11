<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetChat
 *
 * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a [Chat](https://core.telegram.org/bots/api/#chat) object on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getchat
 */
class GetChat extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'getChat';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
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
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\Chat
    {
        return \Tarik02\Telegram\Entities\Chat::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
