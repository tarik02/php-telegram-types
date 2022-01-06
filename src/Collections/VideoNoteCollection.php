<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class VideoNoteCollection
 *
 * @method VideoNoteCollection push(\Tarik02\Telegram\Entities\VideoNote $item)
 * @method \Tarik02\Telegram\Entities\VideoNote get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\VideoNote> getIterator()
 *
 * @method static VideoNoteCollection make()
 * @method static VideoNoteCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\VideoNote
 */
class VideoNoteCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\VideoNote
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\VideoNote
    {
        return \Tarik02\Telegram\Entities\VideoNote::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\VideoNote
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\VideoNote
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\VideoNote::fromPayload($payload);
    }
}
