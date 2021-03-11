<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class CallbackQueryCollection
 *
 * @method CallbackQueryCollection push(\Tarik02\Telegram\Types\CallbackQuery $item)
 * @method \Tarik02\Telegram\Types\CallbackQuery get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\CallbackQuery> getIterator()
 *
 * @method static CallbackQueryCollection make()
 * @method static CallbackQueryCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\CallbackQuery
 */
final class CallbackQueryCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\CallbackQuery
     */
    public static function makeItem(): \Tarik02\Telegram\Types\CallbackQuery
    {
        return \Tarik02\Telegram\Types\CallbackQuery::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\CallbackQuery
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\CallbackQuery
    {
        return \Tarik02\Telegram\Types\CallbackQuery::fromPayload($payload);
    }
}
