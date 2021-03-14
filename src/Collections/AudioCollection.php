<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class AudioCollection
 *
 * @method AudioCollection push(\Tarik02\Telegram\Entities\Audio $item)
 * @method \Tarik02\Telegram\Entities\Audio get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Audio> getIterator()
 *
 * @method static AudioCollection make()
 * @method static AudioCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Audio
 */
final class AudioCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Audio
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Audio
    {
        return \Tarik02\Telegram\Entities\Audio::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Audio
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Audio
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Audio::fromPayload($payload);
    }
}
