<?php

namespace RafiRandoni\DiscordWebhookChannel;

use Illuminate\Notifications\Notification;

class DiscordWebhookChannel
{
    protected $http;

    public function __construct($http)
    {
        $this->http = $http;
    }

    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toDiscord($notifiable);

        $url = $notifiable->routeNotificationFor('discord', $notification);
        if (! $url) {
            return ;
        }

        // $this->http->post($url, );
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $message);

        $result = curl_exec($curl);
        $errors = curl_error($curl);
        curl_close($curl);
    }
}
