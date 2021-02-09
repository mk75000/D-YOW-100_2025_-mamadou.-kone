<?php

namespace App\Http\Controllers;
use App\Models\Ad;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($title) 
    {
        $product = Ad::where('title', $title)->firstorFail();
        return view('Ad', compact('product'));
    }
}
