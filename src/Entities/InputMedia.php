<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputMedia
 *
 * This object represents the content of a media message to be sent. It should be one of
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputmedia
 */
abstract class InputMedia implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\InputMediaCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputMediaCollection
    {
        return \Tarik02\Telegram\Collections\InputMediaCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        $key = $payload['type'] ?? null;

        switch ($key) {
            case 'animation':
                return \Tarik02\Telegram\Entities\InputMediaAnimation::fromPayload($payload);

            case 'document':
                return \Tarik02\Telegram\Entities\InputMediaDocument::fromPayload($payload);

            case 'audio':
                return \Tarik02\Telegram\Entities\InputMediaAudio::fromPayload($payload);

            case 'photo':
                return \Tarik02\Telegram\Entities\InputMediaPhoto::fromPayload($payload);

            case 'video':
                return \Tarik02\Telegram\Entities\InputMediaVideo::fromPayload($payload);

        }

        throw new \InvalidArgumentException('Field \'type\' expected to have value of: \'animation\' or \'document\' or \'audio\' or \'photo\' or \'video\'; got ' . ($value ?? 'null') . '.');
    }
}
