<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ForceReplyCollection
 *
 * @method ForceReplyCollection push(\Tarik02\Telegram\Entities\ForceReply $item)
 * @method \Tarik02\Telegram\Entities\ForceReply get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ForceReply> getIterator()
 *
 * @method static ForceReplyCollection make()
 * @method static ForceReplyCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ForceReply
 */
final class ForceReplyCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ForceReply
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ForceReply
    {
        return \Tarik02\Telegram\Entities\ForceReply::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ForceReply
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ForceReply
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ForceReply::fromPayload($payload);
    }
}
