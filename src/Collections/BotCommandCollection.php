<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class BotCommandCollection
 *
 * @method BotCommandCollection push(\Tarik02\Telegram\Entities\BotCommand $item)
 * @method \Tarik02\Telegram\Entities\BotCommand get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\BotCommand> getIterator()
 *
 * @method static BotCommandCollection make()
 * @method static BotCommandCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\BotCommand
 */
final class BotCommandCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\BotCommand
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\BotCommand
    {
        return \Tarik02\Telegram\Entities\BotCommand::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Entities\BotCommand
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Entities\BotCommand
    {
        return \Tarik02\Telegram\Entities\BotCommand::fromPayload($payload);
    }
}
