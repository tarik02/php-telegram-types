<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ProximityAlertTriggered
 *
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#proximityalerttriggered
 */
class ProximityAlertTriggered implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * User that triggered the alert
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function traveler(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['traveler']);
    }

    /**
     * User that triggered the alert
     *
     * @param \Tarik02\Telegram\Entities\User $traveler
     * @return self
     */
    public function withTraveler(\Tarik02\Telegram\Entities\User $traveler): self
    {
        $payload = $this->payload;
        $payload['traveler'] = $traveler->toPayload();
        return new self($payload);
    }

    /**
     * User that set the alert
     *
     * @return \Tarik02\Telegram\Entities\User
     */
    public function watcher(): \Tarik02\Telegram\Entities\User
    {
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['watcher']);
    }

    /**
     * User that set the alert
     *
     * @param \Tarik02\Telegram\Entities\User $watcher
     * @return self
     */
    public function withWatcher(\Tarik02\Telegram\Entities\User $watcher): self
    {
        $payload = $this->payload;
        $payload['watcher'] = $watcher->toPayload();
        return new self($payload);
    }

    /**
     * The distance between the users
     *
     * @return int
     */
    public function distance(): int
    {
        return $this->payload['distance'];
    }

    /**
     * The distance between the users
     *
     * @param int $distance
     * @return self
     */
    public function withDistance(int $distance): self
    {
        $payload = $this->payload;
        $payload['distance'] = $distance;
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
     * @return \Tarik02\Telegram\Collections\ProximityAlertTriggeredCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ProximityAlertTriggeredCollection
    {
        return \Tarik02\Telegram\Collections\ProximityAlertTriggeredCollection::make();
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
