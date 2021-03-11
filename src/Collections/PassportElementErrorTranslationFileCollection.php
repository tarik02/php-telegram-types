<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class PassportElementErrorTranslationFileCollection
 *
 * @method PassportElementErrorTranslationFileCollection push(\Tarik02\Telegram\Types\PassportElementErrorTranslationFile $item)
 * @method \Tarik02\Telegram\Types\PassportElementErrorTranslationFile get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\PassportElementErrorTranslationFile> getIterator()
 *
 * @method static PassportElementErrorTranslationFileCollection make()
 * @method static PassportElementErrorTranslationFileCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\PassportElementErrorTranslationFile
 */
final class PassportElementErrorTranslationFileCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\PassportElementErrorTranslationFile
     */
    public static function makeItem(): \Tarik02\Telegram\Types\PassportElementErrorTranslationFile
    {
        return \Tarik02\Telegram\Types\PassportElementErrorTranslationFile::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\PassportElementErrorTranslationFile
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\PassportElementErrorTranslationFile
    {
        return \Tarik02\Telegram\Types\PassportElementErrorTranslationFile::fromPayload($payload);
    }
}
