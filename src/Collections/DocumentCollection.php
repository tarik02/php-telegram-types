<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class DocumentCollection
 *
 * @method DocumentCollection push(\Tarik02\Telegram\Types\Document $item)
 * @method \Tarik02\Telegram\Types\Document get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Document> getIterator()
 *
 * @method static DocumentCollection make()
 * @method static DocumentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Document
 */
final class DocumentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Document
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Document
    {
        return \Tarik02\Telegram\Types\Document::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Document
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Document
    {
        return \Tarik02\Telegram\Types\Document::fromPayload($payload);
    }
}
