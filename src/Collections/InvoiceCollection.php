<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InvoiceCollection
 *
 * @method InvoiceCollection push(\Tarik02\Telegram\Entities\Invoice $item)
 * @method \Tarik02\Telegram\Entities\Invoice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\Invoice> getIterator()
 *
 * @method static InvoiceCollection make()
 * @method static InvoiceCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\Invoice
 */
final class InvoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\Invoice
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\Invoice
    {
        return \Tarik02\Telegram\Entities\Invoice::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\Invoice
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\Invoice
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\Invoice::fromPayload($payload);
    }
}
