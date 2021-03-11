<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaCollection
 *
 * @method InputMediaCollection push(\Tarik02\Telegram\Types\InputMedia $item)
 * @method \Tarik02\Telegram\Types\InputMedia get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMedia> getIterator()
 *
 * @method static InputMediaCollection make()
 * @method static InputMediaCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMedia
 */
final class InputMediaCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMedia
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMedia
    {
        return \Tarik02\Telegram\Types\InputMedia::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMedia
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMedia
    {
        return \Tarik02\Telegram\Types\InputMedia::fromPayload($payload);
    }
}
