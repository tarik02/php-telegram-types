<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class MaskPositionCollection
 *
 * @method MaskPositionCollection push(\Tarik02\Telegram\Entities\MaskPosition $item)
 * @method \Tarik02\Telegram\Entities\MaskPosition get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\MaskPosition> getIterator()
 *
 * @method static MaskPositionCollection make()
 * @method static MaskPositionCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\MaskPosition
 */
class MaskPositionCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\MaskPosition
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\MaskPosition
    {
        return \Tarik02\Telegram\Entities\MaskPosition::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\MaskPosition
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\MaskPosition
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\MaskPosition::fromPayload($payload);
    }
}
