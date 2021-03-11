<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Traits;

/**
 * Trait CallsAsyncMethods
 *
 * @package Tarik02\Telegram\Traits
 */
trait CallsAsyncMethods
{
    /**
     * @param \Tarik02\Telegram\Methods\GetUpdates $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Collections\UpdateCollection>
     */
    public function getUpdatesAsync(\Tarik02\Telegram\Methods\GetUpdates $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetWebhook $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setWebhookAsync(\Tarik02\Telegram\Methods\SetWebhook $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\DeleteWebhook $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function deleteWebhookAsync(\Tarik02\Telegram\Methods\DeleteWebhook $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetWebhookInfo $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\WebhookInfo>
     */
    public function getWebhookInfoAsync(\Tarik02\Telegram\Methods\GetWebhookInfo $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetMe $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\User>
     */
    public function getMeAsync(\Tarik02\Telegram\Methods\GetMe $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\LogOut $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function logOutAsync(\Tarik02\Telegram\Methods\LogOut $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\Close $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function closeAsync(\Tarik02\Telegram\Methods\Close $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendMessage $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendMessageAsync(\Tarik02\Telegram\Methods\SendMessage $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\ForwardMessage $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function forwardMessageAsync(\Tarik02\Telegram\Methods\ForwardMessage $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\CopyMessage $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\MessageId>
     */
    public function copyMessageAsync(\Tarik02\Telegram\Methods\CopyMessage $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendPhoto $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendPhotoAsync(\Tarik02\Telegram\Methods\SendPhoto $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendAudio $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendAudioAsync(\Tarik02\Telegram\Methods\SendAudio $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendDocument $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendDocumentAsync(\Tarik02\Telegram\Methods\SendDocument $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendVideo $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendVideoAsync(\Tarik02\Telegram\Methods\SendVideo $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendAnimation $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendAnimationAsync(\Tarik02\Telegram\Methods\SendAnimation $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendVoice $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendVoiceAsync(\Tarik02\Telegram\Methods\SendVoice $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendVideoNote $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendVideoNoteAsync(\Tarik02\Telegram\Methods\SendVideoNote $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendMediaGroup $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Collections\MessageCollection>
     */
    public function sendMediaGroupAsync(\Tarik02\Telegram\Methods\SendMediaGroup $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendLocation $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendLocationAsync(\Tarik02\Telegram\Methods\SendLocation $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageLiveLocation $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function editMessageLiveLocationAsync(\Tarik02\Telegram\Methods\EditMessageLiveLocation $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\StopMessageLiveLocation $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function stopMessageLiveLocationAsync(\Tarik02\Telegram\Methods\StopMessageLiveLocation $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendVenue $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendVenueAsync(\Tarik02\Telegram\Methods\SendVenue $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendContact $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendContactAsync(\Tarik02\Telegram\Methods\SendContact $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendPoll $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendPollAsync(\Tarik02\Telegram\Methods\SendPoll $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendDice $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendDiceAsync(\Tarik02\Telegram\Methods\SendDice $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendChatAction $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function sendChatActionAsync(\Tarik02\Telegram\Methods\SendChatAction $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetUserProfilePhotos $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\UserProfilePhotos>
     */
    public function getUserProfilePhotosAsync(\Tarik02\Telegram\Methods\GetUserProfilePhotos $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetFile $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\File>
     */
    public function getFileAsync(\Tarik02\Telegram\Methods\GetFile $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\KickChatMember $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function kickChatMemberAsync(\Tarik02\Telegram\Methods\KickChatMember $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\UnbanChatMember $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function unbanChatMemberAsync(\Tarik02\Telegram\Methods\UnbanChatMember $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\RestrictChatMember $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function restrictChatMemberAsync(\Tarik02\Telegram\Methods\RestrictChatMember $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\PromoteChatMember $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function promoteChatMemberAsync(\Tarik02\Telegram\Methods\PromoteChatMember $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetChatAdministratorCustomTitle $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setChatAdministratorCustomTitleAsync(\Tarik02\Telegram\Methods\SetChatAdministratorCustomTitle $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetChatPermissions $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setChatPermissionsAsync(\Tarik02\Telegram\Methods\SetChatPermissions $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\ExportChatInviteLink $method
     * @return \GuzzleHttp\Promise\PromiseInterface<string>
     */
    public function exportChatInviteLinkAsync(\Tarik02\Telegram\Methods\ExportChatInviteLink $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\CreateChatInviteLink $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\ChatInviteLink>
     */
    public function createChatInviteLinkAsync(\Tarik02\Telegram\Methods\CreateChatInviteLink $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\EditChatInviteLink $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\ChatInviteLink>
     */
    public function editChatInviteLinkAsync(\Tarik02\Telegram\Methods\EditChatInviteLink $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\RevokeChatInviteLink $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\ChatInviteLink>
     */
    public function revokeChatInviteLinkAsync(\Tarik02\Telegram\Methods\RevokeChatInviteLink $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetChatPhoto $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setChatPhotoAsync(\Tarik02\Telegram\Methods\SetChatPhoto $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\DeleteChatPhoto $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function deleteChatPhotoAsync(\Tarik02\Telegram\Methods\DeleteChatPhoto $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetChatTitle $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setChatTitleAsync(\Tarik02\Telegram\Methods\SetChatTitle $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetChatDescription $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setChatDescriptionAsync(\Tarik02\Telegram\Methods\SetChatDescription $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\PinChatMessage $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function pinChatMessageAsync(\Tarik02\Telegram\Methods\PinChatMessage $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\UnpinChatMessage $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function unpinChatMessageAsync(\Tarik02\Telegram\Methods\UnpinChatMessage $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\UnpinAllChatMessages $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function unpinAllChatMessagesAsync(\Tarik02\Telegram\Methods\UnpinAllChatMessages $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\LeaveChat $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function leaveChatAsync(\Tarik02\Telegram\Methods\LeaveChat $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetChat $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Chat>
     */
    public function getChatAsync(\Tarik02\Telegram\Methods\GetChat $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetChatAdministrators $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Collections\ChatMemberCollection>
     */
    public function getChatAdministratorsAsync(\Tarik02\Telegram\Methods\GetChatAdministrators $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetChatMembersCount $method
     * @return \GuzzleHttp\Promise\PromiseInterface<int>
     */
    public function getChatMembersCountAsync(\Tarik02\Telegram\Methods\GetChatMembersCount $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetChatMember $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\ChatMember>
     */
    public function getChatMemberAsync(\Tarik02\Telegram\Methods\GetChatMember $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetChatStickerSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setChatStickerSetAsync(\Tarik02\Telegram\Methods\SetChatStickerSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\DeleteChatStickerSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function deleteChatStickerSetAsync(\Tarik02\Telegram\Methods\DeleteChatStickerSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\AnswerCallbackQuery $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function answerCallbackQueryAsync(\Tarik02\Telegram\Methods\AnswerCallbackQuery $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetMyCommands $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setMyCommandsAsync(\Tarik02\Telegram\Methods\SetMyCommands $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetMyCommands $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Collections\BotCommandCollection>
     */
    public function getMyCommandsAsync(\Tarik02\Telegram\Methods\GetMyCommands $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageText $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function editMessageTextAsync(\Tarik02\Telegram\Methods\EditMessageText $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageCaption $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function editMessageCaptionAsync(\Tarik02\Telegram\Methods\EditMessageCaption $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageMedia $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function editMessageMediaAsync(\Tarik02\Telegram\Methods\EditMessageMedia $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageReplyMarkup $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function editMessageReplyMarkupAsync(\Tarik02\Telegram\Methods\EditMessageReplyMarkup $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\StopPoll $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Poll>
     */
    public function stopPollAsync(\Tarik02\Telegram\Methods\StopPoll $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\DeleteMessage $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function deleteMessageAsync(\Tarik02\Telegram\Methods\DeleteMessage $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendSticker $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendStickerAsync(\Tarik02\Telegram\Methods\SendSticker $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetStickerSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\StickerSet>
     */
    public function getStickerSetAsync(\Tarik02\Telegram\Methods\GetStickerSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\UploadStickerFile $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\File>
     */
    public function uploadStickerFileAsync(\Tarik02\Telegram\Methods\UploadStickerFile $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\CreateNewStickerSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function createNewStickerSetAsync(\Tarik02\Telegram\Methods\CreateNewStickerSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\AddStickerToSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function addStickerToSetAsync(\Tarik02\Telegram\Methods\AddStickerToSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetStickerPositionInSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setStickerPositionInSetAsync(\Tarik02\Telegram\Methods\SetStickerPositionInSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\DeleteStickerFromSet $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function deleteStickerFromSetAsync(\Tarik02\Telegram\Methods\DeleteStickerFromSet $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetStickerSetThumb $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setStickerSetThumbAsync(\Tarik02\Telegram\Methods\SetStickerSetThumb $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\AnswerInlineQuery $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function answerInlineQueryAsync(\Tarik02\Telegram\Methods\AnswerInlineQuery $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendInvoice $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendInvoiceAsync(\Tarik02\Telegram\Methods\SendInvoice $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\AnswerShippingQuery $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function answerShippingQueryAsync(\Tarik02\Telegram\Methods\AnswerShippingQuery $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\AnswerPreCheckoutQuery $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function answerPreCheckoutQueryAsync(\Tarik02\Telegram\Methods\AnswerPreCheckoutQuery $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetPassportDataErrors $method
     * @return \GuzzleHttp\Promise\PromiseInterface<bool>
     */
    public function setPassportDataErrorsAsync(\Tarik02\Telegram\Methods\SetPassportDataErrors $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SendGame $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message>
     */
    public function sendGameAsync(\Tarik02\Telegram\Methods\SendGame $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\SetGameScore $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Entities\Message|bool>
     */
    public function setGameScoreAsync(\Tarik02\Telegram\Methods\SetGameScore $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

    /**
     * @param \Tarik02\Telegram\Methods\GetGameHighScores $method
     * @return \GuzzleHttp\Promise\PromiseInterface<\Tarik02\Telegram\Collections\GameHighScoreCollection>
     */
    public function getGameHighScoresAsync(\Tarik02\Telegram\Methods\GetGameHighScores $method): \GuzzleHttp\Promise\PromiseInterface
    {
        return $this->callAsync($method);
    }

}
