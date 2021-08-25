<?php

namespace App\Services;


class Newsletter
{
    public function subscribe(string $email)
    {
        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us5'
        ]);

        return $mailchimp->lists->addListMember(config('services.mailchimp.list_id'), [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
