<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputMediaDocument
 *
 * Represents a general file to be sent.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputmediadocument
 */
class InputMediaDocument implements \Tarik02\Telegram\Entities\InputMedia
{
    /**
     * Type of the result, must be *document*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *document*
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\_attach\_name\>” to upload a new one using multipart/form-data under \<file\_attach\_name\> name. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @return string
     */
    public function media(): string
    {
        return $this->payload['media'];
    }

    /**
     * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\_attach\_name\>” to upload a new one using multipart/form-data under \<file\_attach\_name\> name. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @param string $media
     * @return self
     */
    public function withMedia(string $media): self
    {
        $payload = $this->payload;
        $payload['media'] = $media;
        return new self($payload);
    }

    /**
     * *Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
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
     * *Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
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
     * *Optional*. Caption of the document to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * *Optional*. Caption of the document to be sent, 0-1024 characters after entities parsing
     *
     * @param string|null $caption
     * @return self
     */
    public function withCaption(?string $caption): self
    {
        $payload = $this->payload;
        $payload['caption'] = $caption;
        return new self($payload);
    }

    /**
     * *Optional*. Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function parseMode(): ?string
    {
        return $this->payload['parse_mode'] ?? null;
    }

    /**
     * *Optional*. Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @param string|null $parseMode
     * @return self
     */
    public function withParseMode(?string $parseMode): self
    {
        $payload = $this->payload;
        $payload['parse_mode'] = $parseMode;
        return new self($payload);
    }

    /**
     * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function captionEntities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['caption_entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['caption_entities'] ?? []);
    }

    /**
     * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $captionEntities
     * @return self
     */
    public function withCaptionEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $captionEntities): self
    {
        $payload = $this->payload;
        if ($captionEntities !== null) {
            $payload['caption_entities'] = $captionEntities->toPayload();
        } else {
            unset($payload['caption_entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always *True*, if the document is sent as part of an album.
     *
     * @return bool|null
     */
    public function disableContentTypeDetection(): bool
    {
        return $this->payload['disable_content_type_detection'] ?? false;
    }

    /**
     * *Optional*. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always *True*, if the document is sent as part of an album.
     *
     * @param bool|null $disableContentTypeDetection
     * @return self
     */
    public function withDisableContentTypeDetection(bool $disableContentTypeDetection): self
    {
        $payload = $this->payload;
        $payload['disable_content_type_detection'] = $disableContentTypeDetection;
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
     * @return \Tarik02\Telegram\Collections\InputMediaDocumentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputMediaDocumentCollection
    {
        return \Tarik02\Telegram\Collections\InputMediaDocumentCollection::make();
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
