<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\category;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {
        $news = news::all();
         $count = news::count();
         return view('new.index',  compact('news', 'count'));
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
       
        $news = new news();

        $news->title   =  $request->title ;
        $news->discraption =  $request->discraption ;
        $news->image =  $request->image ;

        $news->save();

        return redirect('/d')->with('news created !');

    }

    public function edit($id)
    {
        // $news = news::all();
        $news = news::find($id);
        
        return view('new.edit', compact('news'));
    }

        

}
