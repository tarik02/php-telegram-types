<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ForceReply
 *
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice [privacy mode](/bots#privacy-mode).
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#forcereply
 */
class ForceReply implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     *
     * @return bool
     */
    public function forceReply(): bool
    {
        return $this->payload['force_reply'] ?? false;
    }

    /**
     * Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     *
     * @param bool $forceReply
     * @return self
     */
    public function withForceReply(bool $forceReply): self
    {
        $payload = $this->payload;
        $payload['force_reply'] = $forceReply;
        return new self($payload);
    }

    /**
     * *Optional*. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.
     *
     * @return bool|null
     */
    public function selective(): bool
    {
        return $this->payload['selective'] ?? false;
    }

    /**
     * *Optional*. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.
     *
     * @param bool|null $selective
     * @return self
     */
    public function withSelective(bool $selective): self
    {
        $payload = $this->payload;
        $payload['selective'] = $selective;
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
     * @return \Tarik02\Telegram\Collections\ForceReplyCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ForceReplyCollection
    {
        return \Tarik02\Telegram\Collections\ForceReplyCollection::make();
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
