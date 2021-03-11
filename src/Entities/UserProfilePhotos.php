<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class UserProfilePhotos
 *
 * This object represent a user's profile pictures.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#userprofilephotos
 */
class UserProfilePhotos implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Total number of profile pictures the target user has
     *
     * @return int
     */
    public function totalCount(): int
    {
        return $this->payload['total_count'];
    }

    /**
     * Total number of profile pictures the target user has
     *
     * @param int $totalCount
     * @return self
     */
    public function withTotalCount(int $totalCount): self
    {
        $payload = $this->payload;
        $payload['total_count'] = $totalCount;
        return new self($payload);
    }

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollectionCollection
     */
    public function photos(): \Tarik02\Telegram\Collections\PhotoSizeCollectionCollection
    {
        return \Tarik02\Telegram\Collections\PhotoSizeCollectionCollection::fromPayload($this->payload['photos'] ?? []);
    }

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @param \Tarik02\Telegram\Collections\PhotoSizeCollectionCollection $photos
     * @return self
     */
    public function withPhotos(\Tarik02\Telegram\Collections\PhotoSizeCollectionCollection $photos): self
    {
        $payload = $this->payload;
        $payload['photos'] = $photos->toPayload();
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
     * @return \Tarik02\Telegram\Collections\UserProfilePhotosCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\UserProfilePhotosCollection
    {
        return \Tarik02\Telegram\Collections\UserProfilePhotosCollection::make();
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
