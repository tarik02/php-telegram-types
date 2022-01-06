<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultLocationCollection
 *
 * @method InlineQueryResultLocationCollection push(\Tarik02\Telegram\Entities\InlineQueryResultLocation $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultLocation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultLocation> getIterator()
 *
 * @method static InlineQueryResultLocationCollection make()
 * @method static InlineQueryResultLocationCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultLocation
 */
class InlineQueryResultLocationCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultLocation
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultLocation
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultLocation::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultLocation
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultLocation
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultLocation::fromPayload($payload);
    }
}
