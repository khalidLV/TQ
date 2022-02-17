@extends('layouts.app')

@section('content')

<div class="container table-responsive py-5">

    <div class="title">
        <h1> News</h1>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Discraption</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                <th scope="col"></th>
            </tr>
        </thead>

        @foreach($news as $news)

        <tr>

        </tr>

        <tbody>
            <tr>

                <td>{{$news->id}}</td>
                <td>{{$news->title}}</td>
                <td>{{$news->discraption}}</td>
                <td>{{$news->image}}</td>
                <td>
                    <a href="{{ route('news.edit', ['id' => $news->id ])}}" class="btn btn-primary button primary edit">
                        Edit</a>
                </td>
               
                <td>
                    @csrf
                    @method('DELETE')
                    <form action="{{route('news.delete',['id'=> $news->id]) }}" method="POST"
                        class="btn btn-danger button primary delete float-left margin-left: 100px "> Delete </form>

                </td>
            </tr>



            @endforeach
        </tbody>
    </table>
    <a href="{{ route('news.create')}}" class="button primary btn btn-primary"> Create news </a>
</div>
    @endsection

    <script>

$(function() {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>