@extends('layouts.app')

@section('content')


<div class="container table-responsive py-4">

    <div class="row">
        <div class=" offset-md-2">
            <h3>Edit News</h3>
            <hr>

            <form action="{{route('news.update',['id'=> $news->id])}}" method="POST">
                @method('PUT')


                @csrf
                <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$news->title}}">
                </div>

                <div class="form-group">
                    <label for="discraption"> description</label>
                    <textarea name="discraption" id="discraption" cols="20" rows="5"
                        class="form-control">{{$news->discraption}} </textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="coverImage" id="coverImage" class="form-control-file">
                </div>

                <br>
                <label>
                    <h3> Edit Categories : </h3>
                </label>
                <hr>
                @foreach($nc as $category)

                <div class="custom-control custom-checkbox">


                    <li>
                        {{$category->title}}
                        <input type="checkbox" id="checkbox1" name="category_title[]" value="{{$category->id}}" {{
                            $news->hascat($category->id) ? 'checked':'' }} >
                    </li>

                </div>
                </a>


                @endforeach



                <div class="form-group">
                    <button type="submit" class="btn btn-primary button primary edit" style="margin-left:10%;"> Update
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>
@endsection
<script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
</script>