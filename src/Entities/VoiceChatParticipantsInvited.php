<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class VoiceChatParticipantsInvited
 *
 * This object represents a service message about new members invited to a voice chat.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#voicechatparticipantsinvited
 */
class VoiceChatParticipantsInvited implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * *Optional*. New members that were invited to the voice chat
     *
     * @return \Tarik02\Telegram\Collections\UserCollection|null
     */
    public function users(): \Tarik02\Telegram\Collections\UserCollection
    {
        if (($this->payload['users'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\UserCollection::fromPayload($this->payload['users'] ?? []);
    }

    /**
     * *Optional*. New members that were invited to the voice chat
     *
     * @param \Tarik02\Telegram\Collections\UserCollection|null $users
     * @return self
     */
    public function withUsers(\Tarik02\Telegram\Collections\UserCollection $users): self
    {
        $payload = $this->payload;
        if ($users !== null) {
            $payload['users'] = $users->toPayload();
        } else {
            unset($payload['users']);
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
     * @return \Tarik02\Telegram\Collections\VoiceChatParticipantsInvitedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\VoiceChatParticipantsInvitedCollection
    {
        return \Tarik02\Telegram\Collections\VoiceChatParticipantsInvitedCollection::make();
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
