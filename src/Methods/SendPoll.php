<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SendPoll
 *
 * Use this method to send a native poll. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#sendpoll
 */
class SendPoll extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'sendPoll';
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
     * Poll question, 1-300 characters
     *
     * @return string
     */
    public function question(): string
    {
        return $this->payload['question'];
    }

    /**
     * Poll question, 1-300 characters
     *
     * @param string $question
     * @return self
     */
    public function withQuestion(string $question): self
    {
        $payload = $this->payload;
        $payload['question'] = $question;
        return new self($payload);
    }

    /**
     * A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     *
     * @return string[]
     */
    public function options(): array
    {
        return $this->payload['options'];
    }

    /**
     * A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     *
     * @param string[] $options
     * @return self
     */
    public function withOptions(array $options): self
    {
        $payload = $this->payload;
        $payload['options'] = $options;
        return new self($payload);
    }

    /**
     * True, if the poll needs to be anonymous, defaults to *True*
     *
     * @return bool|null
     */
    public function isAnonymous(): bool
    {
        return $this->payload['is_anonymous'] ?? false;
    }

    /**
     * True, if the poll needs to be anonymous, defaults to *True*
     *
     * @param bool|null $isAnonymous
     * @return self
     */
    public function withIsAnonymous(bool $isAnonymous): self
    {
        $payload = $this->payload;
        $payload['is_anonymous'] = $isAnonymous;
        return new self($payload);
    }

    /**
     * Poll type, “quiz” or “regular”, defaults to “regular”
     *
     * @return string|null
     */
    public function type(): ?string
    {
        return $this->payload['type'] ?? null;
    }

    /**
     * Poll type, “quiz” or “regular”, defaults to “regular”
     *
     * @param string|null $type
     * @return self
     */
    public function withType(?string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
     *
     * @return bool|null
     */
    public function allowsMultipleAnswers(): bool
    {
        return $this->payload['allows_multiple_answers'] ?? false;
    }

    /**
     * True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
     *
     * @param bool|null $allowsMultipleAnswers
     * @return self
     */
    public function withAllowsMultipleAnswers(bool $allowsMultipleAnswers): self
    {
        $payload = $this->payload;
        $payload['allows_multiple_answers'] = $allowsMultipleAnswers;
        return new self($payload);
    }

    /**
     * 0-based identifier of the correct answer option, required for polls in quiz mode
     *
     * @return int|null
     */
    public function correctOptionId(): ?int
    {
        return $this->payload['correct_option_id'] ?? null;
    }

    /**
     * 0-based identifier of the correct answer option, required for polls in quiz mode
     *
     * @param int|null $correctOptionId
     * @return self
     */
    public function withCorrectOptionId(?int $correctOptionId): self
    {
        $payload = $this->payload;
        $payload['correct_option_id'] = $correctOptionId;
        return new self($payload);
    }

    /**
     * Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     *
     * @return string|null
     */
    public function explanation(): ?string
    {
        return $this->payload['explanation'] ?? null;
    }

    /**
     * Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     *
     * @param string|null $explanation
     * @return self
     */
    public function withExplanation(?string $explanation): self
    {
        $payload = $this->payload;
        $payload['explanation'] = $explanation;
        return new self($payload);
    }

    /**
     * Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function explanationParseMode(): ?string
    {
        return $this->payload['explanation_parse_mode'] ?? null;
    }

    /**
     * Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @param string|null $explanationParseMode
     * @return self
     */
    public function withExplanationParseMode(?string $explanationParseMode): self
    {
        $payload = $this->payload;
        $payload['explanation_parse_mode'] = $explanationParseMode;
        return new self($payload);
    }

    /**
     * List of special entities that appear in the poll explanation, which can be specified instead of *parse\_mode*
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function explanationEntities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['explanation_entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['explanation_entities'] ?? []);
    }

    /**
     * List of special entities that appear in the poll explanation, which can be specified instead of *parse\_mode*
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $explanationEntities
     * @return self
     */
    public function withExplanationEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $explanationEntities): self
    {
        $payload = $this->payload;
        if ($explanationEntities !== null) {
            $payload['explanation_entities'] = $explanationEntities->toPayload();
        } else {
            unset($payload['explanation_entities']);
        }
        return new self($payload);
    }

    /**
     * Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
     *
     * @return int|null
     */
    public function openPeriod(): ?int
    {
        return $this->payload['open_period'] ?? null;
    }

    /**
     * Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
     *
     * @param int|null $openPeriod
     * @return self
     */
    public function withOpenPeriod(?int $openPeriod): self
    {
        $payload = $this->payload;
        $payload['open_period'] = $openPeriod;
        return new self($payload);
    }

    /**
     * Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
     *
     * @return int|null
     */
    public function closeDate(): ?int
    {
        return $this->payload['close_date'] ?? null;
    }

    /**
     * Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
     *
     * @param int|null $closeDate
     * @return self
     */
    public function withCloseDate(?int $closeDate): self
    {
        $payload = $this->payload;
        $payload['close_date'] = $closeDate;
        return new self($payload);
    }

    /**
     * Pass *True*, if the poll needs to be immediately closed. This can be useful for poll preview.
     *
     * @return bool|null
     */
    public function isClosed(): bool
    {
        return $this->payload['is_closed'] ?? false;
    }

    /**
     * Pass *True*, if the poll needs to be immediately closed. This can be useful for poll preview.
     *
     * @param bool|null $isClosed
     * @return self
     */
    public function withIsClosed(bool $isClosed): self
    {
        $payload = $this->payload;
        $payload['is_closed'] = $isClosed;
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
