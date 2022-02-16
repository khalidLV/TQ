<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">




<table class="table">
    <thead class="thead-dark">
      <tr>
     
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Discraption</th>
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
        <td>
        <a href="{{ route('news.edit', ['id' => $news->id ])}}" class="btn btn-primary"> Edit</a>
    </td>
        </tr>
                
 
    
    @endforeach

</tbody>
</table>

</div>
</div>

<a href="{{ route('news.create')}}" class="btn btn-primary"> Create perosn info </a>