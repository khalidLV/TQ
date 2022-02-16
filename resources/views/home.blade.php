
@extends('layouts.app')

@section('content')
<style>
/*----  Main Style  ----*/
#cards_landscape_wrap-2{
  text-align: center;
  position: sticky;
}
#cards_landscape_wrap-2 .container{
  padding-top: 10px; 
  padding-bottom: 100px;
  position: relative;
  left: 300px;

}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box{
  overflow: hidden;
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
.image-po{
  position: relative; 
  left: 290px;
  top: -20px;
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px; 
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6{
  margin-top: 0px;
  margin-bottom: 4px; 
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: 'Roboto Black', sans-serif;
  letter-spacing: 1px;
  color: #00acc1;
} 
 </style>


<div class="container table-responsive py-4"> 
    <div class="image-po ">
        <img src=https://up6.cc/2022/02/164503212520991.jpg alt="" />
    </div>
   
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="{{route('news.index')}}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm6DbxCjdkTSfMk91YIDeCjwJREJVPAK6OGQ&usqp=CAU" alt="" />
                                </div>
                                                                   
                                    <h6>News</h6>
                                    <p class="card-text"> the total of news is :  {{$countnews}} </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="{{route('category.index')}}">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2CFsK5kiHMR4Oojf-4EOTBeUadXCP9oqIsQ&usqp=CAU" alt="" />
                                </div>

                                 <h6>Category</h6>
                                 <p > the total of category is : {{$countcategory}} </p>
                            </div>
                        </div>
                    </a>
                </div>
               
            </div>
        </div>
        
    </div>


</div>

  @endsection