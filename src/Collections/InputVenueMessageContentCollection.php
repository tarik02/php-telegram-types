<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputVenueMessageContentCollection
 *
 * @method InputVenueMessageContentCollection push(\Tarik02\Telegram\Types\InputVenueMessageContent $item)
 * @method \Tarik02\Telegram\Types\InputVenueMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputVenueMessageContent> getIterator()
 *
 * @method static InputVenueMessageContentCollection make()
 * @method static InputVenueMessageContentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputVenueMessageContent
 */
final class InputVenueMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputVenueMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputVenueMessageContent
    {
        return \Tarik02\Telegram\Types\InputVenueMessageContent::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputVenueMessageContent
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputVenueMessageContent
    {
        return \Tarik02\Telegram\Types\InputVenueMessageContent::fromPayload($payload);
    }
}
