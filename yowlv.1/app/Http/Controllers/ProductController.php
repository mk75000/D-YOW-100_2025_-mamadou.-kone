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
        public function index(){

           
            $product=Ad::all();
            return view('yowl', compact('product')); 
            
         }
      }
       
        
 
