<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputTextMessageContent
 *
 * Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a text message to be sent as the result of an inline query.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputtextmessagecontent
 */
class InputTextMessageContent extends \Tarik02\Telegram\Entities\InputMessageContent implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Text of the message to be sent, 1-4096 characters
     *
     * @return string
     */
    public function messageText(): string
    {
        return $this->payload['message_text'];
    }

    /**
     * Text of the message to be sent, 1-4096 characters
     *
     * @param string $messageText
     * @return self
     */
    public function withMessageText(string $messageText): self
    {
        $payload = $this->payload;
        $payload['message_text'] = $messageText;
        return new self($payload);
    }

    /**
     * *Optional*. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     *
     * @return string|null
     */
    public function parseMode(): ?string
    {
        return $this->payload['parse_mode'] ?? null;
    }

    /**
     * *Optional*. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
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
     * *Optional*. List of special entities that appear in message text, which can be specified instead of *parse\_mode*
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function entities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['entities'] ?? []);
    }

    /**
     * *Optional*. List of special entities that appear in message text, which can be specified instead of *parse\_mode*
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $entities
     * @return self
     */
    public function withEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $entities): self
    {
        $payload = $this->payload;
        if ($entities !== null) {
            $payload['entities'] = $entities->toPayload();
        } else {
            unset($payload['entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Disables link previews for links in the sent message
     *
     * @return bool|null
     */
    public function disableWebPagePreview(): bool
    {
        return $this->payload['disable_web_page_preview'] ?? false;
    }

    /**
     * *Optional*. Disables link previews for links in the sent message
     *
     * @param bool|null $disableWebPagePreview
     * @return self
     */
    public function withDisableWebPagePreview(bool $disableWebPagePreview): self
    {
        $payload = $this->payload;
        $payload['disable_web_page_preview'] = $disableWebPagePreview;
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
     * @return \Tarik02\Telegram\Collections\InputTextMessageContentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputTextMessageContentCollection
    {
        return \Tarik02\Telegram\Collections\InputTextMessageContentCollection::make();
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
