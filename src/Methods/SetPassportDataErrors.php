<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class SetPassportDataErrors
 *
 * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns *True* on success.
 * 
 * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#setpassportdataerrors
 */
class SetPassportDataErrors extends Method
{
    /**
     * @return string
     */
    public function name(): string
    {
        return 'setPassportDataErrors';
    }

    /**
     * User identifier
     *
     * @return int
     */
    public function userId(): int
    {
        return $this->payload['user_id'];
    }

    /**
     * User identifier
     *
     * @param int $userId
     * @return self
     */
    public function withUserId(int $userId): self
    {
        $payload = $this->payload;
        $payload['user_id'] = $userId;
        return new self($payload);
    }

    /**
     * A JSON-serialized array describing the errors
     *
     * @return \Tarik02\Telegram\Collections\PassportElementErrorCollection
     */
    public function errors(): \Tarik02\Telegram\Collections\PassportElementErrorCollection
    {
        return \Tarik02\Telegram\Collections\PassportElementErrorCollection::fromPayload($this->payload['errors'] ?? []);
    }

    /**
     * A JSON-serialized array describing the errors
     *
     * @param \Tarik02\Telegram\Collections\PassportElementErrorCollection $errors
     * @return self
     */
    public function withErrors(\Tarik02\Telegram\Collections\PassportElementErrorCollection $errors): self
    {
        $payload = $this->payload;
        $payload['errors'] = $errors->toPayload();
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
     * @param array $payload
     * @return self
     */
    public static function fromPayload(array $payload): self
    {
        return new self($payload);
    }

    /**
     * @param mixed $payload
     * @return bool
     */
    public static function createResponse($payload): bool
    {
        return $payload;
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
