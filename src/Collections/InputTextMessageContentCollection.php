<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputTextMessageContentCollection
 *
 * @method InputTextMessageContentCollection push(\Tarik02\Telegram\Types\InputTextMessageContent $item)
 * @method \Tarik02\Telegram\Types\InputTextMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputTextMessageContent> getIterator()
 *
 * @method static InputTextMessageContentCollection make()
 * @method static InputTextMessageContentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputTextMessageContent
 */
final class InputTextMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputTextMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputTextMessageContent
    {
        return \Tarik02\Telegram\Types\InputTextMessageContent::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputTextMessageContent
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputTextMessageContent
    {
        return \Tarik02\Telegram\Types\InputTextMessageContent::fromPayload($payload);
    }
}
