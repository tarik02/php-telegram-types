<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaVideoCollection
 *
 * @method InputMediaVideoCollection push(\Tarik02\Telegram\Entities\InputMediaVideo $item)
 * @method \Tarik02\Telegram\Entities\InputMediaVideo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMediaVideo> getIterator()
 *
 * @method static InputMediaVideoCollection make()
 * @method static InputMediaVideoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMediaVideo
 */
class InputMediaVideoCollection extends \Tarik02\Telegram\Collections\InputMediaCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMediaVideo
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMediaVideo
    {
        return \Tarik02\Telegram\Entities\InputMediaVideo::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMediaVideo
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMediaVideo
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMediaVideo::fromPayload($payload);
    }
}
