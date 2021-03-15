<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMember
 *
 * This object contains information about one member of a chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmember
 */
class ChatMember implements \Tarik02\Telegram\Contracts\Payloadable
{
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
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
     *
     * @return string
     */
    public function status(): string
    {
        return $this->payload['status'];
    }

    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
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
     * *Optional*. Owner and administrators only. Custom title for this user
     *
     * @return string|null
     */
    public function customTitle(): ?string
    {
        return $this->payload['custom_title'] ?? null;
    }

    /**
     * *Optional*. Owner and administrators only. Custom title for this user
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
     * *Optional*. Owner and administrators only. True, if the user's presence in the chat is hidden
     *
     * @return bool|null
     */
    public function isAnonymous(): bool
    {
        return $this->payload['is_anonymous'] ?? false;
    }

    /**
     * *Optional*. Owner and administrators only. True, if the user's presence in the chat is hidden
     *
     * @param bool|null $isAnonymous
     * @return self
     */
    public function withIsAnonymous(bool $isAnonymous): self
    {
        $payload = $this->payload;
        $payload['is_anonymous'] = $isAnonymous;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @return bool|null
     */
    public function canBeEdited(): bool
    {
        return $this->payload['can_be_edited'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @param bool|null $canBeEdited
     * @return self
     */
    public function withCanBeEdited(bool $canBeEdited): self
    {
        $payload = $this->payload;
        $payload['can_be_edited'] = $canBeEdited;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     *
     * @return bool|null
     */
    public function canManageChat(): bool
    {
        return $this->payload['can_manage_chat'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     *
     * @param bool|null $canManageChat
     * @return self
     */
    public function withCanManageChat(bool $canManageChat): self
    {
        $payload = $this->payload;
        $payload['can_manage_chat'] = $canManageChat;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can post in the channel; channels only
     *
     * @return bool|null
     */
    public function canPostMessages(): bool
    {
        return $this->payload['can_post_messages'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can post in the channel; channels only
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
     * *Optional*. Administrators only. True, if the administrator can edit messages of other users and can pin messages; channels only
     *
     * @return bool|null
     */
    public function canEditMessages(): bool
    {
        return $this->payload['can_edit_messages'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can edit messages of other users and can pin messages; channels only
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
     * *Optional*. Administrators only. True, if the administrator can delete messages of other users
     *
     * @return bool|null
     */
    public function canDeleteMessages(): bool
    {
        return $this->payload['can_delete_messages'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can delete messages of other users
     *
     * @param bool|null $canDeleteMessages
     * @return self
     */
    public function withCanDeleteMessages(bool $canDeleteMessages): self
    {
        $payload = $this->payload;
        $payload['can_delete_messages'] = $canDeleteMessages;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can manage voice chats
     *
     * @return bool|null
     */
    public function canManageVoiceChats(): bool
    {
        return $this->payload['can_manage_voice_chats'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can manage voice chats
     *
     * @param bool|null $canManageVoiceChats
     * @return self
     */
    public function withCanManageVoiceChats(bool $canManageVoiceChats): self
    {
        $payload = $this->payload;
        $payload['can_manage_voice_chats'] = $canManageVoiceChats;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @return bool|null
     */
    public function canRestrictMembers(): bool
    {
        return $this->payload['can_restrict_members'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @param bool|null $canRestrictMembers
     * @return self
     */
    public function withCanRestrictMembers(bool $canRestrictMembers): self
    {
        $payload = $this->payload;
        $payload['can_restrict_members'] = $canRestrictMembers;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     *
     * @return bool|null
     */
    public function canPromoteMembers(): bool
    {
        return $this->payload['can_promote_members'] ?? false;
    }

    /**
     * *Optional*. Administrators only. True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
     *
     * @param bool|null $canPromoteMembers
     * @return self
     */
    public function withCanPromoteMembers(bool $canPromoteMembers): self
    {
        $payload = $this->payload;
        $payload['can_promote_members'] = $canPromoteMembers;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other settings
     *
     * @return bool|null
     */
    public function canChangeInfo(): bool
    {
        return $this->payload['can_change_info'] ?? false;
    }

    /**
     * *Optional*. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other settings
     *
     * @param bool|null $canChangeInfo
     * @return self
     */
    public function withCanChangeInfo(bool $canChangeInfo): self
    {
        $payload = $this->payload;
        $payload['can_change_info'] = $canChangeInfo;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
     *
     * @return bool|null
     */
    public function canInviteUsers(): bool
    {
        return $this->payload['can_invite_users'] ?? false;
    }

    /**
     * *Optional*. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
     *
     * @param bool|null $canInviteUsers
     * @return self
     */
    public function withCanInviteUsers(bool $canInviteUsers): self
    {
        $payload = $this->payload;
        $payload['can_invite_users'] = $canInviteUsers;
        return new self($payload);
    }

    /**
     * *Optional*. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
     *
     * @return bool|null
     */
    public function canPinMessages(): bool
    {
        return $this->payload['can_pin_messages'] ?? false;
    }

    /**
     * *Optional*. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
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
     * *Optional*. Restricted only. True, if the user is a member of the chat at the moment of the request
     *
     * @return bool|null
     */
    public function isMember(): bool
    {
        return $this->payload['is_member'] ?? false;
    }

    /**
     * *Optional*. Restricted only. True, if the user is a member of the chat at the moment of the request
     *
     * @param bool|null $isMember
     * @return self
     */
    public function withIsMember(bool $isMember): self
    {
        $payload = $this->payload;
        $payload['is_member'] = $isMember;
        return new self($payload);
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @return bool|null
     */
    public function canSendMessages(): bool
    {
        return $this->payload['can_send_messages'] ?? false;
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @param bool|null $canSendMessages
     * @return self
     */
    public function withCanSendMessages(bool $canSendMessages): self
    {
        $payload = $this->payload;
        $payload['can_send_messages'] = $canSendMessages;
        return new self($payload);
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     *
     * @return bool|null
     */
    public function canSendMediaMessages(): bool
    {
        return $this->payload['can_send_media_messages'] ?? false;
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
     *
     * @param bool|null $canSendMediaMessages
     * @return self
     */
    public function withCanSendMediaMessages(bool $canSendMediaMessages): self
    {
        $payload = $this->payload;
        $payload['can_send_media_messages'] = $canSendMediaMessages;
        return new self($payload);
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send polls
     *
     * @return bool|null
     */
    public function canSendPolls(): bool
    {
        return $this->payload['can_send_polls'] ?? false;
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send polls
     *
     * @param bool|null $canSendPolls
     * @return self
     */
    public function withCanSendPolls(bool $canSendPolls): self
    {
        $payload = $this->payload;
        $payload['can_send_polls'] = $canSendPolls;
        return new self($payload);
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @return bool|null
     */
    public function canSendOtherMessages(): bool
    {
        return $this->payload['can_send_other_messages'] ?? false;
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @param bool|null $canSendOtherMessages
     * @return self
     */
    public function withCanSendOtherMessages(bool $canSendOtherMessages): self
    {
        $payload = $this->payload;
        $payload['can_send_other_messages'] = $canSendOtherMessages;
        return new self($payload);
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to add web page previews to their messages
     *
     * @return bool|null
     */
    public function canAddWebPagePreviews(): bool
    {
        return $this->payload['can_add_web_page_previews'] ?? false;
    }

    /**
     * *Optional*. Restricted only. True, if the user is allowed to add web page previews to their messages
     *
     * @param bool|null $canAddWebPagePreviews
     * @return self
     */
    public function withCanAddWebPagePreviews(bool $canAddWebPagePreviews): self
    {
        $payload = $this->payload;
        $payload['can_add_web_page_previews'] = $canAddWebPagePreviews;
        return new self($payload);
    }

    /**
     * *Optional*. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     *
     * @return int|null
     */
    public function untilDate(): ?int
    {
        return $this->payload['until_date'] ?? null;
    }

    /**
     * *Optional*. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     *
     * @param int|null $untilDate
     * @return self
     */
    public function withUntilDate(?int $untilDate): self
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
     * @return \Tarik02\Telegram\Collections\ChatMemberCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberCollection::make();
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
