<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class GetMyCommands
 *
 * Use this method to get the current list of the bot's commands for the given scope and user language. Returns Array of [BotCommand](https://core.telegram.org/bots/api/#botcommand) on success. If commands aren't set, an empty list is returned.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#getmycommands
 */
class GetMyCommands extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'getMyCommands';
    }

    /**
     * A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     *
     * @return \Tarik02\Telegram\Entities\BotCommandScope|null
     */
    public function scope(): ?\Tarik02\Telegram\Entities\BotCommandScope
    {
        if (($this->payload['scope'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\BotCommandScope::fromPayload($this->payload['scope']);
    }

    /**
     * A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     *
     * @param \Tarik02\Telegram\Entities\BotCommandScope|null $scope
     * @return self
     */
    public function withScope(?\Tarik02\Telegram\Entities\BotCommandScope $scope): self
    {
        $payload = $this->payload;
        if ($scope !== null) {
            $payload['scope'] = $scope->toPayload();
        } else {
            unset($payload['scope']);
        }
        return new self($payload);
    }

    /**
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @return string|null
     */
    public function languageCode(): ?string
    {
        return $this->payload['language_code'] ?? null;
    }

    /**
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @param string|null $languageCode
     * @return self
     */
    public function withLanguageCode(?string $languageCode): self
    {
        $payload = $this->payload;
        $payload['language_code'] = $languageCode;
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
     * @return \Tarik02\Telegram\Collections\BotCommandCollection
     */
    public static function createResponse($payload): \Tarik02\Telegram\Collections\BotCommandCollection
    {
        return \Tarik02\Telegram\Collections\BotCommandCollection::fromPayload($payload ?? []);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
