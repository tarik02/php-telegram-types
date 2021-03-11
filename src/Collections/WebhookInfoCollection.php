<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class WebhookInfoCollection
 *
 * @method WebhookInfoCollection push(\Tarik02\Telegram\Types\WebhookInfo $item)
 * @method \Tarik02\Telegram\Types\WebhookInfo get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\WebhookInfo> getIterator()
 *
 * @method static WebhookInfoCollection make()
 * @method static WebhookInfoCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\WebhookInfo
 */
final class WebhookInfoCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\WebhookInfo
     */
    public static function makeItem(): \Tarik02\Telegram\Types\WebhookInfo
    {
        return \Tarik02\Telegram\Types\WebhookInfo::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\WebhookInfo
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\WebhookInfo
    {
        return \Tarik02\Telegram\Types\WebhookInfo::fromPayload($payload);
    }
}
