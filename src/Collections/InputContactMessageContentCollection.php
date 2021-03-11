<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputContactMessageContentCollection
 *
 * @method InputContactMessageContentCollection push(\Tarik02\Telegram\Types\InputContactMessageContent $item)
 * @method \Tarik02\Telegram\Types\InputContactMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputContactMessageContent> getIterator()
 *
 * @method static InputContactMessageContentCollection make()
 * @method static InputContactMessageContentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputContactMessageContent
 */
final class InputContactMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputContactMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputContactMessageContent
    {
        return \Tarik02\Telegram\Types\InputContactMessageContent::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputContactMessageContent
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputContactMessageContent
    {
        return \Tarik02\Telegram\Types\InputContactMessageContent::fromPayload($payload);
    }
}
