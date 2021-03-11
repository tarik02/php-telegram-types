<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class InvoiceCollection
 *
 * @method InvoiceCollection push(\Tarik02\Telegram\Types\Invoice $item)
 * @method \Tarik02\Telegram\Types\Invoice get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\Invoice> getIterator()
 *
 * @method static InvoiceCollection make()
 * @method static InvoiceCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\Invoice
 */
final class InvoiceCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\Invoice
     */
    public static function makeItem(): \Tarik02\Telegram\Types\Invoice
    {
        return \Tarik02\Telegram\Types\Invoice::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\Invoice
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\Invoice
    {
        return \Tarik02\Telegram\Types\Invoice::fromPayload($payload);
    }
}
