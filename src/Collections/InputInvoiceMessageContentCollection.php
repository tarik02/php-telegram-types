<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InputInvoiceMessageContentCollection
 *
 * @method InputInvoiceMessageContentCollection push(\Tarik02\Telegram\Entities\InputInvoiceMessageContent $item)
 * @method \Tarik02\Telegram\Entities\InputInvoiceMessageContent get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\InputInvoiceMessageContent> getIterator()
 *
 * @method static InputInvoiceMessageContentCollection make()
 * @method static InputInvoiceMessageContentCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\InputInvoiceMessageContent
 */
final class InputInvoiceMessageContentCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\InputInvoiceMessageContent
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\InputInvoiceMessageContent
    {
        return \Tarik02\Telegram\Entities\InputInvoiceMessageContent::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\InputInvoiceMessageContent
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\InputInvoiceMessageContent
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\InputInvoiceMessageContent::fromPayload($payload);
    }
}
