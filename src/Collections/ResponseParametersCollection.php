<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class ResponseParametersCollection
 *
 * @method ResponseParametersCollection push(\Tarik02\Telegram\Entities\ResponseParameters $item)
 * @method \Tarik02\Telegram\Entities\ResponseParameters get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\ResponseParameters> getIterator()
 *
 * @method static ResponseParametersCollection make()
 * @method static ResponseParametersCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\ResponseParameters
 */
final class ResponseParametersCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\ResponseParameters
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\ResponseParameters
    {
        return \Tarik02\Telegram\Entities\ResponseParameters::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\ResponseParameters
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\ResponseParameters
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\ResponseParameters::fromPayload($payload);
    }
}
