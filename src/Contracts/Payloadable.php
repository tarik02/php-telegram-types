<?php

namespace Tarik02\Telegram\Contracts;

/**
 * Interface Payloadable
 *
 * @package Tarik02\Telegram\Contracts
 */
interface Payloadable
{
    /**
     * @return array
     */
    public function toPayload(): array;

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self;
}
