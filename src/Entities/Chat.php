<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Chat
 *
 * This object represents a chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chat
 */
class Chat implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int
     */
    public function id(): int
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @param int $id
     * @return self
     */
    public function withId(int $id): self
    {
        $payload = $this->payload;
        $payload['id'] = $id;
        return new self($payload);
    }

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * *Optional*. Title, for supergroups, channels and group chats
     *
     * @return string|null
     */
    public function title(): ?string
    {
        return $this->payload['title'] ?? null;
    }

    /**
     * *Optional*. Title, for supergroups, channels and group chats
     *
     * @param string|null $title
     * @return self
     */
    public function withTitle(?string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * *Optional*. Username, for private chats, supergroups and channels if available
     *
     * @return string|null
     */
    public function username(): ?string
    {
        return $this->payload['username'] ?? null;
    }

    /**
     * *Optional*. Username, for private chats, supergroups and channels if available
     *
     * @param string|null $username
     * @return self
     */
    public function withUsername(?string $username): self
    {
        $payload = $this->payload;
        $payload['username'] = $username;
        return new self($payload);
    }

    /**
     * *Optional*. First name of the other party in a private chat
     *
     * @return string|null
     */
    public function firstName(): ?string
    {
        return $this->payload['first_name'] ?? null;
    }

    /**
     * *Optional*. First name of the other party in a private chat
     *
     * @param string|null $firstName
     * @return self
     */
    public function withFirstName(?string $firstName): self
    {
        $payload = $this->payload;
        $payload['first_name'] = $firstName;
        return new self($payload);
    }

    /**
     * *Optional*. Last name of the other party in a private chat
     *
     * @return string|null
     */
    public function lastName(): ?string
    {
        return $this->payload['last_name'] ?? null;
    }

    /**
     * *Optional*. Last name of the other party in a private chat
     *
     * @param string|null $lastName
     * @return self
     */
    public function withLastName(?string $lastName): self
    {
        $payload = $this->payload;
        $payload['last_name'] = $lastName;
        return new self($payload);
    }

    /**
     * *Optional*. Chat photo. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return \Tarik02\Telegram\Entities\ChatPhoto|null
     */
    public function photo(): ?\Tarik02\Telegram\Entities\ChatPhoto
    {
        if (($this->payload['photo'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChatPhoto::fromPayload($this->payload['photo']);
    }

    /**
     * *Optional*. Chat photo. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param \Tarik02\Telegram\Entities\ChatPhoto|null $photo
     * @return self
     */
    public function withPhoto(?\Tarik02\Telegram\Entities\ChatPhoto $photo): self
    {
        $payload = $this->payload;
        if ($photo !== null) {
            $payload['photo'] = $photo->toPayload();
        } else {
            unset($payload['photo']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Bio of the other party in a private chat. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return string|null
     */
    public function bio(): ?string
    {
        return $this->payload['bio'] ?? null;
    }

    /**
     * *Optional*. Bio of the other party in a private chat. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
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
     * *Optional*. Description, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return $this->payload['description'] ?? null;
    }

    /**
     * *Optional*. Description, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param string|null $description
     * @return self
     */
    public function withDescription(?string $description): self
    {
        $payload = $this->payload;
        $payload['description'] = $description;
        return new self($payload);
    }

    /**
     * *Optional*. Primary invite link, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return string|null
     */
    public function inviteLink(): ?string
    {
        return $this->payload['invite_link'] ?? null;
    }

    /**
     * *Optional*. Primary invite link, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param string|null $inviteLink
     * @return self
     */
    public function withInviteLink(?string $inviteLink): self
    {
        $payload = $this->payload;
        $payload['invite_link'] = $inviteLink;
        return new self($payload);
    }

    /**
     * *Optional*. The most recent pinned message (by sending date). Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function pinnedMessage(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['pinned_message'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['pinned_message']);
    }

    /**
     * *Optional*. The most recent pinned message (by sending date). Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param \Tarik02\Telegram\Entities\Message|null $pinnedMessage
     * @return self
     */
    public function withPinnedMessage(?\Tarik02\Telegram\Entities\Message $pinnedMessage): self
    {
        $payload = $this->payload;
        if ($pinnedMessage !== null) {
            $payload['pinned_message'] = $pinnedMessage->toPayload();
        } else {
            unset($payload['pinned_message']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Default chat member permissions, for groups and supergroups. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return \Tarik02\Telegram\Entities\ChatPermissions|null
     */
    public function permissions(): ?\Tarik02\Telegram\Entities\ChatPermissions
    {
        if (($this->payload['permissions'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChatPermissions::fromPayload($this->payload['permissions']);
    }

    /**
     * *Optional*. Default chat member permissions, for groups and supergroups. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param \Tarik02\Telegram\Entities\ChatPermissions|null $permissions
     * @return self
     */
    public function withPermissions(?\Tarik02\Telegram\Entities\ChatPermissions $permissions): self
    {
        $payload = $this->payload;
        if ($permissions !== null) {
            $payload['permissions'] = $permissions->toPayload();
        } else {
            unset($payload['permissions']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return int|null
     */
    public function slowModeDelay(): ?int
    {
        return $this->payload['slow_mode_delay'] ?? null;
    }

    /**
     * *Optional*. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param int|null $slowModeDelay
     * @return self
     */
    public function withSlowModeDelay(?int $slowModeDelay): self
    {
        $payload = $this->payload;
        $payload['slow_mode_delay'] = $slowModeDelay;
        return new self($payload);
    }

    /**
     * *Optional*. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return int|null
     */
    public function messageAutoDeleteTime(): ?int
    {
        return $this->payload['message_auto_delete_time'] ?? null;
    }

    /**
     * *Optional*. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param int|null $messageAutoDeleteTime
     * @return self
     */
    public function withMessageAutoDeleteTime(?int $messageAutoDeleteTime): self
    {
        $payload = $this->payload;
        $payload['message_auto_delete_time'] = $messageAutoDeleteTime;
        return new self($payload);
    }

    /**
     * *Optional*. For supergroups, name of group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return string|null
     */
    public function stickerSetName(): ?string
    {
        return $this->payload['sticker_set_name'] ?? null;
    }

    /**
     * *Optional*. For supergroups, name of group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param string|null $stickerSetName
     * @return self
     */
    public function withStickerSetName(?string $stickerSetName): self
    {
        $payload = $this->payload;
        $payload['sticker_set_name'] = $stickerSetName;
        return new self($payload);
    }

    /**
     * *Optional*. *True*, if the bot can change the group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return bool|null
     */
    public function canSetStickerSet(): bool
    {
        return $this->payload['can_set_sticker_set'] ?? false;
    }

    /**
     * *Optional*. *True*, if the bot can change the group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param bool|null $canSetStickerSet
     * @return self
     */
    public function withCanSetStickerSet(bool $canSetStickerSet): self
    {
        $payload = $this->payload;
        $payload['can_set_sticker_set'] = $canSetStickerSet;
        return new self($payload);
    }

    /**
     * *Optional*. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return int|null
     */
    public function linkedChatId(): ?int
    {
        return $this->payload['linked_chat_id'] ?? null;
    }

    /**
     * *Optional*. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param int|null $linkedChatId
     * @return self
     */
    public function withLinkedChatId(?int $linkedChatId): self
    {
        $payload = $this->payload;
        $payload['linked_chat_id'] = $linkedChatId;
        return new self($payload);
    }

    /**
     * *Optional*. For supergroups, the location to which the supergroup is connected. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @return \Tarik02\Telegram\Entities\ChatLocation|null
     */
    public function location(): ?\Tarik02\Telegram\Entities\ChatLocation
    {
        if (($this->payload['location'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChatLocation::fromPayload($this->payload['location']);
    }

    /**
     * *Optional*. For supergroups, the location to which the supergroup is connected. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
     *
     * @param \Tarik02\Telegram\Entities\ChatLocation|null $location
     * @return self
     */
    public function withLocation(?\Tarik02\Telegram\Entities\ChatLocation $location): self
    {
        $payload = $this->payload;
        if ($location !== null) {
            $payload['location'] = $location->toPayload();
        } else {
            unset($payload['location']);
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
     * @return \Tarik02\Telegram\Collections\ChatCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatCollection
    {
        return \Tarik02\Telegram\Collections\ChatCollection::make();
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
