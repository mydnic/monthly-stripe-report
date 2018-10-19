<?php

namespace App\Stripe;

use Stripe\Charge;

class StripeReport
{
    protected $account;

    public function __constrcut(StripeAccount $account)
    {
        $this->account = $account;
    }

    public function getLastMonth()
    {
        return Charge::all([
            'limit' => 100,
            'created' => [
                'gte' => now()->subMonth()->startOfMonth(),
                'lte' => now()->subMonth()->endOfMonth(),
            ],
            'expand' => [
                'data.balance_transaction',
                'data.customer',
            ]
        ], ['stripe_account' => $this->account->stripe_account_id]);
    }
}
