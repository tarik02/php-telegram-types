<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VideoCollection
 *
 * @method VideoCollection push(\Tarik02\Telegram\Entities\Video $item)
 * @method \Tarik02\Telegram\Entities\Video get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Video> getIterator()
 *
 * @method static VideoCollection make()
 * @method static VideoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Video
 */
final class VideoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Video
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Video
    {
        return \Tarik02\Telegram\Entities\Video::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Video
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Video
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Video::fromPayload($payload);
    }
}
