<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResultArticle
 *
 * Represents a link to an article or web page.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresultarticle
 */
class InlineQueryResultArticle extends \Tarik02\Telegram\Entities\InlineQueryResult implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Type of the result, must be *article*
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the result, must be *article*
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
     * Unique identifier for this result, 1-64 Bytes
     *
     * @return string
     */
    public function id(): string
    {
        return $this->payload['id'];
    }

    /**
     * Unique identifier for this result, 1-64 Bytes
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
     * Title of the result
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Title of the result
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
     * Content of the message to be sent
     *
     * @return \Tarik02\Telegram\Entities\InputMessageContent
     */
    public function inputMessageContent(): \Tarik02\Telegram\Entities\InputMessageContent
    {
        return \Tarik02\Telegram\Entities\InputMessageContent::fromPayload($this->payload['input_message_content']);
    }

    /**
     * Content of the message to be sent
     *
     * @param \Tarik02\Telegram\Entities\InputMessageContent $inputMessageContent
     * @return self
     */
    public function withInputMessageContent(\Tarik02\Telegram\Entities\InputMessageContent $inputMessageContent): self
    {
        $payload = $this->payload;
        $payload['input_message_content'] = $inputMessageContent->toPayload();
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
     * *Optional*. URL of the result
     *
     * @return string|null
     */
    public function url(): ?string
    {
        return $this->payload['url'] ?? null;
    }

    /**
     * *Optional*. URL of the result
     *
     * @param string|null $url
     * @return self
     */
    public function withUrl(?string $url): self
    {
        $payload = $this->payload;
        $payload['url'] = $url;
        return new self($payload);
    }

    /**
     * *Optional*. Pass *True*, if you don't want the URL to be shown in the message
     *
     * @return bool|null
     */
    public function hideUrl(): bool
    {
        return $this->payload['hide_url'] ?? false;
    }

    /**
     * *Optional*. Pass *True*, if you don't want the URL to be shown in the message
     *
     * @param bool|null $hideUrl
     * @return self
     */
    public function withHideUrl(bool $hideUrl): self
    {
        $payload = $this->payload;
        $payload['hide_url'] = $hideUrl;
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
     * *Optional*. Url of the thumbnail for the result
     *
     * @return string|null
     */
    public function thumbUrl(): ?string
    {
        return $this->payload['thumb_url'] ?? null;
    }

    /**
     * *Optional*. Url of the thumbnail for the result
     *
     * @param string|null $thumbUrl
     * @return self
     */
    public function withThumbUrl(?string $thumbUrl): self
    {
        $payload = $this->payload;
        $payload['thumb_url'] = $thumbUrl;
        return new self($payload);
    }

    /**
     * *Optional*. Thumbnail width
     *
     * @return int|null
     */
    public function thumbWidth(): ?int
    {
        return $this->payload['thumb_width'] ?? null;
    }

    /**
     * *Optional*. Thumbnail width
     *
     * @param int|null $thumbWidth
     * @return self
     */
    public function withThumbWidth(?int $thumbWidth): self
    {
        $payload = $this->payload;
        $payload['thumb_width'] = $thumbWidth;
        return new self($payload);
    }

    /**
     * *Optional*. Thumbnail height
     *
     * @return int|null
     */
    public function thumbHeight(): ?int
    {
        return $this->payload['thumb_height'] ?? null;
    }

    /**
     * *Optional*. Thumbnail height
     *
     * @param int|null $thumbHeight
     * @return self
     */
    public function withThumbHeight(?int $thumbHeight): self
    {
        $payload = $this->payload;
        $payload['thumb_height'] = $thumbHeight;
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
     * @return \Tarik02\Telegram\Collections\InlineQueryResultArticleCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultArticleCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultArticleCollection::make();
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
