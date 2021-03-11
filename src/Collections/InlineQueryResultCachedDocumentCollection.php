<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultCachedDocumentCollection
 *
 * @method InlineQueryResultCachedDocumentCollection push(\Tarik02\Telegram\Types\InlineQueryResultCachedDocument $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultCachedDocument get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultCachedDocument> getIterator()
 *
 * @method static InlineQueryResultCachedDocumentCollection make()
 * @method static InlineQueryResultCachedDocumentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultCachedDocument
 */
final class InlineQueryResultCachedDocumentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedDocument
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultCachedDocument
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedDocument::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultCachedDocument
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultCachedDocument
    {
        return \Tarik02\Telegram\Types\InlineQueryResultCachedDocument::fromPayload($payload);
    }
}
