<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Collections;

/**
 * Class EncryptedCredentialsCollection
 *
 * @method EncryptedCredentialsCollection push(\Tarik02\Telegram\Types\EncryptedCredentials $item)
 * @method \Tarik02\Telegram\Types\EncryptedCredentials get(int $index)
 *
 * @method \Iterator<\Tarik02\Telegram\Types\EncryptedCredentials> getIterator()
 *
 * @method static EncryptedCredentialsCollection make()
 * @method static EncryptedCredentialsCollection fromPayload(array $payload)
 *
 * @package Tarik02\Telegram\Collections
 * @see \Tarik02\Telegram\Types\EncryptedCredentials
 */
final class EncryptedCredentialsCollection extends Collection implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * @return \Tarik02\Telegram\Types\EncryptedCredentials
     */
    public static function makeItem(): \Tarik02\Telegram\Types\EncryptedCredentials
    {
        return \Tarik02\Telegram\Types\EncryptedCredentials::make();
    }

    /**
     * @param array $payload
     * @return \Tarik02\Telegram\Types\EncryptedCredentials
     */
    public static function itemFromPayload(array $payload): \Tarik02\Telegram\Types\EncryptedCredentials
    {
        return \Tarik02\Telegram\Types\EncryptedCredentials::fromPayload($payload);
    }
}
