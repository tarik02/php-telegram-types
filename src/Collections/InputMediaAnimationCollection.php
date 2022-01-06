<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaAnimationCollection
 *
 * @method InputMediaAnimationCollection push(\Tarik02\Telegram\Entities\InputMediaAnimation $item)
 * @method \Tarik02\Telegram\Entities\InputMediaAnimation get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMediaAnimation> getIterator()
 *
 * @method static InputMediaAnimationCollection make()
 * @method static InputMediaAnimationCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMediaAnimation
 */
class InputMediaAnimationCollection extends \Tarik02\Telegram\Collections\InputMediaCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMediaAnimation
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMediaAnimation
    {
        return \Tarik02\Telegram\Entities\InputMediaAnimation::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMediaAnimation
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMediaAnimation
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMediaAnimation::fromPayload($payload);
    }
}
