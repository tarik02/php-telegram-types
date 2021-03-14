<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedPhotoCollection
 *
 * @method InlineQueryResultCachedPhotoCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto> getIterator()
 *
 * @method static InlineQueryResultCachedPhotoCollection make()
 * @method static InlineQueryResultCachedPhotoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto
 */
final class InlineQueryResultCachedPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedPhoto::fromPayload($payload);
    }
}
