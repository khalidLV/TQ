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

       //   <div class="form-group">
       //     <input type="file" name="image" id="image" class="form-control-file">
        //</div>

        <br>
        <label>
            <h3> Choose Categories : </h3>
        </label>
        <hr>


        @foreach($nc as $category)

        <div class="custom-control custom-checkbox">
            <input type="checkbox" id="checkbox2" name="category_title[]" value="{{ $category->id }}">
            <label for="checkbox1">{{ $category->title }}</label>

        </div>
        </a>


        @endforeach



        <div class="form-group">
            <button type="submit" class="btn btn-primary button primary edit" style="margin-left:10%;"> Create </button>
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
