<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return \Stripe\Charge::all(['limit' => 3, "expand" =>array("data.balance_transaction", 'data.customer')]);

        return view('home');
    }
}
