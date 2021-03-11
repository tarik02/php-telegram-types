<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VideoNoteCollection
 *
 * @method VideoNoteCollection push(\Tarik02\Telegram\Types\VideoNote $item)
 * @method \Tarik02\Telegram\Types\VideoNote get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\VideoNote> getIterator()
 *
 * @method static VideoNoteCollection make()
 * @method static VideoNoteCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\VideoNote
 */
final class VideoNoteCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\VideoNote
     */
    public static function makeItem(): \Tarik02\Telegram\Types\VideoNote
    {
        return \Tarik02\Telegram\Types\VideoNote::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\VideoNote
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\VideoNote
    {
        return \Tarik02\Telegram\Types\VideoNote::fromPayload($payload);
    }
}
