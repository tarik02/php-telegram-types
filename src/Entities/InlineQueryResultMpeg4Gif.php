<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultMpeg4Gif
 *
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the animation.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultmpeg4gif
 */
class InlineQueryResultMpeg4Gif implements \Tarik02\Telegram\Entities\InlineQueryResult
{
    /**
     * Type of the result, must be *mpeg4\_gif*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *mpeg4\_gif*
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
     * Unique identifier for this result, 1-64 bytes
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this result, 1-64 bytes
     *
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $payload = $this->payload;
        $payload['id'] = $id;
        return new self($payload);
    }

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     *
     * @return string
     */
    public function mpeg4Url(): string
    {
        return $this->payload['mpeg4_url'];
    }

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     *
     * @param string $mpeg4Url
     * @return self
     */
    public function withMpeg4Url(string $mpeg4Url): self
    {
        $payload = $this->payload;
        $payload['mpeg4_url'] = $mpeg4Url;
        return new self($payload);
    }

    /**
     * *Optional*. Video width
     *
     * @return int|null
     */
    public function mpeg4Width(): ?int
    {
        return $this->payload['mpeg4_width'] ?? null;
    }

    /**
     * *Optional*. Video width
     *
     * @param int|null $mpeg4Width
     * @return self
     */
    public function withMpeg4Width(?int $mpeg4Width): self
    {
        $payload = $this->payload;
        $payload['mpeg4_width'] = $mpeg4Width;
        return new self($payload);
    }

    /**
     * *Optional*. Video height
     *
     * @return int|null
     */
    public function mpeg4Height(): ?int
    {
        return $this->payload['mpeg4_height'] ?? null;
    }

    /**
     * *Optional*. Video height
     *
     * @param int|null $mpeg4Height
     * @return self
     */
    public function withMpeg4Height(?int $mpeg4Height): self
    {
        $payload = $this->payload;
        $payload['mpeg4_height'] = $mpeg4Height;
        return new self($payload);
    }

    /**
     * *Optional*. Video duration in seconds
     *
     * @return int|null
     */
    public function mpeg4Duration(): ?int
    {
        return $this->payload['mpeg4_duration'] ?? null;
    }

    /**
     * *Optional*. Video duration in seconds
     *
     * @param int|null $mpeg4Duration
     * @return self
     */
    public function withMpeg4Duration(?int $mpeg4Duration): self
    {
        $payload = $this->payload;
        $payload['mpeg4_duration'] = $mpeg4Duration;
        return new self($payload);
    }

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     *
     * @return string
     */
    public function thumbUrl(): string
    {
        return $this->payload['thumb_url'];
    }

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     *
     * @param string $thumbUrl
     * @return self
     */
    public function withThumbUrl(string $thumbUrl): self
    {
        $payload = $this->payload;
        $payload['thumb_url'] = $thumbUrl;
        return new self($payload);
    }

    /**
     * *Optional*. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     *
     * @return string|null
     */
    public function thumbMimeType(): ?string
    {
        return $this->payload['thumb_mime_type'] ?? null;
    }

    /**
     * *Optional*. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     *
     * @param string|null $thumbMimeType
     * @return self
     */
    public function withThumbMimeType(?string $thumbMimeType): self
    {
        $payload = $this->payload;
        $payload['thumb_mime_type'] = $thumbMimeType;
        return new self($payload);
    }

    /**
     * *Optional*. Title for the result
     *
     * @return string|null
     */
    public function title(): ?string
    {
        return $this->payload['title'] ?? null;
    }

    /**
     * *Optional*. Title for the result
     *
     * @param string|null $title
     * @return self
     */
    public function withTitle(?string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * *Optional*. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * *Optional*. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
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
     * *Optional*. Mode for parsing entities in the caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function parseMode(): ?string
    {
        return $this->payload['parse_mode'] ?? null;
    }

    /**
     * *Optional*. Mode for parsing entities in the caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
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
     * *Optional*. [Inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null
     */
    public function replyMarkup(): ?\Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($this->payload['reply_markup']);
    }

    /**
     * *Optional*. [Inline keyboard](/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup(?\Tarik02\Telegram\Entities\InlineKeyboardMarkup $replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } else {
            unset($payload['reply_markup']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Content of the message to be sent instead of the video animation
     *
     * @return \Tarik02\Telegram\Entities\InputMessageContent|null
     */
    public function inputMessageContent(): ?\Tarik02\Telegram\Entities\InputMessageContent
    {
        if (($this->payload['input_message_content'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InputMessageContent::fromPayload($this->payload['input_message_content']);
    }

    /**
     * *Optional*. Content of the message to be sent instead of the video animation
     *
     * @param \Tarik02\Telegram\Entities\InputMessageContent|null $inputMessageContent
     * @return self
     */
    public function withInputMessageContent(?\Tarik02\Telegram\Entities\InputMessageContent $inputMessageContent): self
    {
        $payload = $this->payload;
        if ($inputMessageContent !== null) {
            $payload['input_message_content'] = $inputMessageContent->toPayload();
        } else {
            unset($payload['input_message_content']);
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultMpeg4GifCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultMpeg4GifCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultMpeg4GifCollection::make();
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
