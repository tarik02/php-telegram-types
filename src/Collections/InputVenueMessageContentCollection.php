<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputVenueMessageContentCollection
 *
 * @method InputVenueMessageContentCollection push(\Tarik02\Telegram\Entities\InputVenueMessageContent $item)
 * @method \Tarik02\Telegram\Entities\InputVenueMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputVenueMessageContent> getIterator()
 *
 * @method static InputVenueMessageContentCollection make()
 * @method static InputVenueMessageContentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputVenueMessageContent
 */
final class InputVenueMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputVenueMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputVenueMessageContent
    {
        return \Tarik02\Telegram\Entities\InputVenueMessageContent::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputVenueMessageContent
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputVenueMessageContent
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputVenueMessageContent::fromPayload($payload);
    }
}
