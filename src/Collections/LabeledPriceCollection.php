<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class LabeledPriceCollection
 *
 * @method LabeledPriceCollection push(\Tarik02\Telegram\Types\LabeledPrice $item)
 * @method \Tarik02\Telegram\Types\LabeledPrice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\LabeledPrice> getIterator()
 *
 * @method static LabeledPriceCollection make()
 * @method static LabeledPriceCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\LabeledPrice
 */
final class LabeledPriceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\LabeledPrice
     */
    public static function makeItem(): \Tarik02\Telegram\Types\LabeledPrice
    {
        return \Tarik02\Telegram\Types\LabeledPrice::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\LabeledPrice
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\LabeledPrice
    {
        return \Tarik02\Telegram\Types\LabeledPrice::fromPayload($payload);
    }
}
