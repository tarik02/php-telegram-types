<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultDocumentCollection
 *
 * @method InlineQueryResultDocumentCollection push(\Tarik02\Telegram\Entities\InlineQueryResultDocument $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultDocument get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultDocument> getIterator()
 *
 * @method static InlineQueryResultDocumentCollection make()
 * @method static InlineQueryResultDocumentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultDocument
 */
final class InlineQueryResultDocumentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultDocument
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultDocument
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultDocument::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultDocument
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultDocument
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultDocument::fromPayload($payload);
    }
}
