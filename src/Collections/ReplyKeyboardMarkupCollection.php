<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ReplyKeyboardMarkupCollection
 *
 * @method ReplyKeyboardMarkupCollection push(\Tarik02\Telegram\Entities\ReplyKeyboardMarkup $item)
 * @method \Tarik02\Telegram\Entities\ReplyKeyboardMarkup get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ReplyKeyboardMarkup> getIterator()
 *
 * @method static ReplyKeyboardMarkupCollection make()
 * @method static ReplyKeyboardMarkupCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ReplyKeyboardMarkup
 */
class ReplyKeyboardMarkupCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ReplyKeyboardMarkup
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ReplyKeyboardMarkup
    {
        return \Tarik02\Telegram\Entities\ReplyKeyboardMarkup::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ReplyKeyboardMarkup
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ReplyKeyboardMarkup
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ReplyKeyboardMarkup::fromPayload($payload);
    }
}
