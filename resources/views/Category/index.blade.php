
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">




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
<a href="{{ route('category.create')}}" class="btn btn-primary"> Create perosn info </a>


