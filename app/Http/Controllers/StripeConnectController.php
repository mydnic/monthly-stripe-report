<?php

namespace App\Http\Controllers;

use App\Stripe\StripeConnect;
use Illuminate\Http\Request;

class StripeConnectController extends Controller
{
    public function connect()
    {
        return redirect('https://connect.stripe.com/oauth/authorize?response_type=code&client_id=' . env('STRIPE_CONNECT_ID') . '&scope=read_write&redirect_uri=' . route('stripe.connect.callback'));
    }

    public function callback(StripeAccount $accound)
    {
        $stripeUserId = StripeConnect::getStripeUserId(request('code'));

        $account->stripe_account_id = $stripeUserId;
        $account->save();

        flash('Your Stripe Account was successfully linked!')->success();

        return redirect()->route('billing.edit');
    }
}
