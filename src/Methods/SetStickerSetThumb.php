<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SetStickerSetThumb
 *
 * Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#setstickersetthumb
 */
class SetStickerSetThumb extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'setStickerSetThumb';
    }

    /**
     * Sticker set name
     *
     * @return string
     */
    public function name(): string
    {
        return $this->payload['name'];
    }

    /**
     * Sticker set name
     *
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $payload = $this->payload;
        $payload['name'] = $name;
        return new self($payload);
    }

    /**
     * User identifier of the sticker set owner
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * User identifier of the sticker set owner
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
     * A **PNG** image with the thumbnail, must be up to 128 kilobytes in size and have width and height exactly 100px, or a **TGS** animation with the thumbnail up to 32 kilobytes in size; see [https://core.telegram.org/animated\_stickers#technical-requirements](https://core.telegram.org/animated_stickers#technical-requirements) for animated sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Animated sticker set thumbnail can't be uploaded via HTTP URL.
     *
     * @return \Tarik02\Telegram\Entities\InputFile|string|null
     */
    public function thumb()
    {
        if (($this->payload['thumb'] ?? null) === null) {
            return null;
        }
        $source = $this->payload['thumb'];
        return \Tarik02\Telegram\Entities\InputFile::fromPayload($source);

        return $this->payload['thumb'];
    }

    /**
     * A **PNG** image with the thumbnail, must be up to 128 kilobytes in size and have width and height exactly 100px, or a **TGS** animation with the thumbnail up to 32 kilobytes in size; see [https://core.telegram.org/animated\_stickers#technical-requirements](https://core.telegram.org/animated_stickers#technical-requirements) for animated sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Animated sticker set thumbnail can't be uploaded via HTTP URL.
     *
     * @param \Tarik02\Telegram\Entities\InputFile|string|null $thumb
     * @return self
     */
    public function withThumb($thumb): self
    {
        $payload = $this->payload;
        if ($thumb instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['thumb'] = $thumb->toPayload();
        } elseif ($thumb instanceof \Tarik02\Telegram\Entities\InputFile) {
            $payload['thumb'] = $thumb->toPayload();
        } elseif ($thumb !== null) {
            $payload['thumb'] = $thumb;
        } else {
            unset($payload['thumb']);
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
