<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function index()
    {
        $news = news::all();
         $count = news::count();
         return view('new.index',  compact('news', 'count'));
    }

    public function store(Request $request)
    {
dd('f');
        $request->validate([

            'title' =>  'required',
            'discraption' => 'required'

        ]);
       
        $news = new news();

        $news->title   =  $request->title ;
        $news->discraption =  $request->discraption ;
        $news->image =  $request->image ;

        $news->save();

        return redirect()->route('new.index')->with('news created !');

    }

        

}
