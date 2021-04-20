<?php

namespace RafiRandoni\DiscordWebhookChannel\Messages;

use RafiRandoni\DiscordWebhookChannel\Messages\Embed;

class Body
{
    protected $username;
    protected $avatarUrl;
    protected $content;
    protected $embeds = [];
    protected $tts;
    protected $allowedMentions;

    public function setUsername(string $username)
    {
        $this->username = $username;
        return $this;
    }

    public function setAvatarURL(string $url)
    {
        $this->avatarUrl = $url;
        return $this;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    public function setEmbeds(array $embeds)
    {
        $this->embeds = $embeds;
        return $this;
    }

    public function setTTS(string $tts)
    {
        $this->tts = $tts;
        return $this;
    }

    public function setAllowedMentions(array $parse, array $roles, array $users)
    {
        $this->allowedMentions = [
            'parse' => $parse,
            'roles' => $roles,
            'users' => $users,
        ];
        return $this;
    }

    public function username()
    {
        return $this->username;
    }

    public function avatarUrl()
    {
        return $this->avatarUrl;
    }

    public function content()
    {
        return $this->content;
    }

    public function embeds()
    {
        return $this->embeds;
    }

    public function tts()
    {
        return $this->tts;
    }

    public function allowedMentions()
    {
        if (isset($this->allowedMentions['parse']) && $this->allowedMentions['parse']) {
            return $this->allowedMentions;
        }

        return null;
    }
}
