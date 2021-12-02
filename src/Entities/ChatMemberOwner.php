<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMemberOwner
 *
 * Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that owns the chat and has all administrator privileges.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmemberowner
 */
class ChatMemberOwner implements \Tarik02\Telegram\Entities\ChatMember
{
    /**
     * The member's status in the chat, always “creator”
     *
     * @return string
     */
    public function status(): string
    {
        return $this->payload['status'];
    }

    /**
     * The member's status in the chat, always “creator”
     *
     * @param string $status
     * @return self
     */
    public function withStatus(string $status): self
    {
        $payload = $this->payload;
        $payload['status'] = $status;
        return new self($payload);
    }

    /**
     * Information about the user
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function user(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['user']);
    }

    /**
     * Information about the user
     *
     * @param \Tarik02\Telegram\Entities\User $user
     * @return self
     */
    public function withUser(\Tarik02\Telegram\Entities\User $user): self
    {
        $payload = $this->payload;
        $payload['user'] = $user->toPayload();
        return new self($payload);
    }

    /**
     * *True*, if the user's presence in the chat is hidden
     *
     * @return bool
     */
    public function isAnonymous(): bool
    {
        return $this->payload['is_anonymous'] ?? false;
    }

    /**
     * *True*, if the user's presence in the chat is hidden
     *
     * @param bool $isAnonymous
     * @return self
     */
    public function withIsAnonymous(bool $isAnonymous): self
    {
        $payload = $this->payload;
        $payload['is_anonymous'] = $isAnonymous;
        return new self($payload);
    }

    /**
     * *Optional*. Custom title for this user
     *
     * @return string|null
     */
    public function customTitle(): ?string
    {
        return $this->payload['custom_title'] ?? null;
    }

    /**
     * *Optional*. Custom title for this user
     *
     * @param string|null $customTitle
     * @return self
     */
    public function withCustomTitle(?string $customTitle): self
    {
        $payload = $this->payload;
        $payload['custom_title'] = $customTitle;
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
     * @return \Tarik02\Telegram\Collections\ChatMemberOwnerCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberOwnerCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberOwnerCollection::make();
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
