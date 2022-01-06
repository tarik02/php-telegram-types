<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputTextMessageContentCollection
 *
 * @method InputTextMessageContentCollection push(\Tarik02\Telegram\Entities\InputTextMessageContent $item)
 * @method \Tarik02\Telegram\Entities\InputTextMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputTextMessageContent> getIterator()
 *
 * @method static InputTextMessageContentCollection make()
 * @method static InputTextMessageContentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputTextMessageContent
 */
class InputTextMessageContentCollection extends \Tarik02\Telegram\Collections\InputMessageContentCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputTextMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputTextMessageContent
    {
        return \Tarik02\Telegram\Entities\InputTextMessageContent::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputTextMessageContent
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputTextMessageContent
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputTextMessageContent::fromPayload($payload);
    }
}
