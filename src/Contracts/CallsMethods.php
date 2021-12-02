<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Contracts;

/**
 * Interface CallsMethods
 *
 * @package Tarik02\Telegram\Contracts
 */
interface CallsMethods
{
    /**
     * @param \Tarik02\Telegram\Methods\Method $method
     * @return mixed
     */
    public function call(\Tarik02\Telegram\Methods\Method $method);

    /**
     * @param \Tarik02\Telegram\Methods\GetUpdates $method
     * @return \Tarik02\Telegram\Collections\UpdateCollection
     */
    public function getUpdates(\Tarik02\Telegram\Methods\GetUpdates $method): \Tarik02\Telegram\Collections\UpdateCollection;

    /**
     * @param \Tarik02\Telegram\Methods\SetWebhook $method
     * @return bool
     */
    public function setWebhook(\Tarik02\Telegram\Methods\SetWebhook $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\DeleteWebhook $method
     * @return bool
     */
    public function deleteWebhook(\Tarik02\Telegram\Methods\DeleteWebhook $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\GetWebhookInfo $method
     * @return \Tarik02\Telegram\Entities\WebhookInfo
     */
    public function getWebhookInfo(\Tarik02\Telegram\Methods\GetWebhookInfo $method): \Tarik02\Telegram\Entities\WebhookInfo;

    /**
     * @param \Tarik02\Telegram\Methods\GetMe $method
     * @return \Tarik02\Telegram\Entities\User
     */
    public function getMe(\Tarik02\Telegram\Methods\GetMe $method): \Tarik02\Telegram\Entities\User;

    /**
     * @param \Tarik02\Telegram\Methods\LogOut $method
     * @return bool
     */
    public function logOut(\Tarik02\Telegram\Methods\LogOut $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\Close $method
     * @return bool
     */
    public function close(\Tarik02\Telegram\Methods\Close $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SendMessage $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendMessage(\Tarik02\Telegram\Methods\SendMessage $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\ForwardMessage $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function forwardMessage(\Tarik02\Telegram\Methods\ForwardMessage $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\CopyMessage $method
     * @return \Tarik02\Telegram\Entities\MessageId
     */
    public function copyMessage(\Tarik02\Telegram\Methods\CopyMessage $method): \Tarik02\Telegram\Entities\MessageId;

    /**
     * @param \Tarik02\Telegram\Methods\SendPhoto $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendPhoto(\Tarik02\Telegram\Methods\SendPhoto $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendAudio $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendAudio(\Tarik02\Telegram\Methods\SendAudio $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendDocument $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendDocument(\Tarik02\Telegram\Methods\SendDocument $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendVideo $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendVideo(\Tarik02\Telegram\Methods\SendVideo $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendAnimation $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendAnimation(\Tarik02\Telegram\Methods\SendAnimation $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendVoice $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendVoice(\Tarik02\Telegram\Methods\SendVoice $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendVideoNote $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendVideoNote(\Tarik02\Telegram\Methods\SendVideoNote $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendMediaGroup $method
     * @return \Tarik02\Telegram\Collections\MessageCollection
     */
    public function sendMediaGroup(\Tarik02\Telegram\Methods\SendMediaGroup $method): \Tarik02\Telegram\Collections\MessageCollection;

    /**
     * @param \Tarik02\Telegram\Methods\SendLocation $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendLocation(\Tarik02\Telegram\Methods\SendLocation $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageLiveLocation $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function editMessageLiveLocation(\Tarik02\Telegram\Methods\EditMessageLiveLocation $method);

    /**
     * @param \Tarik02\Telegram\Methods\StopMessageLiveLocation $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function stopMessageLiveLocation(\Tarik02\Telegram\Methods\StopMessageLiveLocation $method);

    /**
     * @param \Tarik02\Telegram\Methods\SendVenue $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendVenue(\Tarik02\Telegram\Methods\SendVenue $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendContact $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendContact(\Tarik02\Telegram\Methods\SendContact $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendPoll $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendPoll(\Tarik02\Telegram\Methods\SendPoll $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendDice $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendDice(\Tarik02\Telegram\Methods\SendDice $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SendChatAction $method
     * @return bool
     */
    public function sendChatAction(\Tarik02\Telegram\Methods\SendChatAction $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\GetUserProfilePhotos $method
     * @return \Tarik02\Telegram\Entities\UserProfilePhotos
     */
    public function getUserProfilePhotos(\Tarik02\Telegram\Methods\GetUserProfilePhotos $method): \Tarik02\Telegram\Entities\UserProfilePhotos;

    /**
     * @param \Tarik02\Telegram\Methods\GetFile $method
     * @return \Tarik02\Telegram\Entities\File
     */
    public function getFile(\Tarik02\Telegram\Methods\GetFile $method): \Tarik02\Telegram\Entities\File;

    /**
     * @param \Tarik02\Telegram\Methods\BanChatMember $method
     * @return bool
     */
    public function banChatMember(\Tarik02\Telegram\Methods\BanChatMember $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\UnbanChatMember $method
     * @return bool
     */
    public function unbanChatMember(\Tarik02\Telegram\Methods\UnbanChatMember $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\RestrictChatMember $method
     * @return bool
     */
    public function restrictChatMember(\Tarik02\Telegram\Methods\RestrictChatMember $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\PromoteChatMember $method
     * @return bool
     */
    public function promoteChatMember(\Tarik02\Telegram\Methods\PromoteChatMember $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetChatAdministratorCustomTitle $method
     * @return bool
     */
    public function setChatAdministratorCustomTitle(\Tarik02\Telegram\Methods\SetChatAdministratorCustomTitle $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetChatPermissions $method
     * @return bool
     */
    public function setChatPermissions(\Tarik02\Telegram\Methods\SetChatPermissions $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\ExportChatInviteLink $method
     * @return string
     */
    public function exportChatInviteLink(\Tarik02\Telegram\Methods\ExportChatInviteLink $method): string;

    /**
     * @param \Tarik02\Telegram\Methods\CreateChatInviteLink $method
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public function createChatInviteLink(\Tarik02\Telegram\Methods\CreateChatInviteLink $method): \Tarik02\Telegram\Entities\ChatInviteLink;

    /**
     * @param \Tarik02\Telegram\Methods\EditChatInviteLink $method
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public function editChatInviteLink(\Tarik02\Telegram\Methods\EditChatInviteLink $method): \Tarik02\Telegram\Entities\ChatInviteLink;

    /**
     * @param \Tarik02\Telegram\Methods\RevokeChatInviteLink $method
     * @return \Tarik02\Telegram\Entities\ChatInviteLink
     */
    public function revokeChatInviteLink(\Tarik02\Telegram\Methods\RevokeChatInviteLink $method): \Tarik02\Telegram\Entities\ChatInviteLink;

    /**
     * @param \Tarik02\Telegram\Methods\ApproveChatJoinRequest $method
     * @return bool
     */
    public function approveChatJoinRequest(\Tarik02\Telegram\Methods\ApproveChatJoinRequest $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\DeclineChatJoinRequest $method
     * @return bool
     */
    public function declineChatJoinRequest(\Tarik02\Telegram\Methods\DeclineChatJoinRequest $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetChatPhoto $method
     * @return bool
     */
    public function setChatPhoto(\Tarik02\Telegram\Methods\SetChatPhoto $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\DeleteChatPhoto $method
     * @return bool
     */
    public function deleteChatPhoto(\Tarik02\Telegram\Methods\DeleteChatPhoto $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetChatTitle $method
     * @return bool
     */
    public function setChatTitle(\Tarik02\Telegram\Methods\SetChatTitle $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetChatDescription $method
     * @return bool
     */
    public function setChatDescription(\Tarik02\Telegram\Methods\SetChatDescription $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\PinChatMessage $method
     * @return bool
     */
    public function pinChatMessage(\Tarik02\Telegram\Methods\PinChatMessage $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\UnpinChatMessage $method
     * @return bool
     */
    public function unpinChatMessage(\Tarik02\Telegram\Methods\UnpinChatMessage $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\UnpinAllChatMessages $method
     * @return bool
     */
    public function unpinAllChatMessages(\Tarik02\Telegram\Methods\UnpinAllChatMessages $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\LeaveChat $method
     * @return bool
     */
    public function leaveChat(\Tarik02\Telegram\Methods\LeaveChat $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\GetChat $method
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public function getChat(\Tarik02\Telegram\Methods\GetChat $method): \Tarik02\Telegram\Entities\Chat;

    /**
     * @param \Tarik02\Telegram\Methods\GetChatAdministrators $method
     * @return \Tarik02\Telegram\Collections\ChatMemberCollection
     */
    public function getChatAdministrators(\Tarik02\Telegram\Methods\GetChatAdministrators $method): \Tarik02\Telegram\Collections\ChatMemberCollection;

    /**
     * @param \Tarik02\Telegram\Methods\GetChatMemberCount $method
     * @return int
     */
    public function getChatMemberCount(\Tarik02\Telegram\Methods\GetChatMemberCount $method): int;

    /**
     * @param \Tarik02\Telegram\Methods\GetChatMember $method
     * @return \Tarik02\Telegram\Entities\ChatMember
     */
    public function getChatMember(\Tarik02\Telegram\Methods\GetChatMember $method): \Tarik02\Telegram\Entities\ChatMember;

    /**
     * @param \Tarik02\Telegram\Methods\SetChatStickerSet $method
     * @return bool
     */
    public function setChatStickerSet(\Tarik02\Telegram\Methods\SetChatStickerSet $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\DeleteChatStickerSet $method
     * @return bool
     */
    public function deleteChatStickerSet(\Tarik02\Telegram\Methods\DeleteChatStickerSet $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\AnswerCallbackQuery $method
     * @return bool
     */
    public function answerCallbackQuery(\Tarik02\Telegram\Methods\AnswerCallbackQuery $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetMyCommands $method
     * @return bool
     */
    public function setMyCommands(\Tarik02\Telegram\Methods\SetMyCommands $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\DeleteMyCommands $method
     * @return bool
     */
    public function deleteMyCommands(\Tarik02\Telegram\Methods\DeleteMyCommands $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\GetMyCommands $method
     * @return \Tarik02\Telegram\Collections\BotCommandCollection
     */
    public function getMyCommands(\Tarik02\Telegram\Methods\GetMyCommands $method): \Tarik02\Telegram\Collections\BotCommandCollection;

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageText $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function editMessageText(\Tarik02\Telegram\Methods\EditMessageText $method);

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageCaption $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function editMessageCaption(\Tarik02\Telegram\Methods\EditMessageCaption $method);

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageMedia $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function editMessageMedia(\Tarik02\Telegram\Methods\EditMessageMedia $method);

    /**
     * @param \Tarik02\Telegram\Methods\EditMessageReplyMarkup $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function editMessageReplyMarkup(\Tarik02\Telegram\Methods\EditMessageReplyMarkup $method);

    /**
     * @param \Tarik02\Telegram\Methods\StopPoll $method
     * @return \Tarik02\Telegram\Entities\Poll
     */
    public function stopPoll(\Tarik02\Telegram\Methods\StopPoll $method): \Tarik02\Telegram\Entities\Poll;

    /**
     * @param \Tarik02\Telegram\Methods\DeleteMessage $method
     * @return bool
     */
    public function deleteMessage(\Tarik02\Telegram\Methods\DeleteMessage $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SendSticker $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendSticker(\Tarik02\Telegram\Methods\SendSticker $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\GetStickerSet $method
     * @return \Tarik02\Telegram\Entities\StickerSet
     */
    public function getStickerSet(\Tarik02\Telegram\Methods\GetStickerSet $method): \Tarik02\Telegram\Entities\StickerSet;

    /**
     * @param \Tarik02\Telegram\Methods\UploadStickerFile $method
     * @return \Tarik02\Telegram\Entities\File
     */
    public function uploadStickerFile(\Tarik02\Telegram\Methods\UploadStickerFile $method): \Tarik02\Telegram\Entities\File;

    /**
     * @param \Tarik02\Telegram\Methods\CreateNewStickerSet $method
     * @return bool
     */
    public function createNewStickerSet(\Tarik02\Telegram\Methods\CreateNewStickerSet $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\AddStickerToSet $method
     * @return bool
     */
    public function addStickerToSet(\Tarik02\Telegram\Methods\AddStickerToSet $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetStickerPositionInSet $method
     * @return bool
     */
    public function setStickerPositionInSet(\Tarik02\Telegram\Methods\SetStickerPositionInSet $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\DeleteStickerFromSet $method
     * @return bool
     */
    public function deleteStickerFromSet(\Tarik02\Telegram\Methods\DeleteStickerFromSet $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetStickerSetThumb $method
     * @return bool
     */
    public function setStickerSetThumb(\Tarik02\Telegram\Methods\SetStickerSetThumb $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\AnswerInlineQuery $method
     * @return bool
     */
    public function answerInlineQuery(\Tarik02\Telegram\Methods\AnswerInlineQuery $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SendInvoice $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendInvoice(\Tarik02\Telegram\Methods\SendInvoice $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\AnswerShippingQuery $method
     * @return bool
     */
    public function answerShippingQuery(\Tarik02\Telegram\Methods\AnswerShippingQuery $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\AnswerPreCheckoutQuery $method
     * @return bool
     */
    public function answerPreCheckoutQuery(\Tarik02\Telegram\Methods\AnswerPreCheckoutQuery $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SetPassportDataErrors $method
     * @return bool
     */
    public function setPassportDataErrors(\Tarik02\Telegram\Methods\SetPassportDataErrors $method): bool;

    /**
     * @param \Tarik02\Telegram\Methods\SendGame $method
     * @return \Tarik02\Telegram\Entities\Message
     */
    public function sendGame(\Tarik02\Telegram\Methods\SendGame $method): \Tarik02\Telegram\Entities\Message;

    /**
     * @param \Tarik02\Telegram\Methods\SetGameScore $method
     * @return \Tarik02\Telegram\Entities\Message|bool
     */
    public function setGameScore(\Tarik02\Telegram\Methods\SetGameScore $method);

    /**
     * @param \Tarik02\Telegram\Methods\GetGameHighScores $method
     * @return \Tarik02\Telegram\Collections\GameHighScoreCollection
     */
    public function getGameHighScores(\Tarik02\Telegram\Methods\GetGameHighScores $method): \Tarik02\Telegram\Collections\GameHighScoreCollection;
}
