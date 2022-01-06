<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorDataFieldCollection
 *
 * @method PassportElementErrorDataFieldCollection push(\Tarik02\Telegram\Entities\PassportElementErrorDataField $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorDataField get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorDataField> getIterator()
 *
 * @method static PassportElementErrorDataFieldCollection make()
 * @method static PassportElementErrorDataFieldCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorDataField
 */
class PassportElementErrorDataFieldCollection extends \Tarik02\Telegram\Collections\PassportElementErrorCollection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorDataField
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorDataField
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorDataField::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorDataField
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorDataField
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorDataField::fromPayload($payload);
    }
}
