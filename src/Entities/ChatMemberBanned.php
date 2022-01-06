<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatMemberBanned
 *
 * Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatmemberbanned
 */
class ChatMemberBanned extends \Tarik02\Telegram\Entities\ChatMember implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * The member's status in the chat, always “kicked”
     *
     * @return string
     */
    public function status(): string
    {
        return $this->payload['status'];
    }

    /**
     * The member's status in the chat, always “kicked”
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
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
     *
     * @return int
     */
    public function untilDate(): int
    {
        return $this->payload['until_date'];
    }

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
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
     * @return \Tarik02\Telegram\Collections\ChatMemberBannedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatMemberBannedCollection
    {
        return \Tarik02\Telegram\Collections\ChatMemberBannedCollection::make();
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
