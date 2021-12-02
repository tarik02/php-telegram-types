<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMemberRestricted
 *
 * Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that is under certain restrictions in the chat. Supergroups only.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmemberrestricted
 */
class ChatMemberRestricted implements \Tarik02\Telegram\Entities\ChatMember
{
    /**
     * The member's status in the chat, always “restricted”
     *
     * @return string
     */
    public function status(): string
    {
        return $this->payload['status'];
    }

    /**
     * The member's status in the chat, always “restricted”
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
     * *True*, if the user is a member of the chat at the moment of the request
     *
     * @return bool
     */
    public function isMember(): bool
    {
        return $this->payload['is_member'] ?? false;
    }

    /**
     * *True*, if the user is a member of the chat at the moment of the request
     *
     * @param bool $isMember
     * @return self
     */
    public function withIsMember(bool $isMember): self
    {
        $payload = $this->payload;
        $payload['is_member'] = $isMember;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to change the chat title, photo and other settings
     *
     * @return bool
     */
    public function canChangeInfo(): bool
    {
        return $this->payload['can_change_info'] ?? false;
    }

    /**
     * *True*, if the user is allowed to change the chat title, photo and other settings
     *
     * @param bool $canChangeInfo
     * @return self
     */
    public function withCanChangeInfo(bool $canChangeInfo): self
    {
        $payload = $this->payload;
        $payload['can_change_info'] = $canChangeInfo;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to invite new users to the chat
     *
     * @return bool
     */
    public function canInviteUsers(): bool
    {
        return $this->payload['can_invite_users'] ?? false;
    }

    /**
     * *True*, if the user is allowed to invite new users to the chat
     *
     * @param bool $canInviteUsers
     * @return self
     */
    public function withCanInviteUsers(bool $canInviteUsers): self
    {
        $payload = $this->payload;
        $payload['can_invite_users'] = $canInviteUsers;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to pin messages
     *
     * @return bool
     */
    public function canPinMessages(): bool
    {
        return $this->payload['can_pin_messages'] ?? false;
    }

    /**
     * *True*, if the user is allowed to pin messages
     *
     * @param bool $canPinMessages
     * @return self
     */
    public function withCanPinMessages(bool $canPinMessages): self
    {
        $payload = $this->payload;
        $payload['can_pin_messages'] = $canPinMessages;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @return bool
     */
    public function canSendMessages(): bool
    {
        return $this->payload['can_send_messages'] ?? false;
    }

    /**
     * *True*, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @param bool $canSendMessages
     * @return self
     */
    public function withCanSendMessages(bool $canSendMessages): self
    {
        $payload = $this->payload;
        $payload['can_send_messages'] = $canSendMessages;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     *
     * @return bool
     */
    public function canSendMediaMessages(): bool
    {
        return $this->payload['can_send_media_messages'] ?? false;
    }

    /**
     * *True*, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     *
     * @param bool $canSendMediaMessages
     * @return self
     */
    public function withCanSendMediaMessages(bool $canSendMediaMessages): self
    {
        $payload = $this->payload;
        $payload['can_send_media_messages'] = $canSendMediaMessages;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to send polls
     *
     * @return bool
     */
    public function canSendPolls(): bool
    {
        return $this->payload['can_send_polls'] ?? false;
    }

    /**
     * *True*, if the user is allowed to send polls
     *
     * @param bool $canSendPolls
     * @return self
     */
    public function withCanSendPolls(bool $canSendPolls): self
    {
        $payload = $this->payload;
        $payload['can_send_polls'] = $canSendPolls;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @return bool
     */
    public function canSendOtherMessages(): bool
    {
        return $this->payload['can_send_other_messages'] ?? false;
    }

    /**
     * *True*, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @param bool $canSendOtherMessages
     * @return self
     */
    public function withCanSendOtherMessages(bool $canSendOtherMessages): self
    {
        $payload = $this->payload;
        $payload['can_send_other_messages'] = $canSendOtherMessages;
        return new self($payload);
    }

    /**
     * *True*, if the user is allowed to add web page previews to their messages
     *
     * @return bool
     */
    public function canAddWebPagePreviews(): bool
    {
        return $this->payload['can_add_web_page_previews'] ?? false;
    }

    /**
     * *True*, if the user is allowed to add web page previews to their messages
     *
     * @param bool $canAddWebPagePreviews
     * @return self
     */
    public function withCanAddWebPagePreviews(bool $canAddWebPagePreviews): self
    {
        $payload = $this->payload;
        $payload['can_add_web_page_previews'] = $canAddWebPagePreviews;
        return new self($payload);
    }

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
     *
     * @return int
     */
    public function untilDate(): int
    {
        return $this->payload['until_date'];
    }

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
     *
     * @param int $untilDate
     * @return self
     */
    public function withUntilDate(int $untilDate): self
    {
        $payload = $this->payload;
        $payload['until_date'] = $untilDate;
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
     * @return \Tarik02\Telegram\Collections\ChatMemberRestrictedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberRestrictedCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberRestrictedCollection::make();
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
