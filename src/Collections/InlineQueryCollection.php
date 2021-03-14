<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryCollection
 *
 * @method InlineQueryCollection push(\Tarik02\Telegram\Entities\InlineQuery $item)
 * @method \Tarik02\Telegram\Entities\InlineQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQuery> getIterator()
 *
 * @method static InlineQueryCollection make()
 * @method static InlineQueryCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQuery
 */
final class InlineQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQuery
    {
        return \Tarik02\Telegram\Entities\InlineQuery::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQuery
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQuery
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQuery::fromPayload($payload);
    }
}
