<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class RestrictChatMember
 *
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#restrictchatmember
 */
class RestrictChatMember extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'restrictChatMember';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
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
     * A JSON-serialized object for new user permissions
     *
     * @return \Tarik02\Telegram\Entities\ChatPermissions
     */
    public function permissions(): \Tarik02\Telegram\Entities\ChatPermissions
    {
        return \Tarik02\Telegram\Entities\ChatPermissions::fromPayload($this->payload['permissions']);
    }

    /**
     * A JSON-serialized object for new user permissions
     *
     * @param \Tarik02\Telegram\Entities\ChatPermissions $permissions
     * @return self
     */
    public function withPermissions(\Tarik02\Telegram\Entities\ChatPermissions $permissions): self
    {
        $payload = $this->payload;
        $payload['permissions'] = $permissions->toPayload();
        return new self($payload);
    }

    /**
     * Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     *
     * @return int|null
     */
    public function untilDate(): ?int
    {
        return $this->payload['until_date'] ?? null;
    }

    /**
     * Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
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
