

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
        <a href="{{ route('category.edit', ['id' => $category->id ])}}" class="btn btn-primary"> Edit</a>
    </td>
        </tr>
                
 
    
    @endforeach
</tbody>
</table>
<a href="{{ route('category.create')}}" class="btn btn-primary"> Create category </a>

</div>




@endsection