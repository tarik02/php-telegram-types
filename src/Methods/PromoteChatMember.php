<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class PromoteChatMember
 *
 * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#promotechatmember
 */
class PromoteChatMember extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'promoteChatMember';
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
     * Pass *True*, if the administrator's presence in the chat is hidden
     *
     * @return bool|null
     */
    public function isAnonymous(): bool
    {
        return $this->payload['is_anonymous'] ?? false;
    }

    /**
     * Pass *True*, if the administrator's presence in the chat is hidden
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
     * Pass *True*, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     *
     * @return bool|null
     */
    public function canManageChat(): bool
    {
        return $this->payload['can_manage_chat'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
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
     * Pass *True*, if the administrator can create channel posts, channels only
     *
     * @return bool|null
     */
    public function canPostMessages(): bool
    {
        return $this->payload['can_post_messages'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can create channel posts, channels only
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
     * Pass *True*, if the administrator can edit messages of other users and can pin messages, channels only
     *
     * @return bool|null
     */
    public function canEditMessages(): bool
    {
        return $this->payload['can_edit_messages'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can edit messages of other users and can pin messages, channels only
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
     * Pass *True*, if the administrator can delete messages of other users
     *
     * @return bool|null
     */
    public function canDeleteMessages(): bool
    {
        return $this->payload['can_delete_messages'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can delete messages of other users
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
     * Pass *True*, if the administrator can manage voice chats
     *
     * @return bool|null
     */
    public function canManageVoiceChats(): bool
    {
        return $this->payload['can_manage_voice_chats'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can manage voice chats
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
     * Pass *True*, if the administrator can restrict, ban or unban chat members
     *
     * @return bool|null
     */
    public function canRestrictMembers(): bool
    {
        return $this->payload['can_restrict_members'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can restrict, ban or unban chat members
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
     * Pass *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
     *
     * @return bool|null
     */
    public function canPromoteMembers(): bool
    {
        return $this->payload['can_promote_members'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
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
     * Pass *True*, if the administrator can change chat title, photo and other settings
     *
     * @return bool|null
     */
    public function canChangeInfo(): bool
    {
        return $this->payload['can_change_info'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can change chat title, photo and other settings
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
     * Pass *True*, if the administrator can invite new users to the chat
     *
     * @return bool|null
     */
    public function canInviteUsers(): bool
    {
        return $this->payload['can_invite_users'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can invite new users to the chat
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
     * Pass *True*, if the administrator can pin messages, supergroups only
     *
     * @return bool|null
     */
    public function canPinMessages(): bool
    {
        return $this->payload['can_pin_messages'] ?? false;
    }

    /**
     * Pass *True*, if the administrator can pin messages, supergroups only
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
        return $payload ?? false;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
