<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportDataCollection
 *
 * @method PassportDataCollection push(\Tarik02\Telegram\Types\PassportData $item)
 * @method \Tarik02\Telegram\Types\PassportData get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportData> getIterator()
 *
 * @method static PassportDataCollection make()
 * @method static PassportDataCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportData
 */
final class PassportDataCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportData
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportData
    {
        return \Tarik02\Telegram\Types\PassportData::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportData
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportData
    {
        return \Tarik02\Telegram\Types\PassportData::fromPayload($payload);
    }
}
