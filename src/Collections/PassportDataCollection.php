<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportDataCollection
 *
 * @method PassportDataCollection push(\Tarik02\Telegram\Entities\PassportData $item)
 * @method \Tarik02\Telegram\Entities\PassportData get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportData> getIterator()
 *
 * @method static PassportDataCollection make()
 * @method static PassportDataCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportData
 */
class PassportDataCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportData
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportData
    {
        return \Tarik02\Telegram\Entities\PassportData::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportData
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportData
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportData::fromPayload($payload);
    }
}
