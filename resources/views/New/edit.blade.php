
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="row">
    <div class="col-md-12 offset-md-2">
        <h3>Create News</h3>
        <hr>
        
        <form action="{{route('news.store')}}" method="POST">

           
           @csrf
           <div class="form-group">
               <label for="title"> Title</label>
               <input type="text" name="title" id="title" class="form-control" value="{{$news->title}}" >
           </div>
  
           <div class="form-group">
              <label for="discraption"> description</label>
              <textarea name="discraption" id="discraption" cols="20" rows="5" class="form-control"  >{{$news->discraption}} </textarea>
          </div>

           <div class="form-group">
               <input type="file" name="coverImage" id="coverImage" class="form-control-file">
           </div>

           

           <div class="form-group">
            <button type="submit" class="btn btn-primary" style="margin-left:10%;"> Update </button>
        </div>
       
        </form>

    </div>
    
   </div>