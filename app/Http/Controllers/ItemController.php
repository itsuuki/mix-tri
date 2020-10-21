<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

use App\Image;

use App\Favorite;

class ItemController extends Controller
{
    
    public function index()
    {
        $items = Item::all();
        $images = Image::all();
        return view('item/index', ['items' => $items, 'images' => $images]);
    }

    public function create()
    {
        return view('item.create');
    }

    public function store(Request $request)
    {
        // header('Content-Type: text/html; charset=UTF-8');
        $value = new Item;

        $i = 0;

        $value->tname = $request->input('tname');

        $value->price = $request->input('price');

        $value->description = $request->input('description');

        // $values = mb_convert_encoding($value, "UTF-8");

        $value->save();

        foreach ($request->nums as $val) {
            if ($request->img !== null) {
                $img = new Image;

                $img->image = $request->img[$i]->store('images', 'public');

                $img->item_id = $value->id;

                $img->save();
            }
            $i++;
        }

        return redirect('/');
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        $image = Image::where('item_id', $id)->get();
        $favorite = Favorite::where('item_id', $id)->first();
        // echo var_dump($favorite);
        return view('item.show', ['item' => $item, 'image' => $image, 'favorite' => $favorite]);
    }
}
