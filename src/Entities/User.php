<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class User
 *
 * This object represents a Telegram user or bot.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#user
 */
class User implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int
     */
    public function id(): int
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
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
     * True, if this user is a bot
     *
     * @return bool
     */
    public function isBot(): bool
    {
        return $this->payload['is_bot'] ?? false;
    }

    /**
     * True, if this user is a bot
     *
     * @param bool $isBot
     * @return self
     */
    public function withIsBot(bool $isBot): self
    {
        $payload = $this->payload;
        $payload['is_bot'] = $isBot;
        return new self($payload);
    }

    /**
     * User's or bot's first name
     *
     * @return string
     */
    public function firstName(): string
    {
        return $this->payload['first_name'];
    }

    /**
     * User's or bot's first name
     *
     * @param string $firstName
     * @return self
     */
    public function withFirstName(string $firstName): self
    {
        $payload = $this->payload;
        $payload['first_name'] = $firstName;
        return new self($payload);
    }

    /**
     * *Optional*. User's or bot's last name
     *
     * @return string|null
     */
    public function lastName(): ?string
    {
        return $this->payload['last_name'] ?? null;
    }

    /**
     * *Optional*. User's or bot's last name
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
     * *Optional*. User's or bot's username
     *
     * @return string|null
     */
    public function username(): ?string
    {
        return $this->payload['username'] ?? null;
    }

    /**
     * *Optional*. User's or bot's username
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
     * *Optional*. [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
     *
     * @return string|null
     */
    public function languageCode(): ?string
    {
        return $this->payload['language_code'] ?? null;
    }

    /**
     * *Optional*. [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
     *
     * @param string|null $languageCode
     * @return self
     */
    public function withLanguageCode(?string $languageCode): self
    {
        $payload = $this->payload;
        $payload['language_code'] = $languageCode;
        return new self($payload);
    }

    /**
     * *Optional*. True, if the bot can be invited to groups. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
     *
     * @return bool|null
     */
    public function canJoinGroups(): bool
    {
        return $this->payload['can_join_groups'] ?? false;
    }

    /**
     * *Optional*. True, if the bot can be invited to groups. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
     *
     * @param bool|null $canJoinGroups
     * @return self
     */
    public function withCanJoinGroups(bool $canJoinGroups): self
    {
        $payload = $this->payload;
        $payload['can_join_groups'] = $canJoinGroups;
        return new self($payload);
    }

    /**
     * *Optional*. True, if [privacy mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
     *
     * @return bool|null
     */
    public function canReadAllGroupMessages(): bool
    {
        return $this->payload['can_read_all_group_messages'] ?? false;
    }

    /**
     * *Optional*. True, if [privacy mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
     *
     * @param bool|null $canReadAllGroupMessages
     * @return self
     */
    public function withCanReadAllGroupMessages(bool $canReadAllGroupMessages): self
    {
        $payload = $this->payload;
        $payload['can_read_all_group_messages'] = $canReadAllGroupMessages;
        return new self($payload);
    }

    /**
     * *Optional*. True, if the bot supports inline queries. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
     *
     * @return bool|null
     */
    public function supportsInlineQueries(): bool
    {
        return $this->payload['supports_inline_queries'] ?? false;
    }

    /**
     * *Optional*. True, if the bot supports inline queries. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
     *
     * @param bool|null $supportsInlineQueries
     * @return self
     */
    public function withSupportsInlineQueries(bool $supportsInlineQueries): self
    {
        $payload = $this->payload;
        $payload['supports_inline_queries'] = $supportsInlineQueries;
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
     * @return \Tarik02\Telegram\Collections\UserCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\UserCollection
    {
        return \Tarik02\Telegram\Collections\UserCollection::make();
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
