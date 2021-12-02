<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Traits;

/**
 * Trait HandlesUpdate
 *
 * @package Tarik02\Telegram\Traits
 */
trait HandlesUpdate
{
    /**
     * @param \Tarik02\Telegram\Entities\Update $update
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    final public function handleUpdate(\Tarik02\Telegram\Entities\Update $update): ?\Tarik02\Telegram\Contracts\Response
    {
        switch (true) {
            case null !== $message = $update->message():
                return $this->handleMessage($message);

            case null !== $editedMessage = $update->editedMessage():
                return $this->handleEditedMessage($editedMessage);

            case null !== $channelPost = $update->channelPost():
                return $this->handleChannelPost($channelPost);

            case null !== $editedChannelPost = $update->editedChannelPost():
                return $this->handleEditedChannelPost($editedChannelPost);

            case null !== $inlineQuery = $update->inlineQuery():
                return $this->handleInlineQuery($inlineQuery);

            case null !== $chosenInlineResult = $update->chosenInlineResult():
                return $this->handleChosenInlineResult($chosenInlineResult);

            case null !== $callbackQuery = $update->callbackQuery():
                return $this->handleCallbackQuery($callbackQuery);

            case null !== $shippingQuery = $update->shippingQuery():
                return $this->handleShippingQuery($shippingQuery);

            case null !== $preCheckoutQuery = $update->preCheckoutQuery():
                return $this->handlePreCheckoutQuery($preCheckoutQuery);

            case null !== $poll = $update->poll():
                return $this->handlePoll($poll);

            case null !== $pollAnswer = $update->pollAnswer():
                return $this->handlePollAnswer($pollAnswer);

            case null !== $myChatMember = $update->myChatMember():
                return $this->handleMyChatMember($myChatMember);

            case null !== $chatMember = $update->chatMember():
                return $this->handleChatMember($chatMember);

            case null !== $chatJoinRequest = $update->chatJoinRequest():
                return $this->handleChatJoinRequest($chatJoinRequest);

            default:
                throw new \InvalidArgumentException('Supplied update is empty');
        }
    }

    /**
     * @param \Tarik02\Telegram\Entities\Message $message
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleMessage(\Tarik02\Telegram\Entities\Message $message): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\Message $editedMessage
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleEditedMessage(\Tarik02\Telegram\Entities\Message $editedMessage): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\Message $channelPost
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleChannelPost(\Tarik02\Telegram\Entities\Message $channelPost): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\Message $editedChannelPost
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleEditedChannelPost(\Tarik02\Telegram\Entities\Message $editedChannelPost): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\InlineQuery $inlineQuery
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleInlineQuery(\Tarik02\Telegram\Entities\InlineQuery $inlineQuery): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\ChosenInlineResult $chosenInlineResult
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleChosenInlineResult(\Tarik02\Telegram\Entities\ChosenInlineResult $chosenInlineResult): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\CallbackQuery $callbackQuery
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleCallbackQuery(\Tarik02\Telegram\Entities\CallbackQuery $callbackQuery): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\ShippingQuery $shippingQuery
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleShippingQuery(\Tarik02\Telegram\Entities\ShippingQuery $shippingQuery): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\PreCheckoutQuery $preCheckoutQuery
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handlePreCheckoutQuery(\Tarik02\Telegram\Entities\PreCheckoutQuery $preCheckoutQuery): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\Poll $poll
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handlePoll(\Tarik02\Telegram\Entities\Poll $poll): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\PollAnswer $pollAnswer
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handlePollAnswer(\Tarik02\Telegram\Entities\PollAnswer $pollAnswer): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\ChatMemberUpdated $myChatMember
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleMyChatMember(\Tarik02\Telegram\Entities\ChatMemberUpdated $myChatMember): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\ChatMemberUpdated $chatMember
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleChatMember(\Tarik02\Telegram\Entities\ChatMemberUpdated $chatMember): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }

    /**
     * @param \Tarik02\Telegram\Entities\ChatJoinRequest $chatJoinRequest
     * @return \Tarik02\Telegram\Contracts\Response|null
     */
    public function handleChatJoinRequest(\Tarik02\Telegram\Entities\ChatJoinRequest $chatJoinRequest): ?\Tarik02\Telegram\Contracts\Response
    {
        return null;
    }
}
