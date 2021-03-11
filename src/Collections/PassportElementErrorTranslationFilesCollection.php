<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorTranslationFilesCollection
 *
 * @method PassportElementErrorTranslationFilesCollection push(\Tarik02\Telegram\Types\PassportElementErrorTranslationFiles $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorTranslationFiles> getIterator()
 *
 * @method static PassportElementErrorTranslationFilesCollection make()
 * @method static PassportElementErrorTranslationFilesCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles
 */
final class PassportElementErrorTranslationFilesCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles
    {
        return \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles
    {
        return \Tarik02\Telegram\Types\PassportElementErrorTranslationFiles::fromPayload($payload);
    }
}
