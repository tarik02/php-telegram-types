<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineQueryResult
 *
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinequeryresult
 */
abstract class InlineQueryResult implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\InlineQueryResultCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineQueryResultCollection
    {
        return \Tarik02\Telegram\Collections\InlineQueryResultCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        $key = $payload['type'] ?? null;

        switch ($key) {
            case 'audio':
                return \Tarik02\Telegram\Entities\InlineQueryResultAudio::fromPayload($payload);

            case 'document':
                return \Tarik02\Telegram\Entities\InlineQueryResultDocument::fromPayload($payload);

            case 'gif':
                return \Tarik02\Telegram\Entities\InlineQueryResultGif::fromPayload($payload);

            case 'mpeg4_gif':
                return \Tarik02\Telegram\Entities\InlineQueryResultMpeg4Gif::fromPayload($payload);

            case 'photo':
                return \Tarik02\Telegram\Entities\InlineQueryResultPhoto::fromPayload($payload);

            case 'sticker':
                return \Tarik02\Telegram\Entities\InlineQueryResultCachedSticker::fromPayload($payload);

            case 'video':
                return \Tarik02\Telegram\Entities\InlineQueryResultVideo::fromPayload($payload);

            case 'voice':
                return \Tarik02\Telegram\Entities\InlineQueryResultVoice::fromPayload($payload);

            case 'article':
                return \Tarik02\Telegram\Entities\InlineQueryResultArticle::fromPayload($payload);

            case 'contact':
                return \Tarik02\Telegram\Entities\InlineQueryResultContact::fromPayload($payload);

            case 'game':
                return \Tarik02\Telegram\Entities\InlineQueryResultGame::fromPayload($payload);

            case 'location':
                return \Tarik02\Telegram\Entities\InlineQueryResultLocation::fromPayload($payload);

            case 'venue':
                return \Tarik02\Telegram\Entities\InlineQueryResultVenue::fromPayload($payload);

        }

        throw new \InvalidArgumentException('Field \'type\' expected to have value of: \'audio\' or \'document\' or \'gif\' or \'mpeg4_gif\' or \'photo\' or \'sticker\' or \'video\' or \'voice\' or \'article\' or \'contact\' or \'game\' or \'location\' or \'venue\'; got ' . ($value ?? 'null') . '.');
    }
}
