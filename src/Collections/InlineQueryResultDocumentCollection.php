<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultDocumentCollection
 *
 * @method InlineQueryResultDocumentCollection push(\Tarik02\Telegram\Types\InlineQueryResultDocument $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultDocument get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultDocument> getIterator()
 *
 * @method static InlineQueryResultDocumentCollection make()
 * @method static InlineQueryResultDocumentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultDocument
 */
final class InlineQueryResultDocumentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultDocument
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultDocument
    {
        return \Tarik02\Telegram\Types\InlineQueryResultDocument::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultDocument
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultDocument
    {
        return \Tarik02\Telegram\Types\InlineQueryResultDocument::fromPayload($payload);
    }
}
