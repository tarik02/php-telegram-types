<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportElementError
 *
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportelementerror
 */
abstract class PassportElementError implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\PassportElementErrorCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportElementErrorCollection
    {
        return \Tarik02\Telegram\Collections\PassportElementErrorCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        $key = $payload['source'] ?? null;

        switch ($key) {
            case 'data':
                return \Tarik02\Telegram\Entities\PassportElementErrorDataField::fromPayload($payload);

            case 'front_side':
                return \Tarik02\Telegram\Entities\PassportElementErrorFrontSide::fromPayload($payload);

            case 'reverse_side':
                return \Tarik02\Telegram\Entities\PassportElementErrorReverseSide::fromPayload($payload);

            case 'selfie':
                return \Tarik02\Telegram\Entities\PassportElementErrorSelfie::fromPayload($payload);

            case 'file':
                return \Tarik02\Telegram\Entities\PassportElementErrorFile::fromPayload($payload);

            case 'files':
                return \Tarik02\Telegram\Entities\PassportElementErrorFiles::fromPayload($payload);

            case 'translation_file':
                return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFile::fromPayload($payload);

            case 'translation_files':
                return \Tarik02\Telegram\Entities\PassportElementErrorTranslationFiles::fromPayload($payload);

            case 'unspecified':
                return \Tarik02\Telegram\Entities\PassportElementErrorUnspecified::fromPayload($payload);

        }

        throw new \InvalidArgumentException('Field \'source\' expected to have value of: \'data\' or \'front_side\' or \'reverse_side\' or \'selfie\' or \'file\' or \'files\' or \'translation_file\' or \'translation_files\' or \'unspecified\'; got ' . ($value ?? 'null') . '.');
    }
}
