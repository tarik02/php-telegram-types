<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultArticleCollection
 *
 * @method InlineQueryResultArticleCollection push(\Tarik02\Telegram\Entities\InlineQueryResultArticle $item)
 * @method \Tarik02\Telegram\Entities\InlineQueryResultArticle get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InlineQueryResultArticle> getIterator()
 *
 * @method static InlineQueryResultArticleCollection make()
 * @method static InlineQueryResultArticleCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InlineQueryResultArticle
 */
final class InlineQueryResultArticleCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InlineQueryResultArticle
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InlineQueryResultArticle
    {
        return \Tarik02\Telegram\Entities\InlineQueryResultArticle::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InlineQueryResultArticle
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InlineQueryResultArticle
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InlineQueryResultArticle::fromPayload($payload);
    }
}
