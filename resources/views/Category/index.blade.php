

@extends('layouts.app')

@section('content')




<table class="table" >
    <thead class="thead-dark">
      <tr>
     
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        
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


@endsection