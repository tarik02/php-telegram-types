<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorTranslationFileCollection
 *
 * @method PassportElementErrorTranslationFileCollection push(\Tarik02\Telegram\Entities\PassportElementErrorTranslationFile $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorTranslationFile> getIterator()
 *
 * @method static PassportElementErrorTranslationFileCollection make()
 * @method static PassportElementErrorTranslationFileCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile
 */
final class PassportElementErrorTranslationFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile::fromPayload($payload);
    }
}
