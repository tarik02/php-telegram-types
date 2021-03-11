<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputLocationMessageContentCollection
 *
 * @method InputLocationMessageContentCollection push(\Tarik02\Telegram\Types\InputLocationMessageContent $item)
 * @method \Tarik02\Telegram\Types\InputLocationMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputLocationMessageContent> getIterator()
 *
 * @method static InputLocationMessageContentCollection make()
 * @method static InputLocationMessageContentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputLocationMessageContent
 */
final class InputLocationMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputLocationMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputLocationMessageContent
    {
        return \Tarik02\Telegram\Types\InputLocationMessageContent::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputLocationMessageContent
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputLocationMessageContent
    {
        return \Tarik02\Telegram\Types\InputLocationMessageContent::fromPayload($payload);
    }
}
