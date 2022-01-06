<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedDocumentCollection
 *
 * @method InlineQueryResultCachedDocumentCollection push(\Tarik02\Telegram\Entities\InlineQueryResultCachedDocument $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultCachedDocument> getIterator()
 *
 * @method static InlineQueryResultCachedDocumentCollection make()
 * @method static InlineQueryResultCachedDocumentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument
 */
class InlineQueryResultCachedDocumentCollection extends \Tarik02\Telegram\Collections\InlineQueryResultCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultCachedDocument::fromPayload($payload);
    }
}
