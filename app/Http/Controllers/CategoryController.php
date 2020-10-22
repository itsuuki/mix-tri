<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;

use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categorys = Category::with('ancestors')->get();
        $category = Category::all();
        $cate = $category->filter(function($value, $key){

            return ($value->parent_id !== null);
        
        });
        // $jave = Category::select('id', 'genre', 'parent_id');
        // foreach ($category as $cate) {
        //     if ($cate->parent_id !== null) {
        //         echo var_dump($category->id);
        $jave = $cate->pluck('parent_id', 'genre')->flip();
        //     }
        // }
        // $jave = array_flip($jav);
        $javes = Category::pluck('id', 'genre');
        return view('category.index', ['categorys' => $categorys, 'jave' => $jave, 'javes' => $javes]);
    }

    public function create()
    {
        $categorys = Category::latest()->get();
        // echo var_dump($categorys);
        return view('category.create', ['categorys' => $categorys]);
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'genre' => $request->category
        ]);

        if($request->parent && $request->parent !== 'none'){
            $node = Category::find($request->parent);
            $node->appendNode($category);
        };

        return redirect()->back();
    }


}
