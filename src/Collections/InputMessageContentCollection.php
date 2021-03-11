<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMessageContentCollection
 *
 * @method InputMessageContentCollection push(\Tarik02\Telegram\Types\InputMessageContent $item)
 * @method \Tarik02\Telegram\Types\InputMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMessageContent> getIterator()
 *
 * @method static InputMessageContentCollection make()
 * @method static InputMessageContentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMessageContent
 */
final class InputMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMessageContent
    {
        return \Tarik02\Telegram\Types\InputMessageContent::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMessageContent
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMessageContent
    {
        return \Tarik02\Telegram\Types\InputMessageContent::fromPayload($payload);
    }
}
