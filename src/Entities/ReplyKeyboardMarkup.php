<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ReplyKeyboardMarkup
 *
 * This object represents a [custom keyboard](https://core.telegram.org/bots#keyboards) with reply options (see [Introduction to bots](https://core.telegram.org/bots#keyboards) for details and examples).
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#replykeyboardmarkup
 */
class ReplyKeyboardMarkup implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Array of button rows, each represented by an Array of [KeyboardButton](https://core.telegram.org/bots/api/#keyboardbutton) objects
     *
     * @return \Tarik02\Telegram\Collections\KeyboardButtonCollectionCollection
     */
    public function keyboard(): \Tarik02\Telegram\Collections\KeyboardButtonCollectionCollection
    {
        return \Tarik02\Telegram\Collections\KeyboardButtonCollectionCollection::fromPayload($this->payload['keyboard'] ?? []);
    }

    /**
     * Array of button rows, each represented by an Array of [KeyboardButton](https://core.telegram.org/bots/api/#keyboardbutton) objects
     *
     * @param \Tarik02\Telegram\Collections\KeyboardButtonCollectionCollection $keyboard
     * @return self
     */
    public function withKeyboard(\Tarik02\Telegram\Collections\KeyboardButtonCollectionCollection $keyboard): self
    {
        $payload = $this->payload;
        $payload['keyboard'] = $keyboard->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to *false*, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     *
     * @return bool|null
     */
    public function resizeKeyboard(): bool
    {
        return $this->payload['resize_keyboard'] ?? false;
    }

    /**
     * *Optional*. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to *false*, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     *
     * @param bool|null $resizeKeyboard
     * @return self
     */
    public function withResizeKeyboard(bool $resizeKeyboard): self
    {
        $payload = $this->payload;
        $payload['resize_keyboard'] = $resizeKeyboard;
        return new self($payload);
    }

    /**
     * *Optional*. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to *false*.
     *
     * @return bool|null
     */
    public function oneTimeKeyboard(): bool
    {
        return $this->payload['one_time_keyboard'] ?? false;
    }

    /**
     * *Optional*. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to *false*.
     *
     * @param bool|null $oneTimeKeyboard
     * @return self
     */
    public function withOneTimeKeyboard(bool $oneTimeKeyboard): self
    {
        $payload = $this->payload;
        $payload['one_time_keyboard'] = $oneTimeKeyboard;
        return new self($payload);
    }

    /**
     * *Optional*. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     *
     * @return string|null
     */
    public function inputFieldPlaceholder(): ?string
    {
        return $this->payload['input_field_placeholder'] ?? null;
    }

    /**
     * *Optional*. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     *
     * @param string|null $inputFieldPlaceholder
     * @return self
     */
    public function withInputFieldPlaceholder(?string $inputFieldPlaceholder): self
    {
        $payload = $this->payload;
        $payload['input_field_placeholder'] = $inputFieldPlaceholder;
        return new self($payload);
    }

    /**
     * *Optional*. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.  
     * 
     * *Example:* A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
     *
     * @return bool|null
     */
    public function selective(): bool
    {
        return $this->payload['selective'] ?? false;
    }

    /**
     * *Optional*. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.  
     * 
     * *Example:* A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
     *
     * @param bool|null $selective
     * @return self
     */
    public function withSelective(bool $selective): self
    {
        $payload = $this->payload;
        $payload['selective'] = $selective;
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
     * @return \Tarik02\Telegram\Collections\ReplyKeyboardMarkupCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ReplyKeyboardMarkupCollection
    {
        return \Tarik02\Telegram\Collections\ReplyKeyboardMarkupCollection::make();
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
