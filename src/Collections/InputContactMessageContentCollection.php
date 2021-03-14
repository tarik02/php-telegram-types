<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputContactMessageContentCollection
 *
 * @method InputContactMessageContentCollection push(\Tarik02\Telegram\Entities\InputContactMessageContent $item)
 * @method \Tarik02\Telegram\Entities\InputContactMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputContactMessageContent> getIterator()
 *
 * @method static InputContactMessageContentCollection make()
 * @method static InputContactMessageContentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputContactMessageContent
 */
final class InputContactMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputContactMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputContactMessageContent
    {
        return \Tarik02\Telegram\Entities\InputContactMessageContent::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputContactMessageContent
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputContactMessageContent
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputContactMessageContent::fromPayload($payload);
    }
}
