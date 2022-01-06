<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class LabeledPriceCollection
 *
 * @method LabeledPriceCollection push(\Tarik02\Telegram\Entities\LabeledPrice $item)
 * @method \Tarik02\Telegram\Entities\LabeledPrice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\LabeledPrice> getIterator()
 *
 * @method static LabeledPriceCollection make()
 * @method static LabeledPriceCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\LabeledPrice
 */
class LabeledPriceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\LabeledPrice
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\LabeledPrice
    {
        return \Tarik02\Telegram\Entities\LabeledPrice::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\LabeledPrice
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\LabeledPrice
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\LabeledPrice::fromPayload($payload);
    }
}
