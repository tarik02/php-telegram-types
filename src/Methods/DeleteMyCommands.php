<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class DeleteMyCommands
 *
 * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](https://core.telegram.org/bots/api/#determining-list-of-commands) will be shown to affected users. Returns *True* on success.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#deletemycommands
 */
class DeleteMyCommands extends Method
{
    /**
     * @return string
     */
    public function methodName(): string
    {
        return 'deleteMyCommands';
    }

    /**
     * A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
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
     * A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
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
     * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     *
     * @return string|null
     */
    public function languageCode(): ?string
    {
        return $this->payload['language_code'] ?? null;
    }

    /**
     * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
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
