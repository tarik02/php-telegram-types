<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaDocumentCollection
 *
 * @method InputMediaDocumentCollection push(\Tarik02\Telegram\Types\InputMediaDocument $item)
 * @method \Tarik02\Telegram\Types\InputMediaDocument get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\InputMediaDocument> getIterator()
 *
 * @method static InputMediaDocumentCollection make()
 * @method static InputMediaDocumentCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\InputMediaDocument
 */
final class InputMediaDocumentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\InputMediaDocument
     */
    public static function makeItem(): \Tarik02\Telegram\Types\InputMediaDocument
    {
        return \Tarik02\Telegram\Types\InputMediaDocument::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\InputMediaDocument
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\InputMediaDocument
    {
        return \Tarik02\Telegram\Types\InputMediaDocument::fromPayload($payload);
    }
}
