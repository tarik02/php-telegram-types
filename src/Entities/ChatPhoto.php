<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ChatPhoto
 *
 * This object represents a chat photo.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#chatphoto
 */
class ChatPhoto implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * File identifier of small (160x160) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @return string
     */
    public function smallFileId(): string
    {
        return $this->payload['small_file_id'];
    }

    /**
     * File identifier of small (160x160) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @param string $smallFileId
     * @return self
     */
    public function withSmallFileId(string $smallFileId): self
    {
        $payload = $this->payload;
        $payload['small_file_id'] = $smallFileId;
        return new self($payload);
    }

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string
     */
    public function smallFileUniqueId(): string
    {
        return $this->payload['small_file_unique_id'];
    }

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @param string $smallFileUniqueId
     * @return self
     */
    public function withSmallFileUniqueId(string $smallFileUniqueId): self
    {
        $payload = $this->payload;
        $payload['small_file_unique_id'] = $smallFileUniqueId;
        return new self($payload);
    }

    /**
     * File identifier of big (640x640) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @return string
     */
    public function bigFileId(): string
    {
        return $this->payload['big_file_id'];
    }

    /**
     * File identifier of big (640x640) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.
     *
     * @param string $bigFileId
     * @return self
     */
    public function withBigFileId(string $bigFileId): self
    {
        $payload = $this->payload;
        $payload['big_file_id'] = $bigFileId;
        return new self($payload);
    }

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @return string
     */
    public function bigFileUniqueId(): string
    {
        return $this->payload['big_file_unique_id'];
    }

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     *
     * @param string $bigFileUniqueId
     * @return self
     */
    public function withBigFileUniqueId(string $bigFileUniqueId): self
    {
        $payload = $this->payload;
        $payload['big_file_unique_id'] = $bigFileUniqueId;
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
     * @return \Tarik02\Telegram\Collections\ChatPhotoCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ChatPhotoCollection
    {
        return \Tarik02\Telegram\Collections\ChatPhotoCollection::make();
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
