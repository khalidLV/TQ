

@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-12 offset-md-2">
        <h3>Edit Category</h3>
        <hr>
        u
        <form action="{{route('category.update',['id'=> $category->id])}}" method="POST">

            @method('PUT')
           @csrf
           <div class="form-group">
               <label for="title"> Title</label>
               <input type="text" name="title" id="title" class="form-control" value="{{$category->title}}" >
           </div>
  
           

           

           <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left:10%;"> Update </button>
        </div>
       
        </form>

    </div>
    
   </div>

   @endsection