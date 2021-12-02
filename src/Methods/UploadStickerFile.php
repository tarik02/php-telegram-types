<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class UploadStickerFile
 *
 * Use this method to upload a .PNG file with a sticker for later use in *createNewStickerSet* and *addStickerToSet* methods (can be used multiple times). Returns the uploaded [File](https://core.telegram.org/bots/api/#file) on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#uploadstickerfile
 */
class UploadStickerFile extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'uploadStickerFile';
    }

    /**
     * User identifier of sticker file owner
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * User identifier of sticker file owner
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
     * **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @return \Tarik02\Telegram\Entities\InputFile
     */
    public function pngSticker(): \Tarik02\Telegram\Entities\InputFile
    {
        return \Tarik02\Telegram\Entities\InputFile::fromPayload($this->payload['png_sticker']);
    }

    /**
     * **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @param \Tarik02\Telegram\Entities\InputFile $pngSticker
     * @return self
     */
    public function withPngSticker(\Tarik02\Telegram\Entities\InputFile $pngSticker): self
    {
        $payload = $this->payload;
        $payload['png_sticker'] = $pngSticker->toPayload();
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
     * @return \Tarik02\Telegram\Entities\File
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\File
    {
        return \Tarik02\Telegram\Entities\File::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
