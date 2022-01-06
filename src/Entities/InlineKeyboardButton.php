<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class InlineKeyboardButton
 *
 * This object represents one button of an inline keyboard. You **must** use exactly one of the optional fields.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#inlinekeyboardbutton
 */
class InlineKeyboardButton implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Label text on the button
     *
     * @return string
     */
    public function text(): string
    {
        return $this->payload['text'];
    }

    /**
     * Label text on the button
     *
     * @param string $text
     * @return self
     */
    public function withText(string $text): self
    {
        $payload = $this->payload;
        $payload['text'] = $text;
        return new self($payload);
    }

    /**
     * *Optional*. HTTP or tg:// url to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     *
     * @return string|null
     */
    public function url(): ?string
    {
        return $this->payload['url'] ?? null;
    }

    /**
     * *Optional*. HTTP or tg:// url to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     *
     * @param string|null $url
     * @return self
     */
    public function withUrl(?string $url): self
    {
        $payload = $this->payload;
        $payload['url'] = $url;
        return new self($payload);
    }

    /**
     * *Optional*. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login).
     *
     * @return \Tarik02\Telegram\Entities\LoginUrl|null
     */
    public function loginUrl(): ?\Tarik02\Telegram\Entities\LoginUrl
    {
        if (($this->payload['login_url'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\LoginUrl::fromPayload($this->payload['login_url']);
    }

    /**
     * *Optional*. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login).
     *
     * @param \Tarik02\Telegram\Entities\LoginUrl|null $loginUrl
     * @return self
     */
    public function withLoginUrl(?\Tarik02\Telegram\Entities\LoginUrl $loginUrl): self
    {
        $payload = $this->payload;
        if ($loginUrl !== null) {
            $payload['login_url'] = $loginUrl->toPayload();
        } else {
            unset($payload['login_url']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Data to be sent in a [callback query](https://core.telegram.org/bots/api/#callbackquery) to the bot when button is pressed, 1-64 bytes
     *
     * @return string|null
     */
    public function callbackData(): ?string
    {
        return $this->payload['callback_data'] ?? null;
    }

    /**
     * *Optional*. Data to be sent in a [callback query](https://core.telegram.org/bots/api/#callbackquery) to the bot when button is pressed, 1-64 bytes
     *
     * @param string|null $callbackData
     * @return self
     */
    public function withCallbackData(?string $callbackData): self
    {
        $payload = $this->payload;
        $payload['callback_data'] = $callbackData;
        return new self($payload);
    }

    /**
     * *Optional*. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted.  
     * 
     * **Note:** This offers an easy way for users to start using your bot in [inline mode](/bots/inline) when they are currently in a private chat with it. Especially useful when combined with [*switch\_pm…*](https://core.telegram.org/bots/api/#answerinlinequery) actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
     *
     * @return string|null
     */
    public function switchInlineQuery(): ?string
    {
        return $this->payload['switch_inline_query'] ?? null;
    }

    /**
     * *Optional*. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted.  
     * 
     * **Note:** This offers an easy way for users to start using your bot in [inline mode](/bots/inline) when they are currently in a private chat with it. Especially useful when combined with [*switch\_pm…*](https://core.telegram.org/bots/api/#answerinlinequery) actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
     *
     * @param string|null $switchInlineQuery
     * @return self
     */
    public function withSwitchInlineQuery(?string $switchInlineQuery): self
    {
        $payload = $this->payload;
        $payload['switch_inline_query'] = $switchInlineQuery;
        return new self($payload);
    }

    /**
     * *Optional*. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot's username will be inserted.  
     * 
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
     *
     * @return string|null
     */
    public function switchInlineQueryCurrentChat(): ?string
    {
        return $this->payload['switch_inline_query_current_chat'] ?? null;
    }

    /**
     * *Optional*. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot's username will be inserted.  
     * 
     * This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
     *
     * @param string|null $switchInlineQueryCurrentChat
     * @return self
     */
    public function withSwitchInlineQueryCurrentChat(?string $switchInlineQueryCurrentChat): self
    {
        $payload = $this->payload;
        $payload['switch_inline_query_current_chat'] = $switchInlineQueryCurrentChat;
        return new self($payload);
    }

    /**
     * *Optional*. Description of the game that will be launched when the user presses the button.  
     * 
     * **NOTE:** This type of button **must** always be the first button in the first row.
     *
     * @return \Tarik02\Telegram\Entities\CallbackGame|null
     */
    public function callbackGame(): ?\Tarik02\Telegram\Entities\CallbackGame
    {
        if (($this->payload['callback_game'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\CallbackGame::fromPayload($this->payload['callback_game']);
    }

    /**
     * *Optional*. Description of the game that will be launched when the user presses the button.  
     * 
     * **NOTE:** This type of button **must** always be the first button in the first row.
     *
     * @param \Tarik02\Telegram\Entities\CallbackGame|null $callbackGame
     * @return self
     */
    public function withCallbackGame(?\Tarik02\Telegram\Entities\CallbackGame $callbackGame): self
    {
        $payload = $this->payload;
        if ($callbackGame !== null) {
            $payload['callback_game'] = $callbackGame->toPayload();
        } else {
            unset($payload['callback_game']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Specify *True*, to send a [Pay button](https://core.telegram.org/bots/api/#payments).  
     * 
     * **NOTE:** This type of button **must** always be the first button in the first row and can only be used in invoice messages.
     *
     * @return bool|null
     */
    public function pay(): bool
    {
        return $this->payload['pay'] ?? false;
    }

    /**
     * *Optional*. Specify *True*, to send a [Pay button](https://core.telegram.org/bots/api/#payments).  
     * 
     * **NOTE:** This type of button **must** always be the first button in the first row and can only be used in invoice messages.
     *
     * @param bool|null $pay
     * @return self
     */
    public function withPay(bool $pay): self
    {
        $payload = $this->payload;
        $payload['pay'] = $pay;
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
     * @return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection
    {
        return \Tarik02\Telegram\Collections\InlineKeyboardButtonCollection::make();
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
