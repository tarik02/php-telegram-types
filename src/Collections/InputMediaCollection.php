<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaCollection
 *
 * @method InputMediaCollection push(\Tarik02\Telegram\Entities\InputMedia $item)
 * @method \Tarik02\Telegram\Entities\InputMedia get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMedia> getIterator()
 *
 * @method static InputMediaCollection make()
 * @method static InputMediaCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMedia
 */
final class InputMediaCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMedia
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMedia
    {
        return \Tarik02\Telegram\Entities\InputMedia::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMedia
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMedia
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMedia::fromPayload($payload);
    }
}
