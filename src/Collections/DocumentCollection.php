<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class DocumentCollection
 *
 * @method DocumentCollection push(\Tarik02\Telegram\Entities\Document $item)
 * @method \Tarik02\Telegram\Entities\Document get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Document> getIterator()
 *
 * @method static DocumentCollection make()
 * @method static DocumentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Document
 */
final class DocumentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Document
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Document
    {
        return \Tarik02\Telegram\Entities\Document::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Document
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Document
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Document::fromPayload($payload);
    }
}
