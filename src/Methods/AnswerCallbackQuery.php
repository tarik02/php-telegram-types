<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class AnswerCallbackQuery
 *
 * Use this method to send answers to callback queries sent from [inline keyboards](/bots#inline-keyboards-and-on-the-fly-updating). The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, *True* is returned.
 * 
 * Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via [@Botfather](https://t.me/botfather) and accept the terms. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#answercallbackquery
 */
class AnswerCallbackQuery extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'answerCallbackQuery';
    }

    /**
     * Unique identifier for the query to be answered
     *
     * @return string
     */
    public function callbackQueryId(): string
    {
        return $this->payload['callback_query_id'];
    }

    /**
     * Unique identifier for the query to be answered
     *
     * @param string $callbackQueryId
     * @return self
     */
    public function withCallbackQueryId(string $callbackQueryId): self
    {
        $payload = $this->payload;
        $payload['callback_query_id'] = $callbackQueryId;
        return new self($payload);
    }

    /**
     * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     *
     * @return string|null
     */
    public function text(): ?string
    {
        return $this->payload['text'] ?? null;
    }

    /**
     * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     *
     * @param string|null $text
     * @return self
     */
    public function withText(?string $text): self
    {
        $payload = $this->payload;
        $payload['text'] = $text;
        return new self($payload);
    }

    /**
     * If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *false*.
     *
     * @return bool|null
     */
    public function showAlert(): bool
    {
        return $this->payload['show_alert'] ?? false;
    }

    /**
     * If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *false*.
     *
     * @param bool|null $showAlert
     * @return self
     */
    public function withShowAlert(bool $showAlert): self
    {
        $payload = $this->payload;
        $payload['show_alert'] = $showAlert;
        return new self($payload);
    }

    /**
     * URL that will be opened by the user's client. If you have created a [Game](https://core.telegram.org/bots/api/#game) and accepted the conditions via [@Botfather](https://t.me/botfather), specify the URL that opens your game — note that this will only work if the query comes from a [*callback\_game*](https://core.telegram.org/bots/api/#inlinekeyboardbutton) button.  
     * 
     * Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
     *
     * @return string|null
     */
    public function url(): ?string
    {
        return $this->payload['url'] ?? null;
    }

    /**
     * URL that will be opened by the user's client. If you have created a [Game](https://core.telegram.org/bots/api/#game) and accepted the conditions via [@Botfather](https://t.me/botfather), specify the URL that opens your game — note that this will only work if the query comes from a [*callback\_game*](https://core.telegram.org/bots/api/#inlinekeyboardbutton) button.  
     * 
     * Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
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
     * The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     *
     * @return int|null
     */
    public function cacheTime(): ?int
    {
        return $this->payload['cache_time'] ?? null;
    }

    /**
     * The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     *
     * @param int|null $cacheTime
     * @return self
     */
    public function withCacheTime(?int $cacheTime): self
    {
        $payload = $this->payload;
        $payload['cache_time'] = $cacheTime;
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
     * @return bool
     */
    public static function createResponse($payload): bool
    {
        return $payload ?? false;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
