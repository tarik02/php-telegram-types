<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatPermissions
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatpermissions
 */
class ChatPermissions implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * *Optional*. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @return bool|null
     */
    public function canSendMessages(): bool
    {
        return $this->payload['can_send_messages'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to send text messages, contacts, locations and venues
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
     * *Optional*. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can\_send\_messages
     *
     * @return bool|null
     */
    public function canSendMediaMessages(): bool
    {
        return $this->payload['can_send_media_messages'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can\_send\_messages
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
     * *Optional*. True, if the user is allowed to send polls, implies can\_send\_messages
     *
     * @return bool|null
     */
    public function canSendPolls(): bool
    {
        return $this->payload['can_send_polls'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to send polls, implies can\_send\_messages
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
     * *Optional*. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can\_send\_media\_messages
     *
     * @return bool|null
     */
    public function canSendOtherMessages(): bool
    {
        return $this->payload['can_send_other_messages'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can\_send\_media\_messages
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
     * *Optional*. True, if the user is allowed to add web page previews to their messages, implies can\_send\_media\_messages
     *
     * @return bool|null
     */
    public function canAddWebPagePreviews(): bool
    {
        return $this->payload['can_add_web_page_previews'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to add web page previews to their messages, implies can\_send\_media\_messages
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
     * *Optional*. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     *
     * @return bool|null
     */
    public function canChangeInfo(): bool
    {
        return $this->payload['can_change_info'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
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
     * *Optional*. True, if the user is allowed to invite new users to the chat
     *
     * @return bool|null
     */
    public function canInviteUsers(): bool
    {
        return $this->payload['can_invite_users'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to invite new users to the chat
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
     * *Optional*. True, if the user is allowed to pin messages. Ignored in public supergroups
     *
     * @return bool|null
     */
    public function canPinMessages(): bool
    {
        return $this->payload['can_pin_messages'] ?? false;
    }

    /**
     * *Optional*. True, if the user is allowed to pin messages. Ignored in public supergroups
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
     * @return \Tarik02\Telegram\Collections\ChatPermissionsCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatPermissionsCollection
    {
        return \Tarik02\Telegram\Collections\ChatPermissionsCollection::make();
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
