<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultGif
 *
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the animation.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultgif
 */
class InlineQueryResultGif implements \Tarik02\Telegram\Entities\InlineQueryResult
{
    /**
     * Type of the result, must be *gif*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *gif*
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
     * A valid URL for the GIF file. File size must not exceed 1MB
     *
     * @return string
     */
    public function gifUrl(): string
    {
        return $this->payload['gif_url'];
    }

    /**
     * A valid URL for the GIF file. File size must not exceed 1MB
     *
     * @param string $gifUrl
     * @return self
     */
    public function withGifUrl(string $gifUrl): self
    {
        $payload = $this->payload;
        $payload['gif_url'] = $gifUrl;
        return new self($payload);
    }

    /**
     * *Optional*. Width of the GIF
     *
     * @return int|null
     */
    public function gifWidth(): ?int
    {
        return $this->payload['gif_width'] ?? null;
    }

    /**
     * *Optional*. Width of the GIF
     *
     * @param int|null $gifWidth
     * @return self
     */
    public function withGifWidth(?int $gifWidth): self
    {
        $payload = $this->payload;
        $payload['gif_width'] = $gifWidth;
        return new self($payload);
    }

    /**
     * *Optional*. Height of the GIF
     *
     * @return int|null
     */
    public function gifHeight(): ?int
    {
        return $this->payload['gif_height'] ?? null;
    }

    /**
     * *Optional*. Height of the GIF
     *
     * @param int|null $gifHeight
     * @return self
     */
    public function withGifHeight(?int $gifHeight): self
    {
        $payload = $this->payload;
        $payload['gif_height'] = $gifHeight;
        return new self($payload);
    }

    /**
     * *Optional*. Duration of the GIF in seconds
     *
     * @return int|null
     */
    public function gifDuration(): ?int
    {
        return $this->payload['gif_duration'] ?? null;
    }

    /**
     * *Optional*. Duration of the GIF in seconds
     *
     * @param int|null $gifDuration
     * @return self
     */
    public function withGifDuration(?int $gifDuration): self
    {
        $payload = $this->payload;
        $payload['gif_duration'] = $gifDuration;
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
     * *Optional*. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * *Optional*. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
     * *Optional*. Content of the message to be sent instead of the GIF animation
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
     * *Optional*. Content of the message to be sent instead of the GIF animation
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultGifCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultGifCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultGifCollection::make();
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
