<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandScopeCollection
 *
 * @method BotCommandScopeCollection push(\Tarik02\Telegram\Entities\BotCommandScope $item)
 * @method \Tarik02\Telegram\Entities\BotCommandScope get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommandScope> getIterator()
 *
 * @method static BotCommandScopeCollection make()
 * @method static BotCommandScopeCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommandScope
 */
final class BotCommandScopeCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommandScope
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommandScope
    {
        return \Tarik02\Telegram\Entities\BotCommandScope::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\BotCommandScope
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\BotCommandScope
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\BotCommandScope::fromPayload($payload);
    }
}
