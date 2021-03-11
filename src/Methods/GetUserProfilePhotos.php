<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetUserProfilePhotos
 *
 * Use this method to get a list of profile pictures for a user. Returns a [UserProfilePhotos](https://core.telegram.org/bots/api/#userprofilephotos) object.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getuserprofilephotos
 */
class GetUserProfilePhotos extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'getUserProfilePhotos';
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
     * Sequential number of the first photo to be returned. By default, all photos are returned.
     *
     * @return int|null
     */
    public function offset(): ?int
    {
        return $this->payload['offset'] ?? null;
    }

    /**
     * Sequential number of the first photo to be returned. By default, all photos are returned.
     *
     * @param int|null $offset
     * @return self
     */
    public function withOffset(?int $offset): self
    {
        $payload = $this->payload;
        $payload['offset'] = $offset;
        return new self($payload);
    }

    /**
     * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @return int|null
     */
    public function limit(): ?int
    {
        return $this->payload['limit'] ?? null;
    }

    /**
     * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     *
     * @param int|null $limit
     * @return self
     */
    public function withLimit(?int $limit): self
    {
        $payload = $this->payload;
        $payload['limit'] = $limit;
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
     * @return \Tarik02\Telegram\Entities\UserProfilePhotos
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\UserProfilePhotos
    {
        return \Tarik02\Telegram\Entities\UserProfilePhotos::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
