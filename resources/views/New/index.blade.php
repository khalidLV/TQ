

@extends('layouts.app')

@section('content')




<table class="table" >
    <thead class="thead-dark">
      <tr>
     
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Discraption</th>
        <th scope="col">Image</th>
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
        <a href="{{ route('news.edit', ['id' => $news->id ])}}" class="btn btn-primary"> Edit</a>
    </td>
        </tr>
                
 
    
    @endforeach
</tbody>
</table>
<a href="{{ route('news.create')}}" class="btn btn-primary"> Create news </a>


@endsection