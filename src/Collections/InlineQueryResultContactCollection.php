<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultContactCollection
 *
 * @method InlineQueryResultContactCollection push(\Tarik02\Telegram\Entities\InlineQueryResultContact $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultContact get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultContact> getIterator()
 *
 * @method static InlineQueryResultContactCollection make()
 * @method static InlineQueryResultContactCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultContact
 */
final class InlineQueryResultContactCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultContact
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultContact
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultContact::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultContact
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultContact
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultContact::fromPayload($payload);
    }
}
