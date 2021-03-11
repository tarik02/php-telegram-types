<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class KeyboardButtonPollType
 *
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#keyboardbuttonpolltype
 */
class KeyboardButtonPollType implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * *Optional*. If *quiz* is passed, the user will be allowed to create only polls in the quiz mode. If *regular* is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     *
     * @return string|null
     */
    public function type(): ?string
    {
        return $this->payload['type'] ?? null;
    }

    /**
     * *Optional*. If *quiz* is passed, the user will be allowed to create only polls in the quiz mode. If *regular* is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
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
     * @return \Tarik02\Telegram\Collections\KeyboardButtonPollTypeCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\KeyboardButtonPollTypeCollection
    {
        return \Tarik02\Telegram\Collections\KeyboardButtonPollTypeCollection::make();
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
