<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    private $product;

    /**
     * Method __construct
     *
     * @param Product $product 
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Method index
     *
     * @return void
     */
    public function index()
    {
        $products = $this->product->limit(8)->orderBy('id', 'DESC')->get();

        return view('welcome', compact('products'));
    }

    /**
     * Method single
     *
     * @param $slug $slug
     *
     * @return void
     */
    public function single($slug)
    {
        $product = $this->product->whereSlug($slug)->first();

        return view('single', compact('product'));
    }
}
