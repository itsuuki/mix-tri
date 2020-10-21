<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Address;

class AddressController extends Controller
{
    public function create()
    {
        return view('address.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number' => 'required|digits:7',
            'city' => 'required',
        ],
        [
            'number.required' => '郵便は必須です。数字でお願いいたします。',
            'city.required'  => '住所は必須です。',
        ]);
        $addre = new Address;

        $addre->number = $request->input('number');

        $addre->city = $request->input('city');

        $addre->user_id = $request->user()->id;

        $addre->save();

        return redirect('/');
    }
}
