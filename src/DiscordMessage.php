<?php

namespace RafiRandoni\DiscordWebhookChannel;

use RafiRandoni\DiscordWebhookChannel\Messages\Body;

class DiscordMessage
{
    protected $body;

    public function __construct(Body $body)
    {
        $this->body = $body;
    }

    public function build()
    {
        $template = [];

        $template = array_merge($template, $this->buildBody());

        return json_encode($template);
    }

    public function buildBody()
    {
        $body = [];

        if ($this->body->username()) {
            $body['username'] = $this->body->username();
        }

        if ($this->body->avatarUrl()) {
            $body['avatar_url'] = $this->body->avatarUrl();
        }

        if ($this->body->content()) {
            $body['content'] = $this->body->content();
        }

        if (count($this->body->embeds()) > 0) {
            $body['embeds'] = $this->buildEmbeds($this->body->embeds());
        }

        if ($this->body->tts()) {
            $body['tts'] = $this->body->tts();
        }

        if ($this->body->allowedMentions()) {
            $body['allowed_mentions'] = $this->body->allowedMentions();
        }

        return $body;
    }

    public function buildEmbeds($bodyEmbeds = [])
    {
        $embeds = [];
        foreach ($bodyEmbeds as $key => $bodyEmbed) {
            $embed = [];

            if ($bodyEmbed->color()) {
                $embed['color'] = $bodyEmbed->color();
            }

            if ($bodyEmbed->author()) {
                $embed['author'] = $bodyEmbed->author();
            }

            if ($bodyEmbed->title()) {
                $embed['title'] = $bodyEmbed->title();
            }

            if ($bodyEmbed->url()) {
                $embed['url'] = $bodyEmbed->url();
            }

            if ($bodyEmbed->description()) {
                $embed['description'] = $bodyEmbed->description();
            }

            if ($bodyEmbed->fields()) {
                $embed['fields'] = $bodyEmbed->fields();
            }

            if ($bodyEmbed->thumbnail()) {
                $embed['thumbnail'] = $bodyEmbed->thumbnail();
            }

            if ($bodyEmbed->image()) {
                $embed['image'] = $bodyEmbed->image();
            }

            if ($bodyEmbed->footer()) {
                $embed['footer'] = $bodyEmbed->footer();
            }

            if ($bodyEmbed->timestamp()) {
                $embed['timestamp'] = $bodyEmbed->timestamp();
            }

            $embeds[] = $embed;
        }

        return $embeds;
    }
}
