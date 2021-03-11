<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendVideoNote
 *
 * As of [v.4.0](https://telegram.org/blog/video-messages-and-telescope), Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#sendvideonote
 */
class SendVideoNote extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'sendVideoNote';
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
     * Video note to send. Pass a file\_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Sending video notes by a URL is currently unsupported
     *
     * @return \Tarik02\Telegram\Entities\InputFile|string
     */
    public function videoNote()
    {
        $source = $this->payload['video_note'];

        return $this->payload['video_note'];
    }

    /**
     * Video note to send. Pass a file\_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Sending video notes by a URL is currently unsupported
     *
     * @param \Tarik02\Telegram\Entities\InputFile|string $videoNote
     * @return self
     */
    public function withVideoNote($videoNote): self
    {
        $payload = $this->payload;
        if ($videoNote instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['video_note'] = $videoNote->toPayload();
        } elseif ($videoNote !== null) {
            $payload['video_note'] = $videoNote;
        } else {
            unset($payload['video_note']);
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
     * Video width and height, i.e. diameter of the video message
     *
     * @return int|null
     */
    public function length(): ?int
    {
        return $this->payload['length'] ?? null;
    }

    /**
     * Video width and height, i.e. diameter of the video message
     *
     * @param int|null $length
     * @return self
     */
    public function withLength(?int $length): self
    {
        $payload = $this->payload;
        $payload['length'] = $length;
        return new self($payload);
    }

    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file\_attach\_name>” if the thumbnail was uploaded using multipart/form-data under <file\_attach\_name>. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @return \Tarik02\Telegram\Entities\InputFile|string|null
     */
    public function thumb()
    {
        if (($this->payload['thumb'] ?? null) === null) {
            return null;
        }
        $source = $this->payload['thumb'];

        return $this->payload['thumb'];
    }

    /**
     * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file\_attach\_name>” if the thumbnail was uploaded using multipart/form-data under <file\_attach\_name>. [More info on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     *
     * @param \Tarik02\Telegram\Entities\InputFile|string|null $thumb
     * @return self
     */
    public function withThumb($thumb): self
    {
        $payload = $this->payload;
        if ($thumb instanceof \Tarik02\Telegram\Contracts\Payloadable) {
            $payload['thumb'] = $thumb->toPayload();
        } elseif ($thumb !== null) {
            $payload['thumb'] = $thumb;
        } else {
            unset($payload['thumb']);
        }
        return new self($payload);
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @return bool|null
     */
    public function disableNotification(): ?bool
    {
        return $this->payload['disable_notification'] ?? null;
    }

    /**
     * Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     *
     * @param bool|null $disableNotification
     * @return self
     */
    public function withDisableNotification(?bool $disableNotification): self
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
    public function allowSendingWithoutReply(): ?bool
    {
        return $this->payload['allow_sending_without_reply'] ?? null;
    }

    /**
     * Pass *True*, if the message should be sent even if the specified replied-to message is not found
     *
     * @param bool|null $allowSendingWithoutReply
     * @return self
     */
    public function withAllowSendingWithoutReply(?bool $allowSendingWithoutReply): self
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
