<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class AnimationCollection
 *
 * @method AnimationCollection push(\Tarik02\Telegram\Types\Animation $item)
 * @method \Tarik02\Telegram\Types\Animation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Animation> getIterator()
 *
 * @method static AnimationCollection make()
 * @method static AnimationCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Animation
 */
final class AnimationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Animation
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Animation
    {
        return \Tarik02\Telegram\Types\Animation::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Animation
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Animation
    {
        return \Tarik02\Telegram\Types\Animation::fromPayload($payload);
    }
}
