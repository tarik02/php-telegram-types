<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Update
 *
 * This [object](https://core.telegram.org/bots/api/#available-types) represents an incoming update.  
 * At most **one** of the optional parameters can be present in any given update.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#update
 */
class Update implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using [Webhooks](https://core.telegram.org/bots/api/#setwebhook), since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     *
     * @return int
     */
    public function updateId(): int
    {
        return $this->payload['update_id'];
    }

    /**
     * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using [Webhooks](https://core.telegram.org/bots/api/#setwebhook), since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     *
     * @param int $updateId
     * @return self
     */
    public function withUpdateId(int $updateId): self
    {
        $payload = $this->payload;
        $payload['update_id'] = $updateId;
        return new self($payload);
    }

    /**
     * *Optional*. New incoming message of any kind — text, photo, sticker, etc.
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function message(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['message'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['message']);
    }

    /**
     * *Optional*. New incoming message of any kind — text, photo, sticker, etc.
     *
     * @param \Tarik02\Telegram\Entities\Message|null $message
     * @return self
     */
    public function withMessage(?\Tarik02\Telegram\Entities\Message $message): self
    {
        $payload = $this->payload;
        if ($message !== null) {
            $payload['message'] = $message->toPayload();
        } else {
            unset($payload['message']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New version of a message that is known to the bot and was edited
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function editedMessage(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['edited_message'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['edited_message']);
    }

    /**
     * *Optional*. New version of a message that is known to the bot and was edited
     *
     * @param \Tarik02\Telegram\Entities\Message|null $editedMessage
     * @return self
     */
    public function withEditedMessage(?\Tarik02\Telegram\Entities\Message $editedMessage): self
    {
        $payload = $this->payload;
        if ($editedMessage !== null) {
            $payload['edited_message'] = $editedMessage->toPayload();
        } else {
            unset($payload['edited_message']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New incoming channel post of any kind — text, photo, sticker, etc.
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function channelPost(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['channel_post'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['channel_post']);
    }

    /**
     * *Optional*. New incoming channel post of any kind — text, photo, sticker, etc.
     *
     * @param \Tarik02\Telegram\Entities\Message|null $channelPost
     * @return self
     */
    public function withChannelPost(?\Tarik02\Telegram\Entities\Message $channelPost): self
    {
        $payload = $this->payload;
        if ($channelPost !== null) {
            $payload['channel_post'] = $channelPost->toPayload();
        } else {
            unset($payload['channel_post']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New version of a channel post that is known to the bot and was edited
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function editedChannelPost(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['edited_channel_post'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['edited_channel_post']);
    }

    /**
     * *Optional*. New version of a channel post that is known to the bot and was edited
     *
     * @param \Tarik02\Telegram\Entities\Message|null $editedChannelPost
     * @return self
     */
    public function withEditedChannelPost(?\Tarik02\Telegram\Entities\Message $editedChannelPost): self
    {
        $payload = $this->payload;
        if ($editedChannelPost !== null) {
            $payload['edited_channel_post'] = $editedChannelPost->toPayload();
        } else {
            unset($payload['edited_channel_post']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New incoming [inline](https://core.telegram.org/bots/api/#inline-mode) query
     *
     * @return \Tarik02\Telegram\Entities\InlineQuery|null
     */
    public function inlineQuery(): ?\Tarik02\Telegram\Entities\InlineQuery
    {
        if (($this->payload['inline_query'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InlineQuery::fromPayload($this->payload['inline_query']);
    }

    /**
     * *Optional*. New incoming [inline](https://core.telegram.org/bots/api/#inline-mode) query
     *
     * @param \Tarik02\Telegram\Entities\InlineQuery|null $inlineQuery
     * @return self
     */
    public function withInlineQuery(?\Tarik02\Telegram\Entities\InlineQuery $inlineQuery): self
    {
        $payload = $this->payload;
        if ($inlineQuery !== null) {
            $payload['inline_query'] = $inlineQuery->toPayload();
        } else {
            unset($payload['inline_query']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. The result of an [inline](https://core.telegram.org/bots/api/#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
     *
     * @return \Tarik02\Telegram\Entities\ChosenInlineResult|null
     */
    public function chosenInlineResult(): ?\Tarik02\Telegram\Entities\ChosenInlineResult
    {
        if (($this->payload['chosen_inline_result'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChosenInlineResult::fromPayload($this->payload['chosen_inline_result']);
    }

    /**
     * *Optional*. The result of an [inline](https://core.telegram.org/bots/api/#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
     *
     * @param \Tarik02\Telegram\Entities\ChosenInlineResult|null $chosenInlineResult
     * @return self
     */
    public function withChosenInlineResult(?\Tarik02\Telegram\Entities\ChosenInlineResult $chosenInlineResult): self
    {
        $payload = $this->payload;
        if ($chosenInlineResult !== null) {
            $payload['chosen_inline_result'] = $chosenInlineResult->toPayload();
        } else {
            unset($payload['chosen_inline_result']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New incoming callback query
     *
     * @return \Tarik02\Telegram\Entities\CallbackQuery|null
     */
    public function callbackQuery(): ?\Tarik02\Telegram\Entities\CallbackQuery
    {
        if (($this->payload['callback_query'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\CallbackQuery::fromPayload($this->payload['callback_query']);
    }

    /**
     * *Optional*. New incoming callback query
     *
     * @param \Tarik02\Telegram\Entities\CallbackQuery|null $callbackQuery
     * @return self
     */
    public function withCallbackQuery(?\Tarik02\Telegram\Entities\CallbackQuery $callbackQuery): self
    {
        $payload = $this->payload;
        if ($callbackQuery !== null) {
            $payload['callback_query'] = $callbackQuery->toPayload();
        } else {
            unset($payload['callback_query']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New incoming shipping query. Only for invoices with flexible price
     *
     * @return \Tarik02\Telegram\Entities\ShippingQuery|null
     */
    public function shippingQuery(): ?\Tarik02\Telegram\Entities\ShippingQuery
    {
        if (($this->payload['shipping_query'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ShippingQuery::fromPayload($this->payload['shipping_query']);
    }

    /**
     * *Optional*. New incoming shipping query. Only for invoices with flexible price
     *
     * @param \Tarik02\Telegram\Entities\ShippingQuery|null $shippingQuery
     * @return self
     */
    public function withShippingQuery(?\Tarik02\Telegram\Entities\ShippingQuery $shippingQuery): self
    {
        $payload = $this->payload;
        if ($shippingQuery !== null) {
            $payload['shipping_query'] = $shippingQuery->toPayload();
        } else {
            unset($payload['shipping_query']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New incoming pre-checkout query. Contains full information about checkout
     *
     * @return \Tarik02\Telegram\Entities\PreCheckoutQuery|null
     */
    public function preCheckoutQuery(): ?\Tarik02\Telegram\Entities\PreCheckoutQuery
    {
        if (($this->payload['pre_checkout_query'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PreCheckoutQuery::fromPayload($this->payload['pre_checkout_query']);
    }

    /**
     * *Optional*. New incoming pre-checkout query. Contains full information about checkout
     *
     * @param \Tarik02\Telegram\Entities\PreCheckoutQuery|null $preCheckoutQuery
     * @return self
     */
    public function withPreCheckoutQuery(?\Tarik02\Telegram\Entities\PreCheckoutQuery $preCheckoutQuery): self
    {
        $payload = $this->payload;
        if ($preCheckoutQuery !== null) {
            $payload['pre_checkout_query'] = $preCheckoutQuery->toPayload();
        } else {
            unset($payload['pre_checkout_query']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     *
     * @return \Tarik02\Telegram\Entities\Poll|null
     */
    public function poll(): ?\Tarik02\Telegram\Entities\Poll
    {
        if (($this->payload['poll'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Poll::fromPayload($this->payload['poll']);
    }

    /**
     * *Optional*. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     *
     * @param \Tarik02\Telegram\Entities\Poll|null $poll
     * @return self
     */
    public function withPoll(?\Tarik02\Telegram\Entities\Poll $poll): self
    {
        $payload = $this->payload;
        if ($poll !== null) {
            $payload['poll'] = $poll->toPayload();
        } else {
            unset($payload['poll']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     *
     * @return \Tarik02\Telegram\Entities\PollAnswer|null
     */
    public function pollAnswer(): ?\Tarik02\Telegram\Entities\PollAnswer
    {
        if (($this->payload['poll_answer'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PollAnswer::fromPayload($this->payload['poll_answer']);
    }

    /**
     * *Optional*. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     *
     * @param \Tarik02\Telegram\Entities\PollAnswer|null $pollAnswer
     * @return self
     */
    public function withPollAnswer(?\Tarik02\Telegram\Entities\PollAnswer $pollAnswer): self
    {
        $payload = $this->payload;
        if ($pollAnswer !== null) {
            $payload['poll_answer'] = $pollAnswer->toPayload();
        } else {
            unset($payload['poll_answer']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     *
     * @return \Tarik02\Telegram\Entities\ChatMemberUpdated|null
     */
    public function myChatMember(): ?\Tarik02\Telegram\Entities\ChatMemberUpdated
    {
        if (($this->payload['my_chat_member'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChatMemberUpdated::fromPayload($this->payload['my_chat_member']);
    }

    /**
     * *Optional*. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     *
     * @param \Tarik02\Telegram\Entities\ChatMemberUpdated|null $myChatMember
     * @return self
     */
    public function withMyChatMember(?\Tarik02\Telegram\Entities\ChatMemberUpdated $myChatMember): self
    {
        $payload = $this->payload;
        if ($myChatMember !== null) {
            $payload['my_chat_member'] = $myChatMember->toPayload();
        } else {
            unset($payload['my_chat_member']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat\_member” in the list of *allowed\_updates* to receive these updates.
     *
     * @return \Tarik02\Telegram\Entities\ChatMemberUpdated|null
     */
    public function chatMember(): ?\Tarik02\Telegram\Entities\ChatMemberUpdated
    {
        if (($this->payload['chat_member'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ChatMemberUpdated::fromPayload($this->payload['chat_member']);
    }

    /**
     * *Optional*. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat\_member” in the list of *allowed\_updates* to receive these updates.
     *
     * @param \Tarik02\Telegram\Entities\ChatMemberUpdated|null $chatMember
     * @return self
     */
    public function withChatMember(?\Tarik02\Telegram\Entities\ChatMemberUpdated $chatMember): self
    {
        $payload = $this->payload;
        if ($chatMember !== null) {
            $payload['chat_member'] = $chatMember->toPayload();
        } else {
            unset($payload['chat_member']);
        }
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
     * @return \Tarik02\Telegram\Collections\UpdateCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\UpdateCollection
    {
        return \Tarik02\Telegram\Collections\UpdateCollection::make();
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
