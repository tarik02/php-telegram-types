<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultPhotoCollection
 *
 * @method InlineQueryResultPhotoCollection push(\Tarik02\Telegram\Entities\InlineQueryResultPhoto $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultPhoto get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultPhoto> getIterator()
 *
 * @method static InlineQueryResultPhotoCollection make()
 * @method static InlineQueryResultPhotoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultPhoto
 */
final class InlineQueryResultPhotoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultPhoto
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultPhoto
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultPhoto::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultPhoto
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultPhoto
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultPhoto::fromPayload($payload);
    }
}
