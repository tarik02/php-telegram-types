<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class MessageAutoDeleteTimerChanged
 *
 * This object represents a service message about a change in auto-delete timer settings.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#messageautodeletetimerchanged
 */
class MessageAutoDeleteTimerChanged implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * New auto-delete time for messages in the chat
     *
     * @return int
     */
    public function messageAutoDeleteTime(): int
    {
        return $this->payload['message_auto_delete_time'];
    }

    /**
     * New auto-delete time for messages in the chat
     *
     * @param int $messageAutoDeleteTime
     * @return self
     */
    public function withMessageAutoDeleteTime(int $messageAutoDeleteTime): self
    {
        $payload = $this->payload;
        $payload['message_auto_delete_time'] = $messageAutoDeleteTime;
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
     * @return \Tarik02\Telegram\Collections\MessageAutoDeleteTimerChangedCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\MessageAutoDeleteTimerChangedCollection
    {
        return \Tarik02\Telegram\Collections\MessageAutoDeleteTimerChangedCollection::make();
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
