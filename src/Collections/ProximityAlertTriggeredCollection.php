<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ProximityAlertTriggeredCollection
 *
 * @method ProximityAlertTriggeredCollection push(\Tarik02\Telegram\Entities\ProximityAlertTriggered $item)
 * @method \Tarik02\Telegram\Entities\ProximityAlertTriggered get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ProximityAlertTriggered> getIterator()
 *
 * @method static ProximityAlertTriggeredCollection make()
 * @method static ProximityAlertTriggeredCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ProximityAlertTriggered
 */
final class ProximityAlertTriggeredCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ProximityAlertTriggered
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ProximityAlertTriggered
    {
        return \Tarik02\Telegram\Entities\ProximityAlertTriggered::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ProximityAlertTriggered
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ProximityAlertTriggered
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ProximityAlertTriggered::fromPayload($payload);
    }
}
