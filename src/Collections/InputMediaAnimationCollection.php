<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaAnimationCollection
 *
 * @method InputMediaAnimationCollection push(\Tarik02\Telegram\Types\InputMediaAnimation $item)
 * @method \Tarik02\Telegram\Types\InputMediaAnimation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMediaAnimation> getIterator()
 *
 * @method static InputMediaAnimationCollection make()
 * @method static InputMediaAnimationCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMediaAnimation
 */
final class InputMediaAnimationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMediaAnimation
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMediaAnimation
    {
        return \Tarik02\Telegram\Types\InputMediaAnimation::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMediaAnimation
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMediaAnimation
    {
        return \Tarik02\Telegram\Types\InputMediaAnimation::fromPayload($payload);
    }
}
