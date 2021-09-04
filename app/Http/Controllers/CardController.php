<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function add(Request $request)
    {
        $product = $request->get('product');

        dd($product);
    }
}
