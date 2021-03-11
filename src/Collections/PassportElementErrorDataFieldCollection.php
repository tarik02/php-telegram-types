<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorDataFieldCollection
 *
 * @method PassportElementErrorDataFieldCollection push(\Tarik02\Telegram\Types\PassportElementErrorDataField $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorDataField get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorDataField> getIterator()
 *
 * @method static PassportElementErrorDataFieldCollection make()
 * @method static PassportElementErrorDataFieldCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorDataField
 */
final class PassportElementErrorDataFieldCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorDataField
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorDataField
    {
        return \Tarik02\Telegram\Types\PassportElementErrorDataField::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorDataField
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorDataField
    {
        return \Tarik02\Telegram\Types\PassportElementErrorDataField::fromPayload($payload);
    }
}
