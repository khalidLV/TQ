@extends('layouts.app')

@section('content')


<div class="container table-responsive py-4"> 


        <h3>Create News</h3>
        <hr>
        
        <form action="{{route('news.store')}}" method="POST">

           
           @csrf
           <div class="form-group">
               <label for="title"> Title</label>
               <input type="text" name="title" id="title" class="form-control">
           </div>
  
           <div class="form-group">
              <label for="discraption"> description</label>
              <textarea name="discraption" id="discraption" cols="20" rows="5" class="form-control"></textarea>
          </div>

           <div class="form-group">
               <input type="file" name="coverImage" id="coverImage" class="form-control-file">
           </div>

           

           <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left:10%;"> Create </button>
        </div>
       
        </form>

    </div>
    
   @endsection