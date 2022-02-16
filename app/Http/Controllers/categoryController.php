<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{

    public function index()
    {

    $category = category::all();
    $count = category::count();
    return view('category.index',  compact('category', 'count'));
}

public function create()
    {
        return view('new.create');
    }

    public function store(Request $request)
    {
        
        // $request->validate([

        //     'title' =>  'required',
        //     'discraption' => 'required'

        // ]);
       
        $category = new category();

        $category->title   =  $request->title ;
        

        $category->save();

        return redirect('/c')->with('category created !');

    }

    public function edit($id)
    {
        // $news = news::all();
        $category = category::find($id);
        
        return view('category.edit', compact('category'));
    }

    public function update(Request $request,$id)
    {

        
        $request->validate([

            'title' =>  'required'

        ]);

        $category = category::find($id);
        $category->title =  $request->title ;
      
        $category->save();

        return redirect('/c')->with('status', 'category was updated !');

    }

    

    public function home()
    {

    $countnews = news::count();
    $countcategory = category::count();
    return view('home',  compact('countcategory', 'countnews'));
}


}

