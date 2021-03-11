<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ProximityAlertTriggeredCollection
 *
 * @method ProximityAlertTriggeredCollection push(\Tarik02\Telegram\Types\ProximityAlertTriggered $item)
 * @method \Tarik02\Telegram\Types\ProximityAlertTriggered get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ProximityAlertTriggered> getIterator()
 *
 * @method static ProximityAlertTriggeredCollection make()
 * @method static ProximityAlertTriggeredCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ProximityAlertTriggered
 */
final class ProximityAlertTriggeredCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ProximityAlertTriggered
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ProximityAlertTriggered
    {
        return \Tarik02\Telegram\Types\ProximityAlertTriggered::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ProximityAlertTriggered
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ProximityAlertTriggered
    {
        return \Tarik02\Telegram\Types\ProximityAlertTriggered::fromPayload($payload);
    }
}
