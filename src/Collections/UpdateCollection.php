<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class UpdateCollection
 *
 * @method UpdateCollection push(\Tarik02\Telegram\Entities\Update $item)
 * @method \Tarik02\Telegram\Entities\Update get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Update> getIterator()
 *
 * @method static UpdateCollection make()
 * @method static UpdateCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Update
 */
final class UpdateCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Update
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Update
    {
        return \Tarik02\Telegram\Entities\Update::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Entities\Update
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Entities\Update
    {
        return \Tarik02\Telegram\Entities\Update::fromPayload($payload);
    }
}
