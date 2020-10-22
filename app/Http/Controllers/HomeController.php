<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

use App\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request){
        $keyword = $request->input('search');
        $query = Item::query();
        $items = $query->where('tname','like', '%' .$keyword. '%')->get();
        // echo var_dump($items->first()->id);
        $images = Image::where('item_id', $items->first()->id)->get();
        return view('Item/index', ['items' => $items, 'images' => $images]);

        // $shops = $query->get();


    }
}
