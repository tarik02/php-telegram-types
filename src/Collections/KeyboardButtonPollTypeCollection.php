<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class KeyboardButtonPollTypeCollection
 *
 * @method KeyboardButtonPollTypeCollection push(\Tarik02\Telegram\Entities\KeyboardButtonPollType $item)
 * @method \Tarik02\Telegram\Entities\KeyboardButtonPollType get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\KeyboardButtonPollType> getIterator()
 *
 * @method static KeyboardButtonPollTypeCollection make()
 * @method static KeyboardButtonPollTypeCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\KeyboardButtonPollType
 */
final class KeyboardButtonPollTypeCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\KeyboardButtonPollType
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\KeyboardButtonPollType
    {
        return \Tarik02\Telegram\Entities\KeyboardButtonPollType::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\KeyboardButtonPollType
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\KeyboardButtonPollType
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\KeyboardButtonPollType::fromPayload($payload);
    }
}
