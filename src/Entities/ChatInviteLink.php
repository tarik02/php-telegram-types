<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatInviteLink
 *
 * Represents an invite link for a chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatinvitelink
 */
class ChatInviteLink implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     *
     * @return string
     */
    public function inviteLink(): string
    {
        return $this->payload['invite_link'];
    }

    /**
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     *
     * @param string $inviteLink
     * @return self
     */
    public function withInviteLink(string $inviteLink): self
    {
        $payload = $this->payload;
        $payload['invite_link'] = $inviteLink;
        return new self($payload);
    }

    /**
     * Creator of the link
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function creator(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['creator']);
    }

    /**
     * Creator of the link
     *
     * @param \Tarik02\Telegram\Entities\User $creator
     * @return self
     */
    public function withCreator(\Tarik02\Telegram\Entities\User $creator): self
    {
        $payload = $this->payload;
        $payload['creator'] = $creator->toPayload();
        return new self($payload);
    }

    /**
     * *True*, if users joining the chat via the link need to be approved by chat administrators
     *
     * @return bool
     */
    public function createsJoinRequest(): bool
    {
        return $this->payload['creates_join_request'] ?? false;
    }

    /**
     * *True*, if users joining the chat via the link need to be approved by chat administrators
     *
     * @param bool $createsJoinRequest
     * @return self
     */
    public function withCreatesJoinRequest(bool $createsJoinRequest): self
    {
        $payload = $this->payload;
        $payload['creates_join_request'] = $createsJoinRequest;
        return new self($payload);
    }

    /**
     * *True*, if the link is primary
     *
     * @return bool
     */
    public function isPrimary(): bool
    {
        return $this->payload['is_primary'] ?? false;
    }

    /**
     * *True*, if the link is primary
     *
     * @param bool $isPrimary
     * @return self
     */
    public function withIsPrimary(bool $isPrimary): self
    {
        $payload = $this->payload;
        $payload['is_primary'] = $isPrimary;
        return new self($payload);
    }

    /**
     * *True*, if the link is revoked
     *
     * @return bool
     */
    public function isRevoked(): bool
    {
        return $this->payload['is_revoked'] ?? false;
    }

    /**
     * *True*, if the link is revoked
     *
     * @param bool $isRevoked
     * @return self
     */
    public function withIsRevoked(bool $isRevoked): self
    {
        $payload = $this->payload;
        $payload['is_revoked'] = $isRevoked;
        return new self($payload);
    }

    /**
     * *Optional*. Invite link name
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->payload['name'] ?? null;
    }

    /**
     * *Optional*. Invite link name
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
     * *Optional*. Point in time (Unix timestamp) when the link will expire or has been expired
     *
     * @return int|null
     */
    public function expireDate(): ?int
    {
        return $this->payload['expire_date'] ?? null;
    }

    /**
     * *Optional*. Point in time (Unix timestamp) when the link will expire or has been expired
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
     * *Optional*. Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     *
     * @return int|null
     */
    public function memberLimit(): ?int
    {
        return $this->payload['member_limit'] ?? null;
    }

    /**
     * *Optional*. Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
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
     * *Optional*. Number of pending join requests created using this link
     *
     * @return int|null
     */
    public function pendingJoinRequestCount(): ?int
    {
        return $this->payload['pending_join_request_count'] ?? null;
    }

    /**
     * *Optional*. Number of pending join requests created using this link
     *
     * @param int|null $pendingJoinRequestCount
     * @return self
     */
    public function withPendingJoinRequestCount(?int $pendingJoinRequestCount): self
    {
        $payload = $this->payload;
        $payload['pending_join_request_count'] = $pendingJoinRequestCount;
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
     * @return \Tarik02\Telegram\Collections\ChatInviteLinkCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatInviteLinkCollection
    {
        return \Tarik02\Telegram\Collections\ChatInviteLinkCollection::make();
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
