@extends('layouts.app')

@section('content')



<div class="container table-responsive py-4">
  <div class="title">
    <h1> Category</h1>
  </div>
  <table class="table table-bordered table-hover">

    <thead class="thead-dark">
      <tr>

        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
        <th scope="col"></th>

      </tr>
    </thead>



    @foreach($category as $category)


    <tr>

    </tr>

    <tbody>
      <tr>

        <td>{{$category->id}}</td>
        <td>{{$category->title}}</td>
        <td>
          <a href="{{ route('category.edit', ['id' => $category->id ])}}" class="btn btn-primary button primary edit">
            Edit</a>
        </td>

        <td>
          <form action="{{route('category.delete',['id'=> $category->id]) }}" method="POST"
            class="btn btn-danger primary float-left margin-left: 100px "> Delete </a>
          @csrf
          @method('DELETE')
      </tr>
      </td>



      @endforeach
    </tbody>
  </table>
  <a href="{{ route('category.create')}}" class="btn btn-primary"> Create category </a>

</div>




@endsection