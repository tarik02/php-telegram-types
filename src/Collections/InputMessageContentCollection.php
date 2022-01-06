<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMessageContentCollection
 *
 * @method InputMessageContentCollection push(\Tarik02\Telegram\Entities\InputMessageContent $item)
 * @method \Tarik02\Telegram\Entities\InputMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMessageContent> getIterator()
 *
 * @method static InputMessageContentCollection make()
 * @method static InputMessageContentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMessageContent
 */
class InputMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMessageContent
    {
        return \Tarik02\Telegram\Entities\InputMessageContent::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMessageContent
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMessageContent
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMessageContent::fromPayload($payload);
    }
}
