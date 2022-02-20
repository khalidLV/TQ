@extends('layouts.app')

@section('content')


<div class="bg6">

    <div class="container table-responsive py-4">

        <h3>Create Category</h3>
        <hr>

        <form action="{{route('category.store')}}" method="POST">


            @csrf
            <div class="form-group">
                <label for="title"> Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <br>
            <label>
                <h3> Choose Categories : </h3>
            </label>
            <hr>


            @foreach($nc1 as $news)

            <div class="custom-control custom-checkbox">
                <input type="checkbox" id="checkbox2" name="category_title[]" value="{{ $news->id }}">
                <label for="checkbox2">{{ $news->title }}</label>

            </div>
            </a>


            @endforeach


            <div class="form-group">
                <button type="submit" class="btn btn-primary button primary edit " style="margin-left:10%;"> Create
                </button>
                <button type="submit" class="ui btn btn-danger primary"
                    href="{{redirect()->getUrlGenerator()->previous() }}">إلغاء</a> </button>

            </div>

        </form>

    </div>

    @endsection

    <script>
        $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>