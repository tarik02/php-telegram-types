<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class AnimationCollection
 *
 * @method AnimationCollection push(\Tarik02\Telegram\Entities\Animation $item)
 * @method \Tarik02\Telegram\Entities\Animation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Animation> getIterator()
 *
 * @method static AnimationCollection make()
 * @method static AnimationCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Animation
 */
final class AnimationCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Animation
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Animation
    {
        return \Tarik02\Telegram\Entities\Animation::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Animation
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Animation
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Animation::fromPayload($payload);
    }
}
