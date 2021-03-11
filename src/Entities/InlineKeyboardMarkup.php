<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineKeyboardMarkup
 *
 * This object represents an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) that appears right next to the message it belongs to.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinekeyboardmarkup
 */
class InlineKeyboardMarkup implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Array of button rows, each represented by an Array of [InlineKeyboardButton](https://core.telegram.org/bots/api/#inlinekeyboardbutton) objects
     *
     * @return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollectionCollection
     */
    public function inlineKeyboard(): \Tarik02\Telegram\Collections\InlineKeyboardButtonCollectionCollection
    {
        return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollectionCollection::fromPayload($this->payload['inline_keyboard'] ?? []);
    }

    /**
     * Array of button rows, each represented by an Array of [InlineKeyboardButton](https://core.telegram.org/bots/api/#inlinekeyboardbutton) objects
     *
     * @param \Tarik02\Telegram\Collections\InlineKeyboardButtonCollectionCollection $inlineKeyboard
     * @return self
     */
    public function withInlineKeyboard(\Tarik02\Telegram\Collections\InlineKeyboardButtonCollectionCollection $inlineKeyboard): self
    {
        $payload = $this->payload;
        $payload['inline_keyboard'] = $inlineKeyboard->toPayload();
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
     * @return \Tarik02\Telegram\Collections\InlineKeyboardMarkupCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineKeyboardMarkupCollection
    {
        return \Tarik02\Telegram\Collections\InlineKeyboardMarkupCollection::make();
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
