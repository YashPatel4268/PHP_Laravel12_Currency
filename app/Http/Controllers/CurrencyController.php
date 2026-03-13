<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        return view('currency.index');
    }

    public function convert(Request $request)
    {
        $amount = $request->amount;
        $from = $request->from;
        $to = $request->to;

        $converted = Currency::convert($amount, $from, $to);

        return view('currency.index', compact('converted', 'amount', 'from', 'to'));
    }
}