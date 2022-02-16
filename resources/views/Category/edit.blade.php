

@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-12 offset-md-2">
        <h3>Create category</h3>
        <hr>
        
        <form action="{{route('category.store')}}" method="POST">

           
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