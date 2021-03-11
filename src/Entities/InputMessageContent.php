<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputMessageContent
 *
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 4 types:
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputmessagecontent
 */
abstract class InputMessageContent implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Collections\InputMessageContentCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputMessageContentCollection
    {
        return \Tarik02\Telegram\Collections\InputMessageContentCollection::make();
    }
}
