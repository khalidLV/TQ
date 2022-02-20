<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{

    public function index()
    {

        // $category = category::where('user_id', Auth::id())->paginate(5);
        $category = category::all();
        $count = category::count();
        return view('category.index',  compact('category', 'count'));
    }

    public function create()
    {
        $nc1 = news::all();

        return view('Category.create',compact('nc1'));
    }

    public function store(Request $request)
    {

        // $request->validate([

        //     'title' =>  'required',
        //     'discraption' => 'required'

        // ]);

        $category = new category();

        $category->title   =  $request->title;


        $category->save();

        $category->news()->attach($request->category_title);



        return redirect('/Category')->with('category created !');
    }

    public function edit($id)
    {
        // $news = news::all();

        $nc1 = news::all();
        $category = category::find($id);

        return view('category.edit', compact('category','nc1'));
    }

    public function update(Request $request, $id)
    {


        $request->validate([

            'title' =>  'required'

        ]);

        $category = category::find($id);
        $category->title =  $request->title;

        $category->save();


        // $category->news()->updateExistingPivot($category-$id, $request->category_title);


        // $category->news()->sync($request->category_title);

        $category->news()->update(["News_id"=>$request->category_title]);

        
                //  $category->syncWithPivotValues($request->category_title);

        // if($request->category_title == null)
        //     {
        //         // $all_category = category::orderBy('id', 'desc')->pluck('id')->toArray();
        //         // $category->detachcategory($all_category);

        //     //   $all_category = category::orderBy('id', 'desc')->pluck('id')->toArray();

        //                 $category->news()->sync($request->category_title);

        //     }
        //     else
        //     {
        //         // $category->synccategory($request->category_title);

        //     $category->news()->syncwithoutdetaching($request->category_title);
            

        //     }


        return redirect('/Category')->with('status', 'category was updated !');
    }



    public function home()
    {

        $countnews = news::count();
        $countcategory = category::count();
        return view('home',  compact('countcategory', 'countnews'));
    }

    public function destroy(Request $request,$id)
    {
        $category = category::find($id) ;
        $category->delete();
        // $category->news()->detach($request->news_title);
        $category->news()->sync([]);


        return redirect('/Category');
    }

}
