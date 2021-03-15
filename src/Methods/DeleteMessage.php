<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class DeleteMessage
 *
 * Use this method to delete a message, including service messages, with the following limitations:  
 * \- A message can only be deleted if it was sent less than 48 hours ago.  
 * \- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.  
 * \- Bots can delete outgoing messages in private chats, groups, and supergroups.  
 * \- Bots can delete incoming messages in private chats.  
 * \- Bots granted *can\_post\_messages* permissions can delete outgoing messages in channels.  
 * \- If the bot is an administrator of a group, it can delete any message there.  
 * \- If the bot has *can\_delete\_messages* permission in a supergroup or a channel, it can delete any message there.  
 * Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#deletemessage
 */
class DeleteMessage extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'deleteMessage';
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
     * Identifier of the message to delete
     *
     * @return int
     */
    public function messageId(): int
    {
        return $this->payload['message_id'];
    }

    /**
     * Identifier of the message to delete
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
