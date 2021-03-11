<?php

namespace Tarik02\Telegram\Methods;

/**
 * Interface HasRequiredChatId
 *
 * @package Tarik02\Telegram\Methods
 */
interface HasRequiredChatId
{
    /**
     * @return int|string
     */
    public function chatId();

    /**
     * @param int|string $chatId
     * @return self
     */
    public function withChatId($chatId): self;

    /**
     * @return bool
     */
    public function hasValidChatId(): bool;
}
