<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMemberAdministrator
 *
 * Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that has some additional privileges.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmemberadministrator
 */
class ChatMemberAdministrator implements \Tarik02\Telegram\Entities\ChatMember
{
    /**
     * The member's status in the chat, always “administrator”
     *
     * @return string
     */
    public function status(): string
    {
        return $this->payload['status'];
    }

    /**
     * The member's status in the chat, always “administrator”
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
     * *True*, if the bot is allowed to edit administrator privileges of that user
     *
     * @return bool
     */
    public function canBeEdited(): bool
    {
        return $this->payload['can_be_edited'] ?? false;
    }

    /**
     * *True*, if the bot is allowed to edit administrator privileges of that user
     *
     * @param bool $canBeEdited
     * @return self
     */
    public function withCanBeEdited(bool $canBeEdited): self
    {
        $payload = $this->payload;
        $payload['can_be_edited'] = $canBeEdited;
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
     * *True*, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     *
     * @return bool
     */
    public function canManageChat(): bool
    {
        return $this->payload['can_manage_chat'] ?? false;
    }

    /**
     * *True*, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     *
     * @param bool $canManageChat
     * @return self
     */
    public function withCanManageChat(bool $canManageChat): self
    {
        $payload = $this->payload;
        $payload['can_manage_chat'] = $canManageChat;
        return new self($payload);
    }

    /**
     * *True*, if the administrator can delete messages of other users
     *
     * @return bool
     */
    public function canDeleteMessages(): bool
    {
        return $this->payload['can_delete_messages'] ?? false;
    }

    /**
     * *True*, if the administrator can delete messages of other users
     *
     * @param bool $canDeleteMessages
     * @return self
     */
    public function withCanDeleteMessages(bool $canDeleteMessages): self
    {
        $payload = $this->payload;
        $payload['can_delete_messages'] = $canDeleteMessages;
        return new self($payload);
    }

    /**
     * *True*, if the administrator can manage voice chats
     *
     * @return bool
     */
    public function canManageVoiceChats(): bool
    {
        return $this->payload['can_manage_voice_chats'] ?? false;
    }

    /**
     * *True*, if the administrator can manage voice chats
     *
     * @param bool $canManageVoiceChats
     * @return self
     */
    public function withCanManageVoiceChats(bool $canManageVoiceChats): self
    {
        $payload = $this->payload;
        $payload['can_manage_voice_chats'] = $canManageVoiceChats;
        return new self($payload);
    }

    /**
     * *True*, if the administrator can restrict, ban or unban chat members
     *
     * @return bool
     */
    public function canRestrictMembers(): bool
    {
        return $this->payload['can_restrict_members'] ?? false;
    }

    /**
     * *True*, if the administrator can restrict, ban or unban chat members
     *
     * @param bool $canRestrictMembers
     * @return self
     */
    public function withCanRestrictMembers(bool $canRestrictMembers): self
    {
        $payload = $this->payload;
        $payload['can_restrict_members'] = $canRestrictMembers;
        return new self($payload);
    }

    /**
     * *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     *
     * @return bool
     */
    public function canPromoteMembers(): bool
    {
        return $this->payload['can_promote_members'] ?? false;
    }

    /**
     * *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     *
     * @param bool $canPromoteMembers
     * @return self
     */
    public function withCanPromoteMembers(bool $canPromoteMembers): self
    {
        $payload = $this->payload;
        $payload['can_promote_members'] = $canPromoteMembers;
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
     * *Optional*. *True*, if the administrator can post in the channel; channels only
     *
     * @return bool|null
     */
    public function canPostMessages(): bool
    {
        return $this->payload['can_post_messages'] ?? false;
    }

    /**
     * *Optional*. *True*, if the administrator can post in the channel; channels only
     *
     * @param bool|null $canPostMessages
     * @return self
     */
    public function withCanPostMessages(bool $canPostMessages): self
    {
        $payload = $this->payload;
        $payload['can_post_messages'] = $canPostMessages;
        return new self($payload);
    }

    /**
     * *Optional*. *True*, if the administrator can edit messages of other users and can pin messages; channels only
     *
     * @return bool|null
     */
    public function canEditMessages(): bool
    {
        return $this->payload['can_edit_messages'] ?? false;
    }

    /**
     * *Optional*. *True*, if the administrator can edit messages of other users and can pin messages; channels only
     *
     * @param bool|null $canEditMessages
     * @return self
     */
    public function withCanEditMessages(bool $canEditMessages): self
    {
        $payload = $this->payload;
        $payload['can_edit_messages'] = $canEditMessages;
        return new self($payload);
    }

    /**
     * *Optional*. *True*, if the user is allowed to pin messages; groups and supergroups only
     *
     * @return bool|null
     */
    public function canPinMessages(): bool
    {
        return $this->payload['can_pin_messages'] ?? false;
    }

    /**
     * *Optional*. *True*, if the user is allowed to pin messages; groups and supergroups only
     *
     * @param bool|null $canPinMessages
     * @return self
     */
    public function withCanPinMessages(bool $canPinMessages): self
    {
        $payload = $this->payload;
        $payload['can_pin_messages'] = $canPinMessages;
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
     * @return \Tarik02\Telegram\Collections\ChatMemberAdministratorCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberAdministratorCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberAdministratorCollection::make();
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
