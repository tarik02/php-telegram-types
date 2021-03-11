<?php

// NOTE: This file is auto-generated

namespace Tarik02\Telegram\Entities;

/**
 * Class Game
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @package Tarik02\Telegram\Entities
 * @link https://core.telegram.org/bots/api/#game
 */
class Game implements \Tarik02\Telegram\Contracts\Payloadable
{
    /**
     * Title of the game
     *
     * @return string
     */
    public function title(): string
    {
        return $this->payload['title'];
    }

    /**
     * Title of the game
     *
     * @param string $title
     * @return self
     */
    public function withTitle(string $title): self
    {
        $payload = $this->payload;
        $payload['title'] = $title;
        return new self($payload);
    }

    /**
     * Description of the game
     *
     * @return string
     */
    public function description(): string
    {
        return $this->payload['description'];
    }

    /**
     * Description of the game
     *
     * @param string $description
     * @return self
     */
    public function withDescription(string $description): self
    {
        $payload = $this->payload;
        $payload['description'] = $description;
        return new self($payload);
    }

    /**
     * Photo that will be displayed in the game message in chats.
     *
     * @return \Tarik02\Telegram\Collections\PhotoSizeCollection
     */
    public function photo(): \Tarik02\Telegram\Collections\PhotoSizeCollection
    {
        return \Tarik02\Telegram\Collections\PhotoSizeCollection::fromPayload($this->payload['photo'] ?? []);
    }

    /**
     * Photo that will be displayed in the game message in chats.
     *
     * @param \Tarik02\Telegram\Collections\PhotoSizeCollection $photo
     * @return self
     */
    public function withPhoto(\Tarik02\Telegram\Collections\PhotoSizeCollection $photo): self
    {
        $payload = $this->payload;
        $payload['photo'] = $photo->toPayload();
        return new self($payload);
    }

    /**
     * *Optional*. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls [setGameScore](https://core.telegram.org/bots/api/#setgamescore), or manually edited using [editMessageText](https://core.telegram.org/bots/api/#editmessagetext). 0-4096 characters.
     *
     * @return string|null
     */
    public function text(): ?string
    {
        return $this->payload['text'] ?? null;
    }

    /**
     * *Optional*. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls [setGameScore](https://core.telegram.org/bots/api/#setgamescore), or manually edited using [editMessageText](https://core.telegram.org/bots/api/#editmessagetext). 0-4096 characters.
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
     * *Optional*. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
     *
     * @return \Tarik02\Telegram\Collections\MessageEntityCollection|null
     */
    public function textEntities(): \Tarik02\Telegram\Collections\MessageEntityCollection
    {
        if (($this->payload['text_entities'] ?? null) === null) {
            return null;
        }
        return \Tarik02\Telegram\Collections\MessageEntityCollection::fromPayload($this->payload['text_entities'] ?? []);
    }

    /**
     * *Optional*. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
     *
     * @param \Tarik02\Telegram\Collections\MessageEntityCollection|null $textEntities
     * @return self
     */
    public function withTextEntities(\Tarik02\Telegram\Collections\MessageEntityCollection $textEntities): self
    {
        $payload = $this->payload;
        if ($textEntities !== null) {
            $payload['text_entities'] = $textEntities->toPayload();
        } else {
            unset($payload['text_entities']);
        }
        return new self($payload);
    }

    /**
     * *Optional*. Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather)
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
     * *Optional*. Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather)
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
     * @return \Tarik02\Telegram\Collections\GameCollection
     */
    public static function collection(): \Tarik02\Telegram\Collections\GameCollection
    {
        return \Tarik02\Telegram\Collections\GameCollection::make();
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
