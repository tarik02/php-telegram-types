<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class LoginUrlCollection
 *
 * @method LoginUrlCollection push(\Tarik02\Telegram\Types\LoginUrl $item)
 * @method \Tarik02\Telegram\Types\LoginUrl get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\LoginUrl> getIterator()
 *
 * @method static LoginUrlCollection make()
 * @method static LoginUrlCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\LoginUrl
 */
final class LoginUrlCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\LoginUrl
     */
    public static function makeItem(): \Tarik02\Telegram\Types\LoginUrl
    {
        return \Tarik02\Telegram\Types\LoginUrl::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\LoginUrl
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\LoginUrl
    {
        return \Tarik02\Telegram\Types\LoginUrl::fromPayload($payload);
    }
}
