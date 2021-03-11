<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class ReplyKeyboardRemove
 *
 * Upon receiving a message with this object, Telegram clients will remove the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see [ReplyKeyboardMarkup](https://core.telegram.org/bots/api/#replykeyboardmarkup)).
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#replykeyboardremove
 */
class ReplyKeyboardRemove implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use *one\_time\_keyboard* in [ReplyKeyboardMarkup](https://core.telegram.org/bots/api/#replykeyboardmarkup))
     *
     * @return bool
     */
    public function removeKeyboard(): bool
    {
        return $this->payload['remove_keyboard'];
    }

    /**
     * Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use *one\_time\_keyboard* in [ReplyKeyboardMarkup](https://core.telegram.org/bots/api/#replykeyboardmarkup))
     *
     * @param bool $removeKeyboard
     * @return self
     */
    public function withRemoveKeyboard(bool $removeKeyboard): self
    {
        $payload = $this->payload;
        $payload['remove_keyboard'] = $removeKeyboard;
        return new self($payload);
    }

    /**
     * *Optional*. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.  
     * 
     * *Example:* A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.
     *
     * @return bool|null
     */
    public function selective(): ?bool
    {
        return $this->payload['selective'] ?? null;
    }

    /**
     * *Optional*. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.  
     * 
     * *Example:* A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.
     *
     * @param bool|null $selective
     * @return self
     */
    public function withSelective(?bool $selective): self
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
     * @return \Tarik02\Telegram\Collections\ReplyKeyboardRemoveCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\ReplyKeyboardRemoveCollection
    {
        return \Tarik02\Telegram\Collections\ReplyKeyboardRemoveCollection::make();
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
