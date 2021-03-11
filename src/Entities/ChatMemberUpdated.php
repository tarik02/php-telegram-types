<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMemberUpdated
 *
 * This object represents changes in the status of a chat member.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmemberupdated
 */
class ChatMemberUpdated implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Chat the user belongs to
     *
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public function chat(): \Tarik02\Telegram\Entities\Chat
    {
        return \Tarik02\Telegram\Entities\Chat::fromPayload($this->payload['chat']);
    }

    /**
     * Chat the user belongs to
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
     * Performer of the action, which resulted in the change
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function from(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * Performer of the action, which resulted in the change
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
     * Date the change was done in Unix time
     *
     * @return int
     */
    public function date(): int
    {
        return $this->payload['date'];
    }

    /**
     * Date the change was done in Unix time
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
     * Previous information about the chat member
     *
     * @return \Tarik02\Telegram\Entities\ChatMember
     */
    public function oldChatMember(): \Tarik02\Telegram\Entities\ChatMember
    {
        return \Tarik02\Telegram\Entities\ChatMember::fromPayload($this->payload['old_chat_member']);
    }

    /**
     * Previous information about the chat member
     *
     * @param \Tarik02\Telegram\Entities\ChatMember $oldChatMember
     * @return self
     */
    public function withOldChatMember(\Tarik02\Telegram\Entities\ChatMember $oldChatMember): self
    {
        $payload = $this->payload;
        $payload['old_chat_member'] = $oldChatMember->toPayload();
        return new self($payload);
    }

    /**
     * New information about the chat member
     *
     * @return \Tarik02\Telegram\Entities\ChatMember
     */
    public function newChatMember(): \Tarik02\Telegram\Entities\ChatMember
    {
        return \Tarik02\Telegram\Entities\ChatMember::fromPayload($this->payload['new_chat_member']);
    }

    /**
     * New information about the chat member
     *
     * @param \Tarik02\Telegram\Entities\ChatMember $newChatMember
     * @return self
     */
    public function withNewChatMember(\Tarik02\Telegram\Entities\ChatMember $newChatMember): self
    {
        $payload = $this->payload;
        $payload['new_chat_member'] = $newChatMember->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
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
     * *Optional*. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
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
     * @return \Tarik02\Telegram\Collections\ChatMemberUpdatedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberUpdatedCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberUpdatedCollection::make();
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
