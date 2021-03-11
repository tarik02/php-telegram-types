<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class EncryptedPassportElement
 *
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#encryptedpassportelement
 */
class EncryptedPassportElement implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Element type. One of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”, “phone\_number”, “email”.
     *
     * @return string
     */
    public function type(): string
    {
        return $this->payload['type'];
    }

    /**
     * Element type. One of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”, “phone\_number”, “email”.
     *
     * @param string $type
     * @return self
     */
    public function withType(string $type): self
    {
        $payload = $this->payload;
        $payload['type'] = $type;
        return new self($payload);
    }

    /**
     * *Optional*. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport” and “address” types. Can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @return string|null
     */
    public function data(): ?string
    {
        return $this->payload['data'] ?? null;
    }

    /**
     * *Optional*. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport” and “address” types. Can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @param string|null $data
     * @return self
     */
    public function withData(?string $data): self
    {
        $payload = $this->payload;
        $payload['data'] = $data;
        return new self($payload);
    }

    /**
     * *Optional*. User's verified phone number, available only for “phone\_number” type
     *
     * @return string|null
     */
    public function phoneNumber(): ?string
    {
        return $this->payload['phone_number'] ?? null;
    }

    /**
     * *Optional*. User's verified phone number, available only for “phone\_number” type
     *
     * @param string|null $phoneNumber
     * @return self
     */
    public function withPhoneNumber(?string $phoneNumber): self
    {
        $payload = $this->payload;
        $payload['phone_number'] = $phoneNumber;
        return new self($payload);
    }

    /**
     * *Optional*. User's verified email address, available only for “email” type
     *
     * @return string|null
     */
    public function email(): ?string
    {
        return $this->payload['email'] ?? null;
    }

    /**
     * *Optional*. User's verified email address, available only for “email” type
     *
     * @param string|null $email
     * @return self
     */
    public function withEmail(?string $email): self
    {
        $payload = $this->payload;
        $payload['email'] = $email;
        return new self($payload);
    }

    /**
     * *Optional*. Array of encrypted files with documents provided by the user, available for “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @return \Tarik02\Telegram\Collections\PassportFileCollection|null
     */
    public function files(): \Tarik02\Telegram\Collections\PassportFileCollection
    {
        if (($this->payload['files'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\PassportFileCollection::fromPayload($this->payload['files'] ?? []);
    }

    /**
     * *Optional*. Array of encrypted files with documents provided by the user, available for “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @param \Tarik02\Telegram\Collections\PassportFileCollection|null $files
     * @return self
     */
    public function withFiles(\Tarik02\Telegram\Collections\PassportFileCollection $files): self
    {
        $payload = $this->payload;
        if ($files !== null) {
            $payload['files'] = $files->toPayload();
        } else {
            unset($payload['files']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @return \Tarik02\Telegram\Entities\PassportFile|null
     */
    public function frontSide(): ?\Tarik02\Telegram\Entities\PassportFile
    {
        if (($this->payload['front_side'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PassportFile::fromPayload($this->payload['front_side']);
    }

    /**
     * *Optional*. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @param \Tarik02\Telegram\Entities\PassportFile|null $frontSide
     * @return self
     */
    public function withFrontSide(?\Tarik02\Telegram\Entities\PassportFile $frontSide): self
    {
        $payload = $this->payload;
        if ($frontSide !== null) {
            $payload['front_side'] = $frontSide->toPayload();
        } else {
            unset($payload['front_side']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Encrypted file with the reverse side of the document, provided by the user. Available for “driver\_license” and “identity\_card”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @return \Tarik02\Telegram\Entities\PassportFile|null
     */
    public function reverseSide(): ?\Tarik02\Telegram\Entities\PassportFile
    {
        if (($this->payload['reverse_side'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PassportFile::fromPayload($this->payload['reverse_side']);
    }

    /**
     * *Optional*. Encrypted file with the reverse side of the document, provided by the user. Available for “driver\_license” and “identity\_card”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @param \Tarik02\Telegram\Entities\PassportFile|null $reverseSide
     * @return self
     */
    public function withReverseSide(?\Tarik02\Telegram\Entities\PassportFile $reverseSide): self
    {
        $payload = $this->payload;
        if ($reverseSide !== null) {
            $payload['reverse_side'] = $reverseSide->toPayload();
        } else {
            unset($payload['reverse_side']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @return \Tarik02\Telegram\Entities\PassportFile|null
     */
    public function selfie(): ?\Tarik02\Telegram\Entities\PassportFile
    {
        if (($this->payload['selfie'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PassportFile::fromPayload($this->payload['selfie']);
    }

    /**
     * *Optional*. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver\_license”, “identity\_card” and “internal\_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @param \Tarik02\Telegram\Entities\PassportFile|null $selfie
     * @return self
     */
    public function withSelfie(?\Tarik02\Telegram\Entities\PassportFile $selfie): self
    {
        $payload = $this->payload;
        if ($selfie !== null) {
            $payload['selfie'] = $selfie->toPayload();
        } else {
            unset($payload['selfie']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @return \Tarik02\Telegram\Collections\PassportFileCollection|null
     */
    public function translation(): \Tarik02\Telegram\Collections\PassportFileCollection
    {
        if (($this->payload['translation'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\PassportFileCollection::fromPayload($this->payload['translation'] ?? []);
    }

    /**
     * *Optional*. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration” and “temporary\_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api/#encryptedcredentials).
     *
     * @param \Tarik02\Telegram\Collections\PassportFileCollection|null $translation
     * @return self
     */
    public function withTranslation(\Tarik02\Telegram\Collections\PassportFileCollection $translation): self
    {
        $payload = $this->payload;
        if ($translation !== null) {
            $payload['translation'] = $translation->toPayload();
        } else {
            unset($payload['translation']);
        }
        return new self($payload);
    }

    /**
     * Base64-encoded element hash for using in [PassportElementErrorUnspecified](https://core.telegram.org/bots/api/#passportelementerrorunspecified)
     *
     * @return string
     */
    public function hash(): string
    {
        return $this->payload['hash'];
    }

    /**
     * Base64-encoded element hash for using in [PassportElementErrorUnspecified](https://core.telegram.org/bots/api/#passportelementerrorunspecified)
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
     * @return \Tarik02\Telegram\Collections\EncryptedPassportElementCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\EncryptedPassportElementCollection
    {
        return \Tarik02\Telegram\Collections\EncryptedPassportElementCollection::make();
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
