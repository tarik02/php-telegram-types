<?php

namespace Tarik02\Telegram\Collections;

use Iterator;
use Tarik02\Telegram\Contracts\Payloadable;

/**
 * Class CollectionIterator
 *
 * @package Tarik02\Telegram\Collections
 */
final class CollectionIterator implements Iterator
{
    /**
     * @var Collection
     */
    private Collection $collection;

    /**
     * @var int
     */
    private int $index = 0;

    /**
     * @param Collection $collection
     * @return void
     */
    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return Payloadable
     */
    public function current(): Payloadable
    {
        return $this->collection->get($this->index);
    }

    /**
     * @return void
     */
    public function next(): void
    {
        ++$this->index;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->index;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
       return $this->key() < $this->collection->count();
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        $this->index = 0;
    }
}
