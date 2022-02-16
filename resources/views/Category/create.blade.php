@extends('layouts.app')

@section('content')


<div class="container table-responsive py-4">

    <h3>Create category</h3>
    <hr>

    <form action="{{route('category.store')}}" method="POST">


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
            <button type="submit" class="btn btn-primary button primary edit " style="margin-left:10%;"> Create </button>
        </div>

    </form>

</div>

@endsection