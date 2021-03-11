<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Methods;

/**
 * Class RevokeChatInviteLink
 *
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the revoked invite link as [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.
 *
 * @package Tarik02\Telegram\Methods
 * @link https://core.telegram.org/bots/api/#revokechatinvitelink
 */
class RevokeChatInviteLink extends Method implements \Tarik02\Telegram\Methods\HasRequiredChatId
{
    use \Tarik02\Telegram\Methods\HasRequiredChatIdTrait;

    /**
     * @return string
     */
    public function name(): string
    {
        return 'revokeChatInviteLink';
    }

    /**
     * Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @return int|string
     */
    public function chatId()
    {
        return $this->payload['chat_id'];
    }

    /**
     * Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
     *
     * @param int|string $chatId
     * @return self
     */
    public function withChatId($chatId): self
    {
        $payload = $this->payload;
        $payload['chat_id'] = $chatId;
        return new self($payload);
    }

    /**
     * The invite link to revoke
     *
     * @return string
     */
    public function inviteLink(): string
    {
        return $this->payload['invite_link'];
    }

    /**
     * The invite link to revoke
     *
     * @param string $inviteLink
     * @return self
     */
    public function withInviteLink(string $inviteLink): self
    {
        $payload = $this->payload;
        $payload['invite_link'] = $inviteLink;
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
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public static function createResponse($payload): \Tarik02\Telegram\Entities\ChatInviteLink
    {
        return \Tarik02\Telegram\Entities\ChatInviteLink::fromPayload($payload);
    }

    private array $payload;

    private function __construct(array $payload)
    {
        $this->payload = $payload;
    }
}
