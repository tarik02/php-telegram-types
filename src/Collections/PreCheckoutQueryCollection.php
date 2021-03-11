<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PreCheckoutQueryCollection
 *
 * @method PreCheckoutQueryCollection push(\Tarik02\Telegram\Types\PreCheckoutQuery $item)
 * @method \Tarik02\Telegram\Types\PreCheckoutQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PreCheckoutQuery> getIterator()
 *
 * @method static PreCheckoutQueryCollection make()
 * @method static PreCheckoutQueryCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PreCheckoutQuery
 */
final class PreCheckoutQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PreCheckoutQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PreCheckoutQuery
    {
        return \Tarik02\Telegram\Types\PreCheckoutQuery::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PreCheckoutQuery
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PreCheckoutQuery
    {
        return \Tarik02\Telegram\Types\PreCheckoutQuery::fromPayload($payload);
    }
}
