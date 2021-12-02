<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class CreateChatInviteLink
 *
 * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method [revokeChatInviteLink](https://core.telegram.org/bots/api/#revokechatinvitelink). Returns the new invite link as [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#createchatinvitelink
 */
class CreateChatInviteLink extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'createChatInviteLink';
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
     * Invite link name; 0-32 characters
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->payload['name'] ?? null;
    }

    /**
     * Invite link name; 0-32 characters
     *
     * @param string|null $name
     * @return self
     */
    public function withName(?string $name): self
    {
        $payload = $this->payload;
        $payload['name'] = $name;
        return new self($payload);
    }

    /**
     * Point in time (Unix timestamp) when the link will expire
     *
     * @return int|null
     */
    public function expireDate(): ?int
    {
        return $this->payload['expire_date'] ?? null;
    }

    /**
     * Point in time (Unix timestamp) when the link will expire
     *
     * @param int|null $expireDate
     * @return self
     */
    public function withExpireDate(?int $expireDate): self
    {
        $payload = $this->payload;
        $payload['expire_date'] = $expireDate;
        return new self($payload);
    }

    /**
     * Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *
     * @return int|null
     */
    public function memberLimit(): ?int
    {
        return $this->payload['member_limit'] ?? null;
    }

    /**
     * Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *
     * @param int|null $memberLimit
     * @return self
     */
    public function withMemberLimit(?int $memberLimit): self
    {
        $payload = $this->payload;
        $payload['member_limit'] = $memberLimit;
        return new self($payload);
    }

    /**
     * *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     *
     * @return bool|null
     */
    public function createsJoinRequest(): bool
    {
        return $this->payload['creates_join_request'] ?? false;
    }

    /**
     * *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     *
     * @param bool|null $createsJoinRequest
     * @return self
     */
    public function withCreatesJoinRequest(bool $createsJoinRequest): self
    {
        $payload = $this->payload;
        $payload['creates_join_request'] = $createsJoinRequest;
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
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\ChatInviteLink
    {
        return \Tarik02\Telegram\Entities\ChatInviteLink::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
