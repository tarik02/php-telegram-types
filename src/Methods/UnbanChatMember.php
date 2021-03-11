<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class UnbanChatMember
 *
 * Use this method to unban a previously kicked user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only\_if\_banned*. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#unbanchatmember
 */
class UnbanChatMember extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'unbanChatMember';
    }

    /**
     * Unique identifier for the target group or username of the target supergroup or channel (in the format `@username`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target group or username of the target supergroup or channel (in the format `@username`)
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
     * Unique identifier of the target user
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * Unique identifier of the target user
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
     * Do nothing if the user is not banned
     *
     * @return bool|null
     */
    public function onlyIfBanned(): ?bool
    {
        return $this->payload['only_if_banned'] ?? null;
    }

    /**
     * Do nothing if the user is not banned
     *
     * @param bool|null $onlyIfBanned
     * @return self
     */
    public function withOnlyIfBanned(?bool $onlyIfBanned): self
    {
        $payload = $this->payload;
        $payload['only_if_banned'] = $onlyIfBanned;
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
        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
