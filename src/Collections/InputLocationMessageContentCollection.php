<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputLocationMessageContentCollection
 *
 * @method InputLocationMessageContentCollection push(\Tarik02\Telegram\Entities\InputLocationMessageContent $item)
 * @method \Tarik02\Telegram\Entities\InputLocationMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputLocationMessageContent> getIterator()
 *
 * @method static InputLocationMessageContentCollection make()
 * @method static InputLocationMessageContentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputLocationMessageContent
 */
final class InputLocationMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputLocationMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputLocationMessageContent
    {
        return \Tarik02\Telegram\Entities\InputLocationMessageContent::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputLocationMessageContent
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputLocationMessageContent
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputLocationMessageContent::fromPayload($payload);
    }
}
