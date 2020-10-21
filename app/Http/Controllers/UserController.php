<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Address;

use App\Favorite;

use App\Item;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $address = Address::where('user_id', $id)->first();
        $favorite_ids = Favorite::where('user_id', $id)->pluck('item_id')->toArray();
        $fav_items = Item::whereIn('id', array_values($favorite_ids))->get();
        return view('user.show', ['user' => $user, 'address' => $address, 'fav_items' => $fav_items]);
        // echo var_dump($fav_items);
    }
}
// ※view/user/show.blade.php