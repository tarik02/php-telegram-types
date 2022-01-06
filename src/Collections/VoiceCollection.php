<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VoiceCollection
 *
 * @method VoiceCollection push(\Tarik02\Telegram\Entities\Voice $item)
 * @method \Tarik02\Telegram\Entities\Voice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Voice> getIterator()
 *
 * @method static VoiceCollection make()
 * @method static VoiceCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Voice
 */
class VoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Voice
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Voice
    {
        return \Tarik02\Telegram\Entities\Voice::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Voice
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Voice
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Voice::fromPayload($payload);
    }
}
