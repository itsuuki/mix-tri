<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Item;

class FavoriteController extends Controller
{
    public function store(Item $item)
    {
        // echo var_dump($item);
        // $shops = Shop::where('id', $shop->id)->get();
        // $ojt = new Item;
        $item->users()->attach(Auth::id());
        return back();
    }



public function destroy(Item $item)
    {
        $item->users()->detach(Auth::id());
        return back();
    }
}
