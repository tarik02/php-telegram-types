<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaVideoCollection
 *
 * @method InputMediaVideoCollection push(\Tarik02\Telegram\Types\InputMediaVideo $item)
 * @method \Tarik02\Telegram\Types\InputMediaVideo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMediaVideo> getIterator()
 *
 * @method static InputMediaVideoCollection make()
 * @method static InputMediaVideoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMediaVideo
 */
final class InputMediaVideoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMediaVideo
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMediaVideo
    {
        return \Tarik02\Telegram\Types\InputMediaVideo::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMediaVideo
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMediaVideo
    {
        return \Tarik02\Telegram\Types\InputMediaVideo::fromPayload($payload);
    }
}
