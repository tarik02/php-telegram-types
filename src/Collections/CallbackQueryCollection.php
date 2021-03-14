<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class CallbackQueryCollection
 *
 * @method CallbackQueryCollection push(\Tarik02\Telegram\Entities\CallbackQuery $item)
 * @method \Tarik02\Telegram\Entities\CallbackQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\CallbackQuery> getIterator()
 *
 * @method static CallbackQueryCollection make()
 * @method static CallbackQueryCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\CallbackQuery
 */
final class CallbackQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\CallbackQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\CallbackQuery
    {
        return \Tarik02\Telegram\Entities\CallbackQuery::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\CallbackQuery
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\CallbackQuery
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\CallbackQuery::fromPayload($payload);
    }
}
