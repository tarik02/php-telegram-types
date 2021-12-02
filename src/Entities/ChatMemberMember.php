<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMemberMember
 *
 * Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that has no additional privileges or restrictions.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmembermember
 */
class ChatMemberMember implements \Tarik02\Telegram\Entities\ChatMember
{
    /**
     * The member's status in the chat, always “member”
     *
     * @return string
     */
    public function status(): string
    {
        return $this->payload['status'];
    }

    /**
     * The member's status in the chat, always “member”
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
     * @return \Tarik02\Telegram\Collections\ChatMemberMemberCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberMemberCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberMemberCollection::make();
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
