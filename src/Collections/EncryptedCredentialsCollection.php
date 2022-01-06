<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class EncryptedCredentialsCollection
 *
 * @method EncryptedCredentialsCollection push(\Tarik02\Telegram\Entities\EncryptedCredentials $item)
 * @method \Tarik02\Telegram\Entities\EncryptedCredentials get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Entities\EncryptedCredentials> getIterator()
 *
 * @method static EncryptedCredentialsCollection make()
 * @method static EncryptedCredentialsCollection fromPayload($payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Entities\EncryptedCredentials
 */
class EncryptedCredentialsCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Entities\EncryptedCredentials
     */
    public static function makeItem(): \Tarik02\Telegram\Entities\EncryptedCredentials
    {
        return \Tarik02\Telegram\Entities\EncryptedCredentials::make();
    }

    /**
     * @param mixed $payload
     * @return \Tarik02\Telegram\Entities\EncryptedCredentials
     */
    public static function itemFromPayload($payload): \Tarik02\Telegram\Entities\EncryptedCredentials
    {
        if (! \is_array($payload)) {
            throw new \InvalidArgumentException('Item payload is expected to be an array.');
        }

        return \Tarik02\Telegram\Entities\EncryptedCredentials::fromPayload($payload);
    }
}
