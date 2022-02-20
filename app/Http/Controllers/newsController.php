<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{
    public function index()
    {
        
        // $newsPG = news::orderBy('id', 'desc')->paginate(5);
        $news = news::all();
        $count = news::count();
        return view('new.index',  compact('news', 'count'));
    }

    public function create()    
    {
        $nc = category::all();

        return view('new.create',  compact('nc'));
    }

    public function store(Request $request)
    {

        $request->validate([

            'title' =>  'required',
            'discraption' => 'required'

        ]);

        $news = new news();

        $news->title   =  $request->title;
        $news->discraption =  $request->discraption;
        
    //    $image->storeAs('/images');
    //    $news->image = $request->$imagename;

    // $path = $request->image->storeAs('images', 'filename.jpg');
    
    // if ($request->hasFile('image')) {
    //     $file = $request->file('image');
    //     $ext = $file->getClientOriginalExtension();
    //     $source_name = $request->id;
    //     $filename = $source_name . '_' . 'image' . '_' . time() . '.' . $ext;
    //     $file->storeAs('public/images', $filename);
    // }

    // $news->image = $filename;

        $news->save();

   
        $news->categories()->syncWithoutDetaching($request->category_title);
 

        return redirect('/news')->with('status', 'news was updated !');
    }

    public function edit($id)
    {
        // $news = news::all();
        $news = news::find($id);
        $nc = category::all();

        return view('new.edit', compact('news','nc'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([

            'title' =>  'required',
            'discraption' => 'required'

        ]);

        $news = news::find($id);
        $news->title =  $request->title;
        $news->discraption =  $request->discraption;

        $news->save();

if (isset($request->news_title)) {
    $news->categories()->sync($request->news_title, false);
} else {
    $news->categories()->sync(array());
}

        // $news->categories()->attach($request->news_title);

        return redirect()->route('news.index',['status'=>'تم التعديل بنجاح']);

    }

        public function destroy(Request $request,$id)
    {
        $news = news::find($id) ;
        $news->delete();
        // $news->categories()->detach($request->category_title);
        $news->categories()->sync([]);
        return redirect('/news');
    }

}
