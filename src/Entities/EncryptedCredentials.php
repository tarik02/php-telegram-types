<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class EncryptedCredentials
 *
 * Contains data required for decrypting and authenticating [EncryptedPassportElement](https://core.telegram.org/bots/api/#encryptedpassportelement). See the [Telegram Passport Documentation](https://core.telegram.org/passport#receiving-information) for a complete description of the data decryption and authentication processes.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#encryptedcredentials
 */
class EncryptedCredentials implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for [EncryptedPassportElement](https://core.telegram.org/bots/api/#encryptedpassportelement) decryption and authentication
     *
     * @return string
     */
    public function data(): string
    {
        return $this->payload['data'];
    }

    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for [EncryptedPassportElement](https://core.telegram.org/bots/api/#encryptedpassportelement) decryption and authentication
     *
     * @param string $data
     * @return self
     */
    public function withData(string $data): self
    {
        $payload = $this->payload;
        $payload['data'] = $data;
        return new self($payload);
    }

    /**
     * Base64-encoded data hash for data authentication
     *
     * @return string
     */
    public function hash(): string
    {
        return $this->payload['hash'];
    }

    /**
     * Base64-encoded data hash for data authentication
     *
     * @param string $hash
     * @return self
     */
    public function withHash(string $hash): self
    {
        $payload = $this->payload;
        $payload['hash'] = $hash;
        return new self($payload);
    }

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @return string
     */
    public function secret(): string
    {
        return $this->payload['secret'];
    }

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @param string $secret
     * @return self
     */
    public function withSecret(string $secret): self
    {
        $payload = $this->payload;
        $payload['secret'] = $secret;
        return new self($payload);
    }

    /**
     * @return array
     */
    public function toPayload(): array
    {
        return $this->payload;
    }

    /**
     * @return self
     */
    public static function make(): self
    {
        return new self([]);
    }

    /**
     * @return \Tarik02\Telegram\Collections\EncryptedCredentialsCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\EncryptedCredentialsCollection
    {
        return \Tarik02\Telegram\Collections\EncryptedCredentialsCollection::make();
    }

    /**
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
