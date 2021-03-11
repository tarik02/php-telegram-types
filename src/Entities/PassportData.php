<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class PassportData
 *
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#passportdata
 */
class PassportData implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @return \Tarik02\Telegram\Collections\EncryptedPassportElementCollection
     */
    public function data(): \Tarik02\Telegram\Collections\EncryptedPassportElementCollection
    {
        return \Tarik02\Telegram\Collections\EncryptedPassportElementCollection::fromPayload($this->payload['data'] ?? []);
    }

    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @param \Tarik02\Telegram\Collections\EncryptedPassportElementCollection $data
     * @return self
     */
    public function withData(\Tarik02\Telegram\Collections\EncryptedPassportElementCollection $data): self
    {
        $payload = $this->payload;
        $payload['data'] = $data->toPayload();
        return new self($payload);
    }

    /**
     * Encrypted credentials required to decrypt the data
     *
     * @return \Tarik02\Telegram\Entities\EncryptedCredentials
     */
    public function credentials(): \Tarik02\Telegram\Entities\EncryptedCredentials
    {
        return \Tarik02\Telegram\Entities\EncryptedCredentials::fromPayload($this->payload['credentials']);
    }

    /**
     * Encrypted credentials required to decrypt the data
     *
     * @param \Tarik02\Telegram\Entities\EncryptedCredentials $credentials
     * @return self
     */
    public function withCredentials(\Tarik02\Telegram\Entities\EncryptedCredentials $credentials): self
    {
        $payload = $this->payload;
        $payload['credentials'] = $credentials->toPayload();
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
     * @return \Tarik02\Telegram\Collections\PassportDataCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\PassportDataCollection
    {
        return \Tarik02\Telegram\Collections\PassportDataCollection::make();
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
