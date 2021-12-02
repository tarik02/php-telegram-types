<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeDefaultCollection
 *
 * @method BotCommandScopeDefaultCollection push(\Tarik02\Telegram\Entities\BotCommandScopeDefault $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScopeDefault get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScopeDefault> getIterator()
 *
 * @method static BotCommandScopeDefaultCollection make()
 * @method static BotCommandScopeDefaultCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScopeDefault
 */
final class BotCommandScopeDefaultCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScopeDefault
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScopeDefault
    {
        return \Tarik02\Telegram\Entities\BotCommandScopeDefault::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScopeDefault
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScopeDefault
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScopeDefault::fromPayload($payload);
    }
}
