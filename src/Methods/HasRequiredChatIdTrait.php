<?php

namespace Tarik02\Telegram\Methods;

/**
 * Trait HasRequiredChatIdTrait
 *
 * @package Tarik02\Telegram\Methods
 */
trait HasRequiredChatIdTrait
{
    /**
     * @return bool
     */
    public function hasValidChatId(): bool
    {
        return ! empty($this->payload['chat_id']);
    }
}
