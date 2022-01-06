<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class WebhookInfoCollection
 *
 * @method WebhookInfoCollection push(\Tarik02\Telegram\Entities\WebhookInfo $item)
 * @method \Tarik02\Telegram\Entities\WebhookInfo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\WebhookInfo> getIterator()
 *
 * @method static WebhookInfoCollection make()
 * @method static WebhookInfoCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\WebhookInfo
 */
class WebhookInfoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\WebhookInfo
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\WebhookInfo
    {
        return \Tarik02\Telegram\Entities\WebhookInfo::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\WebhookInfo
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\WebhookInfo
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\WebhookInfo::fromPayload($payload);
    }
}
