<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VideoCollection
 *
 * @method VideoCollection push(\Tarik02\Telegram\Types\Video $item)
 * @method \Tarik02\Telegram\Types\Video get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Video> getIterator()
 *
 * @method static VideoCollection make()
 * @method static VideoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Video
 */
final class VideoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Video
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Video
    {
        return \Tarik02\Telegram\Types\Video::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Video
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Video
    {
        return \Tarik02\Telegram\Types\Video::fromPayload($payload);
    }
}
