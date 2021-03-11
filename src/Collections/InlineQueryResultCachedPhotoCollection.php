<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedPhotoCollection
 *
 * @method InlineQueryResultCachedPhotoCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedPhoto $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedPhoto> getIterator()
 *
 * @method static InlineQueryResultCachedPhotoCollection make()
 * @method static InlineQueryResultCachedPhotoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto
 */
final class InlineQueryResultCachedPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedPhoto::fromPayload($payload);
    }
}
