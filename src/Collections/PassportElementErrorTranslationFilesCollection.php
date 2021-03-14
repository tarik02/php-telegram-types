<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorTranslationFilesCollection
 *
 * @method PassportElementErrorTranslationFilesCollection push(\Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles $item)
 * @method \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles> getIterator()
 *
 * @method static PassportElementErrorTranslationFilesCollection make()
 * @method static PassportElementErrorTranslationFilesCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles
 */
final class PassportElementErrorTranslationFilesCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles
    {
        return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles::fromPayload($payload);
    }
}
