<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultPhotoCollection
 *
 * @method InlineQueryResultPhotoCollection push(\Tarik02\Telegram\Types\InlineQueryResultPhoto $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultPhoto> getIterator()
 *
 * @method static InlineQueryResultPhotoCollection make()
 * @method static InlineQueryResultPhotoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultPhoto
 */
final class InlineQueryResultPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultPhoto
    {
        return \Tarik02\Telegram\Types\InlineQueryResultPhoto::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultPhoto
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultPhoto
    {
        return \Tarik02\Telegram\Types\InlineQueryResultPhoto::fromPayload($payload);
    }
}
