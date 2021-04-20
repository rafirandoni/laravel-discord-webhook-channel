<?php

namespace RafiRandoni\DiscordWebhookChannel\Messages;

class Embed
{
    protected $color;
    protected $author;
    protected $title;
    protected $url;
    protected $description;
    protected $fields = [];
    protected $thumbnail;
    protected $image;
    protected $footer;
    protected $timestamp;

    public function setColor(string $color)
    {
        $this->color = $color;
        return $this;
    }

    public function setAuthor(string $name, string $url, string $icon_url)
    {
        $this->author = [
            'name' => $name,
            'url' => $url,
            'icon_url' => $icon_url,
        ];
        return $this;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setURL(string $url)
    {
        $this->url = $url;
        return $this;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    public function setField(string $name, string $value, string $inline)
    {
        $this->fields[] = [
            'name' => $name,
            'value' => $value,
            'inline' => $inline,
        ];
        return $this;
    }

    public function setThumbnail(string $url)
    {
        $this->thumbnail = [
            'url' => $url,
        ];
        return $this;
    }

    public function setImage(string $url)
    {
        $this->image = [
            'url' => $url,
        ];
        return $this;
    }

    public function setFooter(string $text, string $icon_url)
    {
        $this->footer = [
            'text' => $text,
            'icon_url' => $icon_url,
        ];
        return $this;
    }

    public function setTimestamp(string $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    public function color()
    {
        return $this->color;
    }

    public function author()
    {
        return $this->author;
    }

    public function title()
    {
        return $this->title;
    }

    public function url()
    {
        return $this->url;
    }

    public function description()
    {
        return $this->description;
    }

    public function fields()
    {
        return $this->fields;
    }

    public function thumbnail()
    {
        return $this->thumbnail;
    }

    public function image()
    {
        return $this->image;
    }

    public function footer()
    {
        return $this->footer;
    }

    public function timestamp()
    {
        return $this->timestamp;
    }

}
