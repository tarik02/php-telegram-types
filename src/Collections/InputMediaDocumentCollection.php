<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputMediaDocumentCollection
 *
 * @method InputMediaDocumentCollection push(\Tarik02\Telegram\Entities\InputMediaDocument $item)
 * @method \Tarik02\Telegram\Entities\InputMediaDocument get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputMediaDocument> getIterator()
 *
 * @method static InputMediaDocumentCollection make()
 * @method static InputMediaDocumentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputMediaDocument
 */
class InputMediaDocumentCollection extends \Tarik02\Telegram\Collections\InputMediaCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputMediaDocument
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputMediaDocument
    {
        return \Tarik02\Telegram\Entities\InputMediaDocument::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputMediaDocument
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputMediaDocument
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputMediaDocument::fromPayload($payload);
    }
}
