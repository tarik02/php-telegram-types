<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ResponseParametersCollection
 *
 * @method ResponseParametersCollection push(\Tarik02\Telegram\Types\ResponseParameters $item)
 * @method \Tarik02\Telegram\Types\ResponseParameters get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\ResponseParameters> getIterator()
 *
 * @method static ResponseParametersCollection make()
 * @method static ResponseParametersCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\ResponseParameters
 */
final class ResponseParametersCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\ResponseParameters
     */
    public static function makeItem(): \Tarik02\Telegram\Types\ResponseParameters
    {
        return \Tarik02\Telegram\Types\ResponseParameters::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\ResponseParameters
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\ResponseParameters
    {
        return \Tarik02\Telegram\Types\ResponseParameters::fromPayload($payload);
    }
}
