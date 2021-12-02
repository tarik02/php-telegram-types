<?php

namespace Tarik02\Telegram\Methods;

use Tarik02\Telegram\Contracts\Payloadable;

/**
 * Class Method
 *
 * @package Tarik02\Telegram\Methods
 */
abstract class Method implements Payloadable
{
    /**
     * @return string
     */
    abstract public function methodName(): string;

    /**
     * @param array $payload
     * @return mixed
     */
    abstract public static function createResponse(array $payload);
}
