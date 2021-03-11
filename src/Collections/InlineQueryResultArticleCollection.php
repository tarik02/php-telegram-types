<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InlineQueryResultArticleCollection
 *
 * @method InlineQueryResultArticleCollection push(\Tarik02\Telegram\Types\InlineQueryResultArticle $item)
 * @method \Tarik02\Telegram\Types\InlineQueryResultArticle get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InlineQueryResultArticle> getIterator()
 *
 * @method static InlineQueryResultArticleCollection make()
 * @method static InlineQueryResultArticleCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InlineQueryResultArticle
 */
final class InlineQueryResultArticleCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InlineQueryResultArticle
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InlineQueryResultArticle
    {
        return \Tarik02\Telegram\Types\InlineQueryResultArticle::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InlineQueryResultArticle
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InlineQueryResultArticle
    {
        return \Tarik02\Telegram\Types\InlineQueryResultArticle::fromPayload($payload);
    }
}
