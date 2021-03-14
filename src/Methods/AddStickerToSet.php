<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class AddStickerToSet
 *
 * Use this method to add a new sticker to a set created by the bot. You **must** use exactly one of the fields *png\_sticker* or *tgs\_sticker*. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#addstickertoset
 */
class AddStickerToSet extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'addStickerToSet';
    }

    /**
     * User identifier of sticker set owner
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * User identifier of sticker set owner
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
     * **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @return \Tarik02\Telegram\Entities\InputFile|string|null
     */
    public function pngSticker()
    {
        if (($this->payload['png_sticker'] ?? null) === null) {
            return null;
        }
        $source = $this->payload['png_sticker'];
        return \Tarik02\Telegram\Entities\InputFile::fromPayload($source);

        return $this->payload['png_sticker'];
    }

    /**
     * **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @param \Tarik02\Telegram\Entities\InputFile|string|null $pngSticker
     * @return self
     */
    public function withPngSticker($pngSticker): self
    {
        $payload = $this->payload;
        if ($pngSticker instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['png_sticker'] = $pngSticker->toPayload();
        } elseif ($pngSticker instanceof \Tarik02\Telegram\Entities\InputFile) {
            $payload['png_sticker'] = $pngSticker->toPayload();
        } elseif ($pngSticker !== null) {
            $payload['png_sticker'] = $pngSticker;
        } else {
            unset($payload['png_sticker']);
        }
        return new self($payload);
    }

    /**
     * **TGS** animation with the sticker, uploaded using multipart/form-data. See [](https://core.telegram.org/animated_stickers#technical-requirements)[https://core.telegram.org/animated\_stickers#technical-requirements](https://core.telegram.org/animated_stickers#technical-requirements) for technical requirements
     *
     * @return \Tarik02\Telegram\Entities\InputFile|null
     */
    public function tgsSticker(): ?\Tarik02\Telegram\Entities\InputFile
    {
        if (($this->payload['tgs_sticker'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InputFile::fromPayload($this->payload['tgs_sticker']);
    }

    /**
     * **TGS** animation with the sticker, uploaded using multipart/form-data. See [](https://core.telegram.org/animated_stickers#technical-requirements)[https://core.telegram.org/animated\_stickers#technical-requirements](https://core.telegram.org/animated_stickers#technical-requirements) for technical requirements
     *
     * @param \Tarik02\Telegram\Entities\InputFile|null $tgsSticker
     * @return self
     */
    public function withTgsSticker(?\Tarik02\Telegram\Entities\InputFile $tgsSticker): self
    {
        $payload = $this->payload;
        if ($tgsSticker !== null) {
            $payload['tgs_sticker'] = $tgsSticker->toPayload();
        } else {
            unset($payload['tgs_sticker']);
        }
        return new self($payload);
    }

    /**
     * One or more emoji corresponding to the sticker
     *
     * @return string
     */
    public function emojis(): string
    {
        return $this->payload['emojis'];
    }

    /**
     * One or more emoji corresponding to the sticker
     *
     * @param string $emojis
     * @return self
     */
    public function withEmojis(string $emojis): self
    {
        $payload = $this->payload;
        $payload['emojis'] = $emojis;
        return new self($payload);
    }

    /**
     * A JSON-serialized object for position where the mask should be placed on faces
     *
     * @return \Tarik02\Telegram\Entities\MaskPosition|null
     */
    public function maskPosition(): ?\Tarik02\Telegram\Entities\MaskPosition
    {
        if (($this->payload['mask_position'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\MaskPosition::fromPayload($this->payload['mask_position']);
    }

    /**
     * A JSON-serialized object for position where the mask should be placed on faces
     *
     * @param \Tarik02\Telegram\Entities\MaskPosition|null $maskPosition
     * @return self
     */
    public function withMaskPosition(?\Tarik02\Telegram\Entities\MaskPosition $maskPosition): self
    {
        $payload = $this->payload;
        if ($maskPosition !== null) {
            $payload['mask_position'] = $maskPosition->toPayload();
        } else {
            unset($payload['mask_position']);
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
        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
