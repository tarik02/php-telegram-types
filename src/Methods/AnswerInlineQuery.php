<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class AnswerInlineQuery
 *
 * Use this method to send answers to an inline query. On success, *True* is returned.  
 * No more than **50** results per query are allowed.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#answerinlinequery
 */
class AnswerInlineQuery extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'answerInlineQuery';
    }

    /**
     * Unique identifier for the answered query
     *
     * @return string
     */
    public function inlineQueryId(): string
    {
        return $this->payload['inline_query_id'];
    }

    /**
     * Unique identifier for the answered query
     *
     * @param string $inlineQueryId
     * @return self
     */
    public function withInlineQueryId(string $inlineQueryId): self
    {
        $payload = $this->payload;
        $payload['inline_query_id'] = $inlineQueryId;
        return new self($payload);
    }

    /**
     * A JSON-serialized array of results for the inline query
     *
     * @return \Tarik02\Telegram\Collections\InlineQueryResultCollection
     */
    public function results(): \Tarik02\Telegram\Collections\InlineQueryResultCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultCollection::fromPayload($this->payload['results'] ?? []);
    }

    /**
     * A JSON-serialized array of results for the inline query
     *
     * @param \Tarik02\Telegram\Collections\InlineQueryResultCollection $results
     * @return self
     */
    public function withResults(\Tarik02\Telegram\Collections\InlineQueryResultCollection $results): self
    {
        $payload = $this->payload;
        $payload['results'] = $results->toPayload();
        return new self($payload);
    }

    /**
     * The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     *
     * @return int|null
     */
    public function cacheTime(): ?int
    {
        return $this->payload['cache_time'] ?? null;
    }

    /**
     * The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
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
     * Pass *True*, if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query
     *
     * @return bool|null
     */
    public function isPersonal(): bool
    {
        return $this->payload['is_personal'] ?? false;
    }

    /**
     * Pass *True*, if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query
     *
     * @param bool|null $isPersonal
     * @return self
     */
    public function withIsPersonal(bool $isPersonal): self
    {
        $payload = $this->payload;
        $payload['is_personal'] = $isPersonal;
        return new self($payload);
    }

    /**
     * Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     *
     * @return string|null
     */
    public function nextOffset(): ?string
    {
        return $this->payload['next_offset'] ?? null;
    }

    /**
     * Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     *
     * @param string|null $nextOffset
     * @return self
     */
    public function withNextOffset(?string $nextOffset): self
    {
        $payload = $this->payload;
        $payload['next_offset'] = $nextOffset;
        return new self($payload);
    }

    /**
     * If passed, clients will display a button with specified text that switches the user to a private chat with the bot and sends the bot a start message with the parameter *switch\_pm\_parameter*
     *
     * @return string|null
     */
    public function switchPmText(): ?string
    {
        return $this->payload['switch_pm_text'] ?? null;
    }

    /**
     * If passed, clients will display a button with specified text that switches the user to a private chat with the bot and sends the bot a start message with the parameter *switch\_pm\_parameter*
     *
     * @param string|null $switchPmText
     * @return self
     */
    public function withSwitchPmText(?string $switchPmText): self
    {
        $payload = $this->payload;
        $payload['switch_pm_text'] = $switchPmText;
        return new self($payload);
    }

    /**
     * [Deep-linking](/bots#deep-linking) parameter for the /start message sent to the bot when user presses the switch button. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.  
     * 
     * *Example:* An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an oauth link. Once done, the bot can offer a [*switch\_inline*](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
     *
     * @return string|null
     */
    public function switchPmParameter(): ?string
    {
        return $this->payload['switch_pm_parameter'] ?? null;
    }

    /**
     * [Deep-linking](/bots#deep-linking) parameter for the /start message sent to the bot when user presses the switch button. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.  
     * 
     * *Example:* An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an oauth link. Once done, the bot can offer a [*switch\_inline*](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
     *
     * @param string|null $switchPmParameter
     * @return self
     */
    public function withSwitchPmParameter(?string $switchPmParameter): self
    {
        $payload = $this->payload;
        $payload['switch_pm_parameter'] = $switchPmParameter;
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
