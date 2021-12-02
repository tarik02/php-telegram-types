<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultVideo
 *
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the video.
 * 
 * If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you **must** replace its content using *input\_message\_content*.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultvideo
 */
class InlineQueryResultVideo implements \Tarik02\Telegram\Entities\InlineQueryResult
{
    /**
     * Type of the result, must be *video*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *video*
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
     * A valid URL for the embedded video player or video file
     *
     * @return string
     */
    public function videoUrl(): string
    {
        return $this->payload['video_url'];
    }

    /**
     * A valid URL for the embedded video player or video file
     *
     * @param string $videoUrl
     * @return self
     */
    public function withVideoUrl(string $videoUrl): self
    {
        $payload = $this->payload;
        $payload['video_url'] = $videoUrl;
        return new self($payload);
    }

    /**
     * Mime type of the content of video url, “text/html” or “video/mp4”
     *
     * @return string
     */
    public function mimeType(): string
    {
        return $this->payload['mime_type'];
    }

    /**
     * Mime type of the content of video url, “text/html” or “video/mp4”
     *
     * @param string $mimeType
     * @return self
     */
    public function withMimeType(string $mimeType): self
    {
        $payload = $this->payload;
        $payload['mime_type'] = $mimeType;
        return new self($payload);
    }

    /**
     * URL of the thumbnail (JPEG only) for the video
     *
     * @return string
     */
    public function thumbUrl(): string
    {
        return $this->payload['thumb_url'];
    }

    /**
     * URL of the thumbnail (JPEG only) for the video
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
     * Title for the result
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Title for the result
     *
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * *Optional*. Caption of the video to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * *Optional*. Caption of the video to be sent, 0-1024 characters after entities parsing
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
     * *Optional*. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function parseMode(): ?string
    {
        return $this->payload['parse_mode'] ?? null;
    }

    /**
     * *Optional*. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
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
     * *Optional*. Video width
     *
     * @return int|null
     */
    public function videoWidth(): ?int
    {
        return $this->payload['video_width'] ?? null;
    }

    /**
     * *Optional*. Video width
     *
     * @param int|null $videoWidth
     * @return self
     */
    public function withVideoWidth(?int $videoWidth): self
    {
        $payload = $this->payload;
        $payload['video_width'] = $videoWidth;
        return new self($payload);
    }

    /**
     * *Optional*. Video height
     *
     * @return int|null
     */
    public function videoHeight(): ?int
    {
        return $this->payload['video_height'] ?? null;
    }

    /**
     * *Optional*. Video height
     *
     * @param int|null $videoHeight
     * @return self
     */
    public function withVideoHeight(?int $videoHeight): self
    {
        $payload = $this->payload;
        $payload['video_height'] = $videoHeight;
        return new self($payload);
    }

    /**
     * *Optional*. Video duration in seconds
     *
     * @return int|null
     */
    public function videoDuration(): ?int
    {
        return $this->payload['video_duration'] ?? null;
    }

    /**
     * *Optional*. Video duration in seconds
     *
     * @param int|null $videoDuration
     * @return self
     */
    public function withVideoDuration(?int $videoDuration): self
    {
        $payload = $this->payload;
        $payload['video_duration'] = $videoDuration;
        return new self($payload);
    }

    /**
     * *Optional*. Short description of the result
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return $this->payload['description'] ?? null;
    }

    /**
     * *Optional*. Short description of the result
     *
     * @param string|null $description
     * @return self
     */
    public function withDescription(?string $description): self
    {
        $payload = $this->payload;
        $payload['description'] = $description;
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
     * *Optional*. Content of the message to be sent instead of the video. This field is **required** if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
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
     * *Optional*. Content of the message to be sent instead of the video. This field is **required** if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultVideoCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultVideoCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultVideoCollection::make();
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
