<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PreCheckoutQueryCollection
 *
 * @method PreCheckoutQueryCollection push(\Tarik02\Telegram\Entities\PreCheckoutQuery $item)
 * @method \Tarik02\Telegram\Entities\PreCheckoutQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PreCheckoutQuery> getIterator()
 *
 * @method static PreCheckoutQueryCollection make()
 * @method static PreCheckoutQueryCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PreCheckoutQuery
 */
final class PreCheckoutQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PreCheckoutQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PreCheckoutQuery
    {
        return \Tarik02\Telegram\Entities\PreCheckoutQuery::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PreCheckoutQuery
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PreCheckoutQuery
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PreCheckoutQuery::fromPayload($payload);
    }
}
