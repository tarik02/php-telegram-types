<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InputFile
 *
 * This object represents the contents of a file to be uploaded. Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inputfile
 */
final class InputFile
{
    /**
     * @return string
     */
    public function payload(): string
    {
        return $this->payload;
    }

    /**
     * @param string $payload
     * @return self
     */
    public function withPayload(string $payload): self
    {
        $result = new self();
        $result->payload = $payload;
        return $result;
    }

    /**
     * @return string
     */
    public function toPayload(): string
    {
        return $this->payload;
    }

    /**
     * @return self
     */
    public static function make(): self
    {
        return new self();
    }

    /**
     * @return \Tarik02\Telegram\Collections\InputFileCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InputFileCollection
    {
        return \Tarik02\Telegram\Collections\InputFileCollection::make();
    }

    /**
     * @param string $payload
     * @return self
     */
    public static function fromPayload(string $payload): self
    {
        return self::make()
            ->withPayload($payload);
    }

    private string $payload;

    private function __construct()
    {
    }
}
