<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class MessageEntity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#messageentity
 */
class MessageEntity implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Type of the entity. Can be “mention” (`@username`), “hashtag” (`#hashtag`), “cashtag” (`$USD`), “bot\_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone\_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), “text\_link” (for clickable text URLs), “text\_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions))
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Type of the entity. Can be “mention” (`@username`), “hashtag” (`#hashtag`), “cashtag” (`$USD`), “bot\_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone\_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), “text\_link” (for clickable text URLs), “text\_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions))
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
     * Offset in UTF-16 code units to the start of the entity
     *
     * @return int
     */
    public function offset(): int
    {
        return $this->payload['offset'];
    }

    /**
     * Offset in UTF-16 code units to the start of the entity
     *
     * @param int $offset
     * @return self
     */
    public function withOffset(int $offset): self
    {
        $payload = $this->payload;
        $payload['offset'] = $offset;
        return new self($payload);
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @return int
     */
    public function length(): int
    {
        return $this->payload['length'];
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param int $length
     * @return self
     */
    public function withLength(int $length): self
    {
        $payload = $this->payload;
        $payload['length'] = $length;
        return new self($payload);
    }

    /**
     * *Optional*. For “text\_link” only, url that will be opened after user taps on the text
     *
     * @return string|null
     */
    public function url(): ?string
    {
        return $this->payload['url'] ?? null;
    }

    /**
     * *Optional*. For “text\_link” only, url that will be opened after user taps on the text
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
     * *Optional*. For “text\_mention” only, the mentioned user
     *
     * @return \Tarik02\Telegram\Entities\User|null
     */
    public function user(): ?\Tarik02\Telegram\Entities\User
    {
        if (($this->payload['user'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['user']);
    }

    /**
     * *Optional*. For “text\_mention” only, the mentioned user
     *
     * @param \Tarik02\Telegram\Entities\User|null $user
     * @return self
     */
    public function withUser(?\Tarik02\Telegram\Entities\User $user): self
    {
        $payload = $this->payload;
        if ($user !== null) {
            $payload['user'] = $user->toPayload();
        } else {
            unset($payload['user']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. For “pre” only, the programming language of the entity text
     *
     * @return string|null
     */
    public function language(): ?string
    {
        return $this->payload['language'] ?? null;
    }

    /**
     * *Optional*. For “pre” only, the programming language of the entity text
     *
     * @param string|null $language
     * @return self
     */
    public function withLanguage(?string $language): self
    {
        $payload = $this->payload;
        $payload['language'] = $language;
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
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\MessageEntityCollection
    {
        return \Tarik02\Telegram\Collections\MessageEntityCollection::make();
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
