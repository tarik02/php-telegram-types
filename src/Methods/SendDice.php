<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendDice
 *
 * Use this method to send an animated emoji that will display a random value. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#senddice
 */
class SendDice extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'sendDice';
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
     * Emoji on which the dice throw animation is based. Currently, must be one of “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”, “<img alt="🎯" src="//telegram.org/img/emoji/40/F09F8EAF.png" height="20" width="20" />”, “<img alt="🏀" src="//telegram.org/img/emoji/40/F09F8F80.png" height="20" width="20" />”, “<img alt="⚽" src="//telegram.org/img/emoji/40/E29ABD.png" height="20" width="20" />”, “<img alt="🎳" src="//telegram.org/img/emoji/40/F09F8EB3.png" height="20" width="20" />”, or “<img alt="🎰" src="//telegram.org/img/emoji/40/F09F8EB0.png" height="20" width="20" />”. Dice can have values 1-6 for “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”, “<img alt="🎯" src="//telegram.org/img/emoji/40/F09F8EAF.png" height="20" width="20" />” and “<img alt="🎳" src="//telegram.org/img/emoji/40/F09F8EB3.png" height="20" width="20" />”, values 1-5 for “<img alt="🏀" src="//telegram.org/img/emoji/40/F09F8F80.png" height="20" width="20" />” and “<img alt="⚽" src="//telegram.org/img/emoji/40/E29ABD.png" height="20" width="20" />”, and values 1-64 for “<img alt="🎰" src="//telegram.org/img/emoji/40/F09F8EB0.png" height="20" width="20" />”. Defaults to “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”
     *
     * @return string|null
     */
    public function emoji(): ?string
    {
        return $this->payload['emoji'] ?? null;
    }

    /**
     * Emoji on which the dice throw animation is based. Currently, must be one of “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”, “<img alt="🎯" src="//telegram.org/img/emoji/40/F09F8EAF.png" height="20" width="20" />”, “<img alt="🏀" src="//telegram.org/img/emoji/40/F09F8F80.png" height="20" width="20" />”, “<img alt="⚽" src="//telegram.org/img/emoji/40/E29ABD.png" height="20" width="20" />”, “<img alt="🎳" src="//telegram.org/img/emoji/40/F09F8EB3.png" height="20" width="20" />”, or “<img alt="🎰" src="//telegram.org/img/emoji/40/F09F8EB0.png" height="20" width="20" />”. Dice can have values 1-6 for “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”, “<img alt="🎯" src="//telegram.org/img/emoji/40/F09F8EAF.png" height="20" width="20" />” and “<img alt="🎳" src="//telegram.org/img/emoji/40/F09F8EB3.png" height="20" width="20" />”, values 1-5 for “<img alt="🏀" src="//telegram.org/img/emoji/40/F09F8F80.png" height="20" width="20" />” and “<img alt="⚽" src="//telegram.org/img/emoji/40/E29ABD.png" height="20" width="20" />”, and values 1-64 for “<img alt="🎰" src="//telegram.org/img/emoji/40/F09F8EB0.png" height="20" width="20" />”. Defaults to “<img alt="🎲" src="//telegram.org/img/emoji/40/F09F8EB2.png" height="20" width="20" />”
     *
     * @param string|null $emoji
     * @return self
     */
    public function withEmoji(?string $emoji): self
    {
        $payload = $this->payload;
        $payload['emoji'] = $emoji;
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
