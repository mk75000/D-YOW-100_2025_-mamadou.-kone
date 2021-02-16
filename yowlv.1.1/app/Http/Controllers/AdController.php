<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class AdController extends Controller
{
    public function reverse()
    {
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'title' => ['required', 'string', 'max:32'],
        //     'description' => ['required', 'string'],
        //     'price' => ['required'],
        //     'localisation' => ['required'],
        //     'images' => ['required', 'string']
        // ]);
        $image = $request->file('images');
        $imageName = Str::random(40) . '.' . $request->images->extension();
        $image->move('images/products', $imageName);

        Ad::create([
            'title' => $request->title,
            'description' => $request->description,

            'site' => $request->site,
            'images' => $imageName
        ]);



        return redirect('home')->with('success', 'Félicitation, votre avis à été postée.');
    }
}
