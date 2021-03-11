<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class KeyboardButtonPollTypeCollection
 *
 * @method KeyboardButtonPollTypeCollection push(\Tarik02\Telegram\Types\KeyboardButtonPollType $item)
 * @method \Tarik02\Telegram\Types\KeyboardButtonPollType get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\KeyboardButtonPollType> getIterator()
 *
 * @method static KeyboardButtonPollTypeCollection make()
 * @method static KeyboardButtonPollTypeCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\KeyboardButtonPollType
 */
final class KeyboardButtonPollTypeCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\KeyboardButtonPollType
     */
    public static function makeItem(): \Tarik02\Telegram\Types\KeyboardButtonPollType
    {
        return \Tarik02\Telegram\Types\KeyboardButtonPollType::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\KeyboardButtonPollType
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\KeyboardButtonPollType
    {
        return \Tarik02\Telegram\Types\KeyboardButtonPollType::fromPayload($payload);
    }
}
