<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ForceReplyCollection
 *
 * @method ForceReplyCollection push(\Tarik02\Telegram\Types\ForceReply $item)
 * @method \Tarik02\Telegram\Types\ForceReply get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ForceReply> getIterator()
 *
 * @method static ForceReplyCollection make()
 * @method static ForceReplyCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ForceReply
 */
final class ForceReplyCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ForceReply
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ForceReply
    {
        return \Tarik02\Telegram\Types\ForceReply::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ForceReply
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ForceReply
    {
        return \Tarik02\Telegram\Types\ForceReply::fromPayload($payload);
    }
}
