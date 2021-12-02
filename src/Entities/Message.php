<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Message
 *
 * This object represents a message.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#message
 */
class Message implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Unique message identifier inside this chat
     *
     * @return int
     */
    public function messageId(): int
    {
        return $this->payload['message_id'];
    }

    /**
     * Unique message identifier inside this chat
     *
     * @param int $messageId
     * @return self
     */
    public function withMessageId(int $messageId): self
    {
        $payload = $this->payload;
        $payload['message_id'] = $messageId;
        return new self($payload);
    }

    /**
     * *Optional*. Sender, empty for messages sent to channels
     *
     * @return \Tarik02\Telegram\Entities\User|null
     */
    public function from(): ?\Tarik02\Telegram\Entities\User
    {
        if (($this->payload['from'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['from']);
    }

    /**
     * *Optional*. Sender, empty for messages sent to channels
     *
     * @param \Tarik02\Telegram\Entities\User|null $from
     * @return self
     */
    public function withFrom(?\Tarik02\Telegram\Entities\User $from): self
    {
        $payload = $this->payload;
        if ($from !== null) {
            $payload['from'] = $from->toPayload();
        } else {
            unset($payload['from']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Sender of the message, sent on behalf of a chat. The channel itself for channel messages. The supergroup itself for messages from anonymous group administrators. The linked channel for messages automatically forwarded to the discussion group
     *
     * @return \Tarik02\Telegram\Entities\Chat|null
     */
    public function senderChat(): ?\Tarik02\Telegram\Entities\Chat
    {
        if (($this->payload['sender_chat'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Chat::fromPayload($this->payload['sender_chat']);
    }

    /**
     * *Optional*. Sender of the message, sent on behalf of a chat. The channel itself for channel messages. The supergroup itself for messages from anonymous group administrators. The linked channel for messages automatically forwarded to the discussion group
     *
     * @param \Tarik02\Telegram\Entities\Chat|null $senderChat
     * @return self
     */
    public function withSenderChat(?\Tarik02\Telegram\Entities\Chat $senderChat): self
    {
        $payload = $this->payload;
        if ($senderChat !== null) {
            $payload['sender_chat'] = $senderChat->toPayload();
        } else {
            unset($payload['sender_chat']);
        }
        return new self($payload);
    }

    /**
     * Date the message was sent in Unix time
     *
     * @return int
     */
    public function date(): int
    {
        return $this->payload['date'];
    }

    /**
     * Date the message was sent in Unix time
     *
     * @param int $date
     * @return self
     */
    public function withDate(int $date): self
    {
        $payload = $this->payload;
        $payload['date'] = $date;
        return new self($payload);
    }

    /**
     * Conversation the message belongs to
     *
     * @return \Tarik02\Telegram\Entities\Chat
     */
    public function chat(): \Tarik02\Telegram\Entities\Chat
    {
        return \Tarik02\Telegram\Entities\Chat::fromPayload($this->payload['chat']);
    }

    /**
     * Conversation the message belongs to
     *
     * @param \Tarik02\Telegram\Entities\Chat $chat
     * @return self
     */
    public function withChat(\Tarik02\Telegram\Entities\Chat $chat): self
    {
        $payload = $this->payload;
        $payload['chat'] = $chat->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. For forwarded messages, sender of the original message
     *
     * @return \Tarik02\Telegram\Entities\User|null
     */
    public function forwardFrom(): ?\Tarik02\Telegram\Entities\User
    {
        if (($this->payload['forward_from'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['forward_from']);
    }

    /**
     * *Optional*. For forwarded messages, sender of the original message
     *
     * @param \Tarik02\Telegram\Entities\User|null $forwardFrom
     * @return self
     */
    public function withForwardFrom(?\Tarik02\Telegram\Entities\User $forwardFrom): self
    {
        $payload = $this->payload;
        if ($forwardFrom !== null) {
            $payload['forward_from'] = $forwardFrom->toPayload();
        } else {
            unset($payload['forward_from']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
     *
     * @return \Tarik02\Telegram\Entities\Chat|null
     */
    public function forwardFromChat(): ?\Tarik02\Telegram\Entities\Chat
    {
        if (($this->payload['forward_from_chat'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Chat::fromPayload($this->payload['forward_from_chat']);
    }

    /**
     * *Optional*. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
     *
     * @param \Tarik02\Telegram\Entities\Chat|null $forwardFromChat
     * @return self
     */
    public function withForwardFromChat(?\Tarik02\Telegram\Entities\Chat $forwardFromChat): self
    {
        $payload = $this->payload;
        if ($forwardFromChat !== null) {
            $payload['forward_from_chat'] = $forwardFromChat->toPayload();
        } else {
            unset($payload['forward_from_chat']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. For messages forwarded from channels, identifier of the original message in the channel
     *
     * @return int|null
     */
    public function forwardFromMessageId(): ?int
    {
        return $this->payload['forward_from_message_id'] ?? null;
    }

    /**
     * *Optional*. For messages forwarded from channels, identifier of the original message in the channel
     *
     * @param int|null $forwardFromMessageId
     * @return self
     */
    public function withForwardFromMessageId(?int $forwardFromMessageId): self
    {
        $payload = $this->payload;
        $payload['forward_from_message_id'] = $forwardFromMessageId;
        return new self($payload);
    }

    /**
     * *Optional*. For messages forwarded from channels, signature of the post author if present
     *
     * @return string|null
     */
    public function forwardSignature(): ?string
    {
        return $this->payload['forward_signature'] ?? null;
    }

    /**
     * *Optional*. For messages forwarded from channels, signature of the post author if present
     *
     * @param string|null $forwardSignature
     * @return self
     */
    public function withForwardSignature(?string $forwardSignature): self
    {
        $payload = $this->payload;
        $payload['forward_signature'] = $forwardSignature;
        return new self($payload);
    }

    /**
     * *Optional*. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     *
     * @return string|null
     */
    public function forwardSenderName(): ?string
    {
        return $this->payload['forward_sender_name'] ?? null;
    }

    /**
     * *Optional*. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     *
     * @param string|null $forwardSenderName
     * @return self
     */
    public function withForwardSenderName(?string $forwardSenderName): self
    {
        $payload = $this->payload;
        $payload['forward_sender_name'] = $forwardSenderName;
        return new self($payload);
    }

    /**
     * *Optional*. For forwarded messages, date the original message was sent in Unix time
     *
     * @return int|null
     */
    public function forwardDate(): ?int
    {
        return $this->payload['forward_date'] ?? null;
    }

    /**
     * *Optional*. For forwarded messages, date the original message was sent in Unix time
     *
     * @param int|null $forwardDate
     * @return self
     */
    public function withForwardDate(?int $forwardDate): self
    {
        $payload = $this->payload;
        $payload['forward_date'] = $forwardDate;
        return new self($payload);
    }

    /**
     * *Optional*. For replies, the original message. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it itself is a reply.
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function replyToMessage(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['reply_to_message'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['reply_to_message']);
    }

    /**
     * *Optional*. For replies, the original message. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it itself is a reply.
     *
     * @param \Tarik02\Telegram\Entities\Message|null $replyToMessage
     * @return self
     */
    public function withReplyToMessage(?\Tarik02\Telegram\Entities\Message $replyToMessage): self
    {
        $payload = $this->payload;
        if ($replyToMessage !== null) {
            $payload['reply_to_message'] = $replyToMessage->toPayload();
        } else {
            unset($payload['reply_to_message']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Bot through which the message was sent
     *
     * @return \Tarik02\Telegram\Entities\User|null
     */
    public function viaBot(): ?\Tarik02\Telegram\Entities\User
    {
        if (($this->payload['via_bot'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['via_bot']);
    }

    /**
     * *Optional*. Bot through which the message was sent
     *
     * @param \Tarik02\Telegram\Entities\User|null $viaBot
     * @return self
     */
    public function withViaBot(?\Tarik02\Telegram\Entities\User $viaBot): self
    {
        $payload = $this->payload;
        if ($viaBot !== null) {
            $payload['via_bot'] = $viaBot->toPayload();
        } else {
            unset($payload['via_bot']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Date the message was last edited in Unix time
     *
     * @return int|null
     */
    public function editDate(): ?int
    {
        return $this->payload['edit_date'] ?? null;
    }

    /**
     * *Optional*. Date the message was last edited in Unix time
     *
     * @param int|null $editDate
     * @return self
     */
    public function withEditDate(?int $editDate): self
    {
        $payload = $this->payload;
        $payload['edit_date'] = $editDate;
        return new self($payload);
    }

    /**
     * *Optional*. The unique identifier of a media message group this message belongs to
     *
     * @return string|null
     */
    public function mediaGroupId(): ?string
    {
        return $this->payload['media_group_id'] ?? null;
    }

    /**
     * *Optional*. The unique identifier of a media message group this message belongs to
     *
     * @param string|null $mediaGroupId
     * @return self
     */
    public function withMediaGroupId(?string $mediaGroupId): self
    {
        $payload = $this->payload;
        $payload['media_group_id'] = $mediaGroupId;
        return new self($payload);
    }

    /**
     * *Optional*. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     *
     * @return string|null
     */
    public function authorSignature(): ?string
    {
        return $this->payload['author_signature'] ?? null;
    }

    /**
     * *Optional*. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     *
     * @param string|null $authorSignature
     * @return self
     */
    public function withAuthorSignature(?string $authorSignature): self
    {
        $payload = $this->payload;
        $payload['author_signature'] = $authorSignature;
        return new self($payload);
    }

    /**
     * *Optional*. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     *
     * @return string|null
     */
    public function text(): ?string
    {
        return $this->payload['text'] ?? null;
    }

    /**
     * *Optional*. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     *
     * @param string|null $text
     * @return self
     */
    public function withText(?string $text): self
    {
        $payload = $this->payload;
        $payload['text'] = $text;
        return new self($payload);
    }

    /**
     * *Optional*. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function entities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['entities'] ?? []);
    }

    /**
     * *Optional*. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $entities
     * @return self
     */
    public function withEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $entities): self
    {
        $payload = $this->payload;
        if ($entities !== null) {
            $payload['entities'] = $entities->toPayload();
        } else {
            unset($payload['entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set
     *
     * @return \Tarik02\Telegram\Entities\Animation|null
     */
    public function animation(): ?\Tarik02\Telegram\Entities\Animation
    {
        if (($this->payload['animation'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Animation::fromPayload($this->payload['animation']);
    }

    /**
     * *Optional*. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set
     *
     * @param \Tarik02\Telegram\Entities\Animation|null $animation
     * @return self
     */
    public function withAnimation(?\Tarik02\Telegram\Entities\Animation $animation): self
    {
        $payload = $this->payload;
        if ($animation !== null) {
            $payload['animation'] = $animation->toPayload();
        } else {
            unset($payload['animation']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is an audio file, information about the file
     *
     * @return \Tarik02\Telegram\Entities\Audio|null
     */
    public function audio(): ?\Tarik02\Telegram\Entities\Audio
    {
        if (($this->payload['audio'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Audio::fromPayload($this->payload['audio']);
    }

    /**
     * *Optional*. Message is an audio file, information about the file
     *
     * @param \Tarik02\Telegram\Entities\Audio|null $audio
     * @return self
     */
    public function withAudio(?\Tarik02\Telegram\Entities\Audio $audio): self
    {
        $payload = $this->payload;
        if ($audio !== null) {
            $payload['audio'] = $audio->toPayload();
        } else {
            unset($payload['audio']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a general file, information about the file
     *
     * @return \Tarik02\Telegram\Entities\Document|null
     */
    public function document(): ?\Tarik02\Telegram\Entities\Document
    {
        if (($this->payload['document'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Document::fromPayload($this->payload['document']);
    }

    /**
     * *Optional*. Message is a general file, information about the file
     *
     * @param \Tarik02\Telegram\Entities\Document|null $document
     * @return self
     */
    public function withDocument(?\Tarik02\Telegram\Entities\Document $document): self
    {
        $payload = $this->payload;
        if ($document !== null) {
            $payload['document'] = $document->toPayload();
        } else {
            unset($payload['document']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a photo, available sizes of the photo
     *
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollection|null
     */
    public function photo(): ?\Tarik02\Telegram\Collections\PhotoSizeCollection
    {
        if (($this->payload['photo'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\PhotoSizeCollection::fromPayload($this->payload['photo'] ?? []);
    }

    /**
     * *Optional*. Message is a photo, available sizes of the photo
     *
     * @param \Tarik02\Telegram\Collections\PhotoSizeCollection|null $photo
     * @return self
     */
    public function withPhoto(?\Tarik02\Telegram\Collections\PhotoSizeCollection $photo): self
    {
        $payload = $this->payload;
        if ($photo !== null) {
            $payload['photo'] = $photo->toPayload();
        } else {
            unset($payload['photo']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a sticker, information about the sticker
     *
     * @return \Tarik02\Telegram\Entities\Sticker|null
     */
    public function sticker(): ?\Tarik02\Telegram\Entities\Sticker
    {
        if (($this->payload['sticker'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Sticker::fromPayload($this->payload['sticker']);
    }

    /**
     * *Optional*. Message is a sticker, information about the sticker
     *
     * @param \Tarik02\Telegram\Entities\Sticker|null $sticker
     * @return self
     */
    public function withSticker(?\Tarik02\Telegram\Entities\Sticker $sticker): self
    {
        $payload = $this->payload;
        if ($sticker !== null) {
            $payload['sticker'] = $sticker->toPayload();
        } else {
            unset($payload['sticker']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a video, information about the video
     *
     * @return \Tarik02\Telegram\Entities\Video|null
     */
    public function video(): ?\Tarik02\Telegram\Entities\Video
    {
        if (($this->payload['video'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Video::fromPayload($this->payload['video']);
    }

    /**
     * *Optional*. Message is a video, information about the video
     *
     * @param \Tarik02\Telegram\Entities\Video|null $video
     * @return self
     */
    public function withVideo(?\Tarik02\Telegram\Entities\Video $video): self
    {
        $payload = $this->payload;
        if ($video !== null) {
            $payload['video'] = $video->toPayload();
        } else {
            unset($payload['video']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
     *
     * @return \Tarik02\Telegram\Entities\VideoNote|null
     */
    public function videoNote(): ?\Tarik02\Telegram\Entities\VideoNote
    {
        if (($this->payload['video_note'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\VideoNote::fromPayload($this->payload['video_note']);
    }

    /**
     * *Optional*. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
     *
     * @param \Tarik02\Telegram\Entities\VideoNote|null $videoNote
     * @return self
     */
    public function withVideoNote(?\Tarik02\Telegram\Entities\VideoNote $videoNote): self
    {
        $payload = $this->payload;
        if ($videoNote !== null) {
            $payload['video_note'] = $videoNote->toPayload();
        } else {
            unset($payload['video_note']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a voice message, information about the file
     *
     * @return \Tarik02\Telegram\Entities\Voice|null
     */
    public function voice(): ?\Tarik02\Telegram\Entities\Voice
    {
        if (($this->payload['voice'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Voice::fromPayload($this->payload['voice']);
    }

    /**
     * *Optional*. Message is a voice message, information about the file
     *
     * @param \Tarik02\Telegram\Entities\Voice|null $voice
     * @return self
     */
    public function withVoice(?\Tarik02\Telegram\Entities\Voice $voice): self
    {
        $payload = $this->payload;
        if ($voice !== null) {
            $payload['voice'] = $voice->toPayload();
        } else {
            unset($payload['voice']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     *
     * @return string|null
     */
    public function caption(): ?string
    {
        return $this->payload['caption'] ?? null;
    }

    /**
     * *Optional*. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     *
     * @param string|null $caption
     * @return self
     */
    public function withCaption(?string $caption): self
    {
        $payload = $this->payload;
        $payload['caption'] = $caption;
        return new self($payload);
    }

    /**
     * *Optional*. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function captionEntities(): ?\Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['caption_entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['caption_entities'] ?? []);
    }

    /**
     * *Optional*. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $captionEntities
     * @return self
     */
    public function withCaptionEntities(?\Tarik02\Telegram\Collections\MessageEntityCollection $captionEntities): self
    {
        $payload = $this->payload;
        if ($captionEntities !== null) {
            $payload['caption_entities'] = $captionEntities->toPayload();
        } else {
            unset($payload['caption_entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a shared contact, information about the contact
     *
     * @return \Tarik02\Telegram\Entities\Contact|null
     */
    public function contact(): ?\Tarik02\Telegram\Entities\Contact
    {
        if (($this->payload['contact'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Contact::fromPayload($this->payload['contact']);
    }

    /**
     * *Optional*. Message is a shared contact, information about the contact
     *
     * @param \Tarik02\Telegram\Entities\Contact|null $contact
     * @return self
     */
    public function withContact(?\Tarik02\Telegram\Entities\Contact $contact): self
    {
        $payload = $this->payload;
        if ($contact !== null) {
            $payload['contact'] = $contact->toPayload();
        } else {
            unset($payload['contact']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a dice with random value
     *
     * @return \Tarik02\Telegram\Entities\Dice|null
     */
    public function dice(): ?\Tarik02\Telegram\Entities\Dice
    {
        if (($this->payload['dice'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Dice::fromPayload($this->payload['dice']);
    }

    /**
     * *Optional*. Message is a dice with random value
     *
     * @param \Tarik02\Telegram\Entities\Dice|null $dice
     * @return self
     */
    public function withDice(?\Tarik02\Telegram\Entities\Dice $dice): self
    {
        $payload = $this->payload;
        if ($dice !== null) {
            $payload['dice'] = $dice->toPayload();
        } else {
            unset($payload['dice']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api/#games)
     *
     * @return \Tarik02\Telegram\Entities\Game|null
     */
    public function game(): ?\Tarik02\Telegram\Entities\Game
    {
        if (($this->payload['game'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Game::fromPayload($this->payload['game']);
    }

    /**
     * *Optional*. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api/#games)
     *
     * @param \Tarik02\Telegram\Entities\Game|null $game
     * @return self
     */
    public function withGame(?\Tarik02\Telegram\Entities\Game $game): self
    {
        $payload = $this->payload;
        if ($game !== null) {
            $payload['game'] = $game->toPayload();
        } else {
            unset($payload['game']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a native poll, information about the poll
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
     * *Optional*. Message is a native poll, information about the poll
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
     * *Optional*. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set
     *
     * @return \Tarik02\Telegram\Entities\Venue|null
     */
    public function venue(): ?\Tarik02\Telegram\Entities\Venue
    {
        if (($this->payload['venue'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Venue::fromPayload($this->payload['venue']);
    }

    /**
     * *Optional*. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set
     *
     * @param \Tarik02\Telegram\Entities\Venue|null $venue
     * @return self
     */
    public function withVenue(?\Tarik02\Telegram\Entities\Venue $venue): self
    {
        $payload = $this->payload;
        if ($venue !== null) {
            $payload['venue'] = $venue->toPayload();
        } else {
            unset($payload['venue']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a shared location, information about the location
     *
     * @return \Tarik02\Telegram\Entities\Location|null
     */
    public function location(): ?\Tarik02\Telegram\Entities\Location
    {
        if (($this->payload['location'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Location::fromPayload($this->payload['location']);
    }

    /**
     * *Optional*. Message is a shared location, information about the location
     *
     * @param \Tarik02\Telegram\Entities\Location|null $location
     * @return self
     */
    public function withLocation(?\Tarik02\Telegram\Entities\Location $location): self
    {
        $payload = $this->payload;
        if ($location !== null) {
            $payload['location'] = $location->toPayload();
        } else {
            unset($payload['location']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @return \Tarik02\Telegram\Collections\UserCollection|null
     */
    public function newChatMembers(): ?\Tarik02\Telegram\Collections\UserCollection
    {
        if (($this->payload['new_chat_members'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\UserCollection::fromPayload($this->payload['new_chat_members'] ?? []);
    }

    /**
     * *Optional*. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     *
     * @param \Tarik02\Telegram\Collections\UserCollection|null $newChatMembers
     * @return self
     */
    public function withNewChatMembers(?\Tarik02\Telegram\Collections\UserCollection $newChatMembers): self
    {
        $payload = $this->payload;
        if ($newChatMembers !== null) {
            $payload['new_chat_members'] = $newChatMembers->toPayload();
        } else {
            unset($payload['new_chat_members']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @return \Tarik02\Telegram\Entities\User|null
     */
    public function leftChatMember(): ?\Tarik02\Telegram\Entities\User
    {
        if (($this->payload['left_chat_member'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\User::fromPayload($this->payload['left_chat_member']);
    }

    /**
     * *Optional*. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @param \Tarik02\Telegram\Entities\User|null $leftChatMember
     * @return self
     */
    public function withLeftChatMember(?\Tarik02\Telegram\Entities\User $leftChatMember): self
    {
        $payload = $this->payload;
        if ($leftChatMember !== null) {
            $payload['left_chat_member'] = $leftChatMember->toPayload();
        } else {
            unset($payload['left_chat_member']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. A chat title was changed to this value
     *
     * @return string|null
     */
    public function newChatTitle(): ?string
    {
        return $this->payload['new_chat_title'] ?? null;
    }

    /**
     * *Optional*. A chat title was changed to this value
     *
     * @param string|null $newChatTitle
     * @return self
     */
    public function withNewChatTitle(?string $newChatTitle): self
    {
        $payload = $this->payload;
        $payload['new_chat_title'] = $newChatTitle;
        return new self($payload);
    }

    /**
     * *Optional*. A chat photo was change to this value
     *
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollection|null
     */
    public function newChatPhoto(): ?\Tarik02\Telegram\Collections\PhotoSizeCollection
    {
        if (($this->payload['new_chat_photo'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\PhotoSizeCollection::fromPayload($this->payload['new_chat_photo'] ?? []);
    }

    /**
     * *Optional*. A chat photo was change to this value
     *
     * @param \Tarik02\Telegram\Collections\PhotoSizeCollection|null $newChatPhoto
     * @return self
     */
    public function withNewChatPhoto(?\Tarik02\Telegram\Collections\PhotoSizeCollection $newChatPhoto): self
    {
        $payload = $this->payload;
        if ($newChatPhoto !== null) {
            $payload['new_chat_photo'] = $newChatPhoto->toPayload();
        } else {
            unset($payload['new_chat_photo']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Service message: the chat photo was deleted
     *
     * @return bool|null
     */
    public function deleteChatPhoto(): bool
    {
        return $this->payload['delete_chat_photo'] ?? false;
    }

    /**
     * *Optional*. Service message: the chat photo was deleted
     *
     * @param bool|null $deleteChatPhoto
     * @return self
     */
    public function withDeleteChatPhoto(bool $deleteChatPhoto): self
    {
        $payload = $this->payload;
        $payload['delete_chat_photo'] = $deleteChatPhoto;
        return new self($payload);
    }

    /**
     * *Optional*. Service message: the group has been created
     *
     * @return bool|null
     */
    public function groupChatCreated(): bool
    {
        return $this->payload['group_chat_created'] ?? false;
    }

    /**
     * *Optional*. Service message: the group has been created
     *
     * @param bool|null $groupChatCreated
     * @return self
     */
    public function withGroupChatCreated(bool $groupChatCreated): self
    {
        $payload = $this->payload;
        $payload['group_chat_created'] = $groupChatCreated;
        return new self($payload);
    }

    /**
     * *Optional*. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a directly created supergroup.
     *
     * @return bool|null
     */
    public function supergroupChatCreated(): bool
    {
        return $this->payload['supergroup_chat_created'] ?? false;
    }

    /**
     * *Optional*. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a directly created supergroup.
     *
     * @param bool|null $supergroupChatCreated
     * @return self
     */
    public function withSupergroupChatCreated(bool $supergroupChatCreated): self
    {
        $payload = $this->payload;
        $payload['supergroup_chat_created'] = $supergroupChatCreated;
        return new self($payload);
    }

    /**
     * *Optional*. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a channel.
     *
     * @return bool|null
     */
    public function channelChatCreated(): bool
    {
        return $this->payload['channel_chat_created'] ?? false;
    }

    /**
     * *Optional*. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a channel.
     *
     * @param bool|null $channelChatCreated
     * @return self
     */
    public function withChannelChatCreated(bool $channelChatCreated): self
    {
        $payload = $this->payload;
        $payload['channel_chat_created'] = $channelChatCreated;
        return new self($payload);
    }

    /**
     * *Optional*. Service message: auto-delete timer settings changed in the chat
     *
     * @return \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged|null
     */
    public function messageAutoDeleteTimerChanged(): ?\Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged
    {
        if (($this->payload['message_auto_delete_timer_changed'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged::fromPayload($this->payload['message_auto_delete_timer_changed']);
    }

    /**
     * *Optional*. Service message: auto-delete timer settings changed in the chat
     *
     * @param \Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged|null $messageAutoDeleteTimerChanged
     * @return self
     */
    public function withMessageAutoDeleteTimerChanged(?\Tarik02\Telegram\Entities\MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged): self
    {
        $payload = $this->payload;
        if ($messageAutoDeleteTimerChanged !== null) {
            $payload['message_auto_delete_timer_changed'] = $messageAutoDeleteTimerChanged->toPayload();
        } else {
            unset($payload['message_auto_delete_timer_changed']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     */
    public function migrateToChatId(): ?int
    {
        return $this->payload['migrate_to_chat_id'] ?? null;
    }

    /**
     * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @param int|null $migrateToChatId
     * @return self
     */
    public function withMigrateToChatId(?int $migrateToChatId): self
    {
        $payload = $this->payload;
        $payload['migrate_to_chat_id'] = $migrateToChatId;
        return new self($payload);
    }

    /**
     * *Optional*. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @return int|null
     */
    public function migrateFromChatId(): ?int
    {
        return $this->payload['migrate_from_chat_id'] ?? null;
    }

    /**
     * *Optional*. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     *
     * @param int|null $migrateFromChatId
     * @return self
     */
    public function withMigrateFromChatId(?int $migrateFromChatId): self
    {
        $payload = $this->payload;
        $payload['migrate_from_chat_id'] = $migrateFromChatId;
        return new self($payload);
    }

    /**
     * *Optional*. Specified message was pinned. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it is itself a reply.
     *
     * @return \Tarik02\Telegram\Entities\Message|null
     */
    public function pinnedMessage(): ?\Tarik02\Telegram\Entities\Message
    {
        if (($this->payload['pinned_message'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Message::fromPayload($this->payload['pinned_message']);
    }

    /**
     * *Optional*. Specified message was pinned. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it is itself a reply.
     *
     * @param \Tarik02\Telegram\Entities\Message|null $pinnedMessage
     * @return self
     */
    public function withPinnedMessage(?\Tarik02\Telegram\Entities\Message $pinnedMessage): self
    {
        $payload = $this->payload;
        if ($pinnedMessage !== null) {
            $payload['pinned_message'] = $pinnedMessage->toPayload();
        } else {
            unset($payload['pinned_message']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is an invoice for a [payment](https://core.telegram.org/bots/api/#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api/#payments)
     *
     * @return \Tarik02\Telegram\Entities\Invoice|null
     */
    public function invoice(): ?\Tarik02\Telegram\Entities\Invoice
    {
        if (($this->payload['invoice'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\Invoice::fromPayload($this->payload['invoice']);
    }

    /**
     * *Optional*. Message is an invoice for a [payment](https://core.telegram.org/bots/api/#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api/#payments)
     *
     * @param \Tarik02\Telegram\Entities\Invoice|null $invoice
     * @return self
     */
    public function withInvoice(?\Tarik02\Telegram\Entities\Invoice $invoice): self
    {
        $payload = $this->payload;
        if ($invoice !== null) {
            $payload['invoice'] = $invoice->toPayload();
        } else {
            unset($payload['invoice']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Message is a service message about a successful payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api/#payments)
     *
     * @return \Tarik02\Telegram\Entities\SuccessfulPayment|null
     */
    public function successfulPayment(): ?\Tarik02\Telegram\Entities\SuccessfulPayment
    {
        if (($this->payload['successful_payment'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\SuccessfulPayment::fromPayload($this->payload['successful_payment']);
    }

    /**
     * *Optional*. Message is a service message about a successful payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api/#payments)
     *
     * @param \Tarik02\Telegram\Entities\SuccessfulPayment|null $successfulPayment
     * @return self
     */
    public function withSuccessfulPayment(?\Tarik02\Telegram\Entities\SuccessfulPayment $successfulPayment): self
    {
        $payload = $this->payload;
        if ($successfulPayment !== null) {
            $payload['successful_payment'] = $successfulPayment->toPayload();
        } else {
            unset($payload['successful_payment']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. The domain name of the website on which the user has logged in. [More about Telegram Login »](/widgets/login)
     *
     * @return string|null
     */
    public function connectedWebsite(): ?string
    {
        return $this->payload['connected_website'] ?? null;
    }

    /**
     * *Optional*. The domain name of the website on which the user has logged in. [More about Telegram Login »](/widgets/login)
     *
     * @param string|null $connectedWebsite
     * @return self
     */
    public function withConnectedWebsite(?string $connectedWebsite): self
    {
        $payload = $this->payload;
        $payload['connected_website'] = $connectedWebsite;
        return new self($payload);
    }

    /**
     * *Optional*. Telegram Passport data
     *
     * @return \Tarik02\Telegram\Entities\PassportData|null
     */
    public function passportData(): ?\Tarik02\Telegram\Entities\PassportData
    {
        if (($this->payload['passport_data'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\PassportData::fromPayload($this->payload['passport_data']);
    }

    /**
     * *Optional*. Telegram Passport data
     *
     * @param \Tarik02\Telegram\Entities\PassportData|null $passportData
     * @return self
     */
    public function withPassportData(?\Tarik02\Telegram\Entities\PassportData $passportData): self
    {
        $payload = $this->payload;
        if ($passportData !== null) {
            $payload['passport_data'] = $passportData->toPayload();
        } else {
            unset($payload['passport_data']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     *
     * @return \Tarik02\Telegram\Entities\ProximityAlertTriggered|null
     */
    public function proximityAlertTriggered(): ?\Tarik02\Telegram\Entities\ProximityAlertTriggered
    {
        if (($this->payload['proximity_alert_triggered'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\ProximityAlertTriggered::fromPayload($this->payload['proximity_alert_triggered']);
    }

    /**
     * *Optional*. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     *
     * @param \Tarik02\Telegram\Entities\ProximityAlertTriggered|null $proximityAlertTriggered
     * @return self
     */
    public function withProximityAlertTriggered(?\Tarik02\Telegram\Entities\ProximityAlertTriggered $proximityAlertTriggered): self
    {
        $payload = $this->payload;
        if ($proximityAlertTriggered !== null) {
            $payload['proximity_alert_triggered'] = $proximityAlertTriggered->toPayload();
        } else {
            unset($payload['proximity_alert_triggered']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Service message: voice chat scheduled
     *
     * @return \Tarik02\Telegram\Entities\VoiceChatScheduled|null
     */
    public function voiceChatScheduled(): ?\Tarik02\Telegram\Entities\VoiceChatScheduled
    {
        if (($this->payload['voice_chat_scheduled'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\VoiceChatScheduled::fromPayload($this->payload['voice_chat_scheduled']);
    }

    /**
     * *Optional*. Service message: voice chat scheduled
     *
     * @param \Tarik02\Telegram\Entities\VoiceChatScheduled|null $voiceChatScheduled
     * @return self
     */
    public function withVoiceChatScheduled(?\Tarik02\Telegram\Entities\VoiceChatScheduled $voiceChatScheduled): self
    {
        $payload = $this->payload;
        if ($voiceChatScheduled !== null) {
            $payload['voice_chat_scheduled'] = $voiceChatScheduled->toPayload();
        } else {
            unset($payload['voice_chat_scheduled']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Service message: voice chat started
     *
     * @return \Tarik02\Telegram\Entities\VoiceChatStarted|null
     */
    public function voiceChatStarted(): ?\Tarik02\Telegram\Entities\VoiceChatStarted
    {
        if (($this->payload['voice_chat_started'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\VoiceChatStarted::fromPayload($this->payload['voice_chat_started']);
    }

    /**
     * *Optional*. Service message: voice chat started
     *
     * @param \Tarik02\Telegram\Entities\VoiceChatStarted|null $voiceChatStarted
     * @return self
     */
    public function withVoiceChatStarted(?\Tarik02\Telegram\Entities\VoiceChatStarted $voiceChatStarted): self
    {
        $payload = $this->payload;
        if ($voiceChatStarted !== null) {
            $payload['voice_chat_started'] = $voiceChatStarted->toPayload();
        } else {
            unset($payload['voice_chat_started']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Service message: voice chat ended
     *
     * @return \Tarik02\Telegram\Entities\VoiceChatEnded|null
     */
    public function voiceChatEnded(): ?\Tarik02\Telegram\Entities\VoiceChatEnded
    {
        if (($this->payload['voice_chat_ended'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\VoiceChatEnded::fromPayload($this->payload['voice_chat_ended']);
    }

    /**
     * *Optional*. Service message: voice chat ended
     *
     * @param \Tarik02\Telegram\Entities\VoiceChatEnded|null $voiceChatEnded
     * @return self
     */
    public function withVoiceChatEnded(?\Tarik02\Telegram\Entities\VoiceChatEnded $voiceChatEnded): self
    {
        $payload = $this->payload;
        if ($voiceChatEnded !== null) {
            $payload['voice_chat_ended'] = $voiceChatEnded->toPayload();
        } else {
            unset($payload['voice_chat_ended']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Service message: new participants invited to a voice chat
     *
     * @return \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited|null
     */
    public function voiceChatParticipantsInvited(): ?\Tarik02\Telegram\Entities\VoiceChatParticipantsInvited
    {
        if (($this->payload['voice_chat_participants_invited'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited::fromPayload($this->payload['voice_chat_participants_invited']);
    }

    /**
     * *Optional*. Service message: new participants invited to a voice chat
     *
     * @param \Tarik02\Telegram\Entities\VoiceChatParticipantsInvited|null $voiceChatParticipantsInvited
     * @return self
     */
    public function withVoiceChatParticipantsInvited(?\Tarik02\Telegram\Entities\VoiceChatParticipantsInvited $voiceChatParticipantsInvited): self
    {
        $payload = $this->payload;
        if ($voiceChatParticipantsInvited !== null) {
            $payload['voice_chat_participants_invited'] = $voiceChatParticipantsInvited->toPayload();
        } else {
            unset($payload['voice_chat_participants_invited']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
     *
     * @return \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null
     */
    public function replyMarkup(): ?\Tarik02\Telegram\Entities\InlineKeyboardMarkup
    {
        if (($this->payload['reply_markup'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Entities\InlineKeyboardMarkup::fromPayload($this->payload['reply_markup']);
    }

    /**
     * *Optional*. Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
     *
     * @param \Tarik02\Telegram\Entities\InlineKeyboardMarkup|null $replyMarkup
     * @return self
     */
    public function withReplyMarkup(?\Tarik02\Telegram\Entities\InlineKeyboardMarkup $replyMarkup): self
    {
        $payload = $this->payload;
        if ($replyMarkup !== null) {
            $payload['reply_markup'] = $replyMarkup->toPayload();
        } else {
            unset($payload['reply_markup']);
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
     * @return \Tarik02\Telegram\Collections\MessageCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\MessageCollection
    {
        return \Tarik02\Telegram\Collections\MessageCollection::make();
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
