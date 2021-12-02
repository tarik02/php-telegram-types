<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendVideo
 *
 * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as [Document](https://core.telegram.org/bots/api/#document)). On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#sendvideo
 */
class SendVideo extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'sendVideo';
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @param int|string $chatId
     * @return self
     */
    public function withChatId($chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * Video to send. Pass a file\_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @return \Tarik02\Telegram\Entities\InputFile|string
     */
    public function video()
    {
        $source = $this->payload['video'];
        return \Tarik02\Telegram\Entities\InputFile::fromPayload($source);

        return $this->payload['video'];
    }

    /**
     * Video to send. Pass a file\_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @param \Tarik02\Telegram\Entities\InputFile|string $video
     * @return self
     */
    public function withVideo($video): self
    {
        $payload = $this->payload;
        if ($video instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['video'] = $video->toPayload();
        } elseif ($video instanceof \Tarik02\Telegram\Entities\InputFile) {
            $payload['video'] = $video->toPayload();
        } elseif ($video !== null) {
            $payload['video'] = $video;
        } else {
            unset($payload['video']);
        }
        return new self($payload);
    }

    /**
     * Duration of sent video in seconds
     *
     * @return int|null
     */
    public function duration(): ?int
    {
        return $this->payload['duration'] ?? null;
    }

    /**
     * Duration of sent video in seconds
     *
     * @param int|null $duration
     * @return self
     */
    public function withDuration(?int $duration): self
    {
        $payload = $this->payload;
        $payload['duration'] = $duration;
        return new self($payload);
    }

    /**
     * Video width
     *
     * @return int|null
     */
    public function width(): ?int
    {
        return $this->payload['width'] ?? null;
    }

    /**
     * Video width
     *
     * @param int|null $width
     * @return self
     */
    public function withWidth(?int $width): self
    {
        $payload = $this->payload;
        $payload['width'] = $width;
        return new self($payload);
    }

    /**
     * Video height
     *
     * @return int|null
     */
    public function height(): ?int
    {
        return $this->payload['height'] ?? null;
    }

    /**
     * Video height
     *
     * @param int|null $height
     * @return self
     */
    public function withHeight(?int $height): self
    {
        $payload = $this->payload;
        $payload['height'] = $height;
        return new self($payload);
    }

    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
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
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
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
     * Video caption (may also be used when resending videos by *file\_id*), 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * Video caption (may also be used when resending videos by *file\_id*), 0-1024 characters after entities parsing
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
     * Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function parseMode(): ?string
    {
        return $this->payload['parse_mode'] ?? null;
    }

    /**
     * Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
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
     * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
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
     * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
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
     * Pass *True*, if the uploaded video is suitable for streaming
     *
     * @return bool|null
     */
    public function supportsStreaming(): bool
    {
        return $this->payload['supports_streaming'] ?? false;
    }

    /**
     * Pass *True*, if the uploaded video is suitable for streaming
     *
     * @param bool|null $supportsStreaming
     * @return self
     */
    public function withSupportsStreaming(bool $supportsStreaming): self
    {
        $payload = $this->payload;
        $payload['supports_streaming'] = $supportsStreaming;
        return new self($payload);
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     */
    public function disableNotification(): bool
    {
        return $this->payload['disable_notification'] ?? false;
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @param bool|null $disableNotification
     * @return self
     */
    public function withDisableNotification(bool $disableNotification): self
    {
        $payload = $this->payload;
        $payload['disable_notification'] = $disableNotification;
        return new self($payload);
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @return int|null
     */
    public function replyToMessageId(): ?int
    {
        return $this->payload['reply_to_message_id'] ?? null;
    }

    /**
     * If the message is a reply, ID of the original message
     *
     * @param int|null $replyToMessageId
     * @return self
     */
    public function withReplyToMessageId(?int $replyToMessageId): self
    {
        $payload = $this->payload;
        $payload['reply_to_message_id'] = $replyToMessageId;
        return new self($payload);
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @return bool|null
     */
    public function allowSendingWithoutReply(): bool
    {
        return $this->payload['allow_sending_without_reply'] ?? false;
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @param bool|null $allowSendingWithoutReply
     * @return self
     */
    public function withAllowSendingWithoutReply(bool $allowSendingWithoutReply): self
    {
        $payload = $this->payload;
        $payload['allow_sending_without_reply'] = $allowSendingWithoutReply;
        return new self($payload);
    }

    /**
     * Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardRemove|\Tarik02\Telegram\Entities\ForceReply|null
     */
    public function replyMarkup()
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        $source = $this->payload['reply_markup'];
        if (isset($source['inline_keyboard'])) {
            return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($source);
        }
        if (isset($source['keyboard'])) {
            return \Tarik02\Telegram\Entities\ReplyKeyboardMarkup::fromPayload($source);
        }
        if (isset($source['remove_keyboard'])) {
            return \Tarik02\Telegram\Entities\ReplyKeyboardRemove::fromPayload($source);
        }
        if (isset($source['force_reply'])) {
            return \Tarik02\Telegram\Entities\ForceReply::fromPayload($source);
        }

        return $this->payload['reply_markup'];
    }

    /**
     * Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardMarkup|\Tarik02\Telegram\Entities\ReplyKeyboardRemove|\Tarik02\Telegram\Entities\ForceReply|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup($replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } elseif ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup;
        } else {
            unset($payload['reply_markup']);
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
     * @return \Tarik02\Telegram\Entities\Message
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\Message
    {
        return \Tarik02\Telegram\Entities\Message::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
