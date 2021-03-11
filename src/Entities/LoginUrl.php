<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class LoginUrl
 *
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. Serves as a great replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login) when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in:
 * 
 * Telegram apps support these buttons as of [version 5.7](https://telegram.org/blog/privacy-discussions-web-bots#meet-seamless-web-bots).
 * 
 * Sample bot: [@discussbot](https://t.me/discussbot)
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#loginurl
 */
class LoginUrl implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](https://core.telegram.org/widgets/login#receiving-authorization-data).  
     * 
     * **NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](https://core.telegram.org/widgets/login#checking-authorization).
     *
     * @return string
     */
    public function url(): string
    {
        return $this->payload['url'];
    }

    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](https://core.telegram.org/widgets/login#receiving-authorization-data).  
     * 
     * **NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](https://core.telegram.org/widgets/login#checking-authorization).
     *
     * @param string $url
     * @return self
     */
    public function withUrl(string $url): self
    {
        $payload = $this->payload;
        $payload['url'] = $url;
        return new self($payload);
    }

    /**
     * *Optional*. New text of the button in forwarded messages.
     *
     * @return string|null
     */
    public function forwardText(): ?string
    {
        return $this->payload['forward_text'] ?? null;
    }

    /**
     * *Optional*. New text of the button in forwarded messages.
     *
     * @param string|null $forwardText
     * @return self
     */
    public function withForwardText(?string $forwardText): self
    {
        $payload = $this->payload;
        $payload['forward_text'] = $forwardText;
        return new self($payload);
    }

    /**
     * *Optional*. Username of a bot, which will be used for user authorization. See [Setting up a bot](https://core.telegram.org/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot) for more details.
     *
     * @return string|null
     */
    public function botUsername(): ?string
    {
        return $this->payload['bot_username'] ?? null;
    }

    /**
     * *Optional*. Username of a bot, which will be used for user authorization. See [Setting up a bot](https://core.telegram.org/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot) for more details.
     *
     * @param string|null $botUsername
     * @return self
     */
    public function withBotUsername(?string $botUsername): self
    {
        $payload = $this->payload;
        $payload['bot_username'] = $botUsername;
        return new self($payload);
    }

    /**
     * *Optional*. Pass True to request the permission for your bot to send messages to the user.
     *
     * @return bool|null
     */
    public function requestWriteAccess(): ?bool
    {
        return $this->payload['request_write_access'] ?? null;
    }

    /**
     * *Optional*. Pass True to request the permission for your bot to send messages to the user.
     *
     * @param bool|null $requestWriteAccess
     * @return self
     */
    public function withRequestWriteAccess(?bool $requestWriteAccess): self
    {
        $payload = $this->payload;
        $payload['request_write_access'] = $requestWriteAccess;
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
     * @return \Tarik02\Telegram\Collections\LoginUrlCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\LoginUrlCollection
    {
        return \Tarik02\Telegram\Collections\LoginUrlCollection::make();
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
