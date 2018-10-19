<?php

namespace App\Stripe;

use GuzzleHttp\Client;

class StripeConnect
{
    public static function getStripeUserId($code)
    {
        $client = new Client();
        $response = $client->request('POST', 'https://connect.stripe.com/oauth/token', [
            'query' => [
                'client_secret' => config('services.stripe.secret'),
                'code' => $code,
                'grant_type' => 'authorization_code'
            ]
        ]);

        $value = json_decode($response->getBody()->getContents(), true);

        return $value['stripe_user_id'];
    }
}
