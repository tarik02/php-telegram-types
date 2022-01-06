<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class LoginUrlCollection
 *
 * @method LoginUrlCollection push(\Tarik02\Telegram\Entities\LoginUrl $item)
 * @method \Tarik02\Telegram\Entities\LoginUrl get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\LoginUrl> getIterator()
 *
 * @method static LoginUrlCollection make()
 * @method static LoginUrlCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\LoginUrl
 */
class LoginUrlCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\LoginUrl
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\LoginUrl
    {
        return \Tarik02\Telegram\Entities\LoginUrl::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\LoginUrl
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\LoginUrl
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\LoginUrl::fromPayload($payload);
    }
}
