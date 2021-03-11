<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MaskPositionCollection
 *
 * @method MaskPositionCollection push(\Tarik02\Telegram\Types\MaskPosition $item)
 * @method \Tarik02\Telegram\Types\MaskPosition get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\MaskPosition> getIterator()
 *
 * @method static MaskPositionCollection make()
 * @method static MaskPositionCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\MaskPosition
 */
final class MaskPositionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\MaskPosition
     */
    public static function makeItem(): \Tarik02\Telegram\Types\MaskPosition
    {
        return \Tarik02\Telegram\Types\MaskPosition::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\MaskPosition
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\MaskPosition
    {
        return \Tarik02\Telegram\Types\MaskPosition::fromPayload($payload);
    }
}
