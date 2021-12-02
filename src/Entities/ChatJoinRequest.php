<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatJoinRequest
 *
 * Represents a join request sent to a chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatjoinrequest
 */
class ChatJoinRequest implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Chat to which the request was sent
     *
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public function chat(): \Tarik02\Telegram\Entities\Chat
    {
        return \Tarik02\Telegram\Entities\Chat::fromPayload($this->payload['chat']);
    }

    /**
     * Chat to which the request was sent
     *
     * @param \Tarik02\Telegram\Entities\Chat $chat
     * @return self
     */
    public function withChat(\Tarik02\Telegram\Entities\Chat $chat): self
    {
        $payload = $this->payload;
        $payload['chat'] = $chat->toPayload();
        return new self($payload);
    }

    /**
     * User that sent the join request
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function from(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * User that sent the join request
     *
     * @param \Tarik02\Telegram\Entities\User $from
     * @return self
     */
    public function withFrom(\Tarik02\Telegram\Entities\User $from): self
    {
        $payload = $this->payload;
        $payload['from'] = $from->toPayload();
        return new self($payload);
    }

    /**
     * Date the request was sent in Unix time
     *
     * @return int
     */
    public function date(): int
    {
        return $this->payload['date'];
    }

    /**
     * Date the request was sent in Unix time
     *
     * @param int $date
     * @return self
     */
    public function withDate(int $date): self
    {
        $payload = $this->payload;
        $payload['date'] = $date;
        return new self($payload);
    }

    /**
     * *Optional*. Bio of the user.
     *
     * @return string|null
     */
    public function bio(): ?string
    {
        return $this->payload['bio'] ?? null;
    }

    /**
     * *Optional*. Bio of the user.
     *
     * @param string|null $bio
     * @return self
     */
    public function withBio(?string $bio): self
    {
        $payload = $this->payload;
        $payload['bio'] = $bio;
        return new self($payload);
    }

    /**
     * *Optional*. Chat invite link that was used by the user to send the join request
     *
     * @return \Tarik02\Telegram\Entities\ChatInviteLink|null
     */
    public function inviteLink(): ?\Tarik02\Telegram\Entities\ChatInviteLink
    {
        if (($this->payload['invite_link'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChatInviteLink::fromPayload($this->payload['invite_link']);
    }

    /**
     * *Optional*. Chat invite link that was used by the user to send the join request
     *
     * @param \Tarik02\Telegram\Entities\ChatInviteLink|null $inviteLink
     * @return self
     */
    public function withInviteLink(?\Tarik02\Telegram\Entities\ChatInviteLink $inviteLink): self
    {
        $payload = $this->payload;
        if ($inviteLink !== null) {
            $payload['invite_link'] = $inviteLink->toPayload();
        } else {
            unset($payload['invite_link']);
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
     * @return \Tarik02\Telegram\Collections\ChatJoinRequestCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatJoinRequestCollection
    {
        return \Tarik02\Telegram\Collections\ChatJoinRequestCollection::make();
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
