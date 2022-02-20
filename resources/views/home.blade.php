@extends('layouts.app')

@section('content')


<div class="image-po">
    <img src=https://up6.cc/2022/02/164503212520991.jpg alt="" />
</div>

<div id="cards_landscape_wrap-2">
    <div class="container table-responsive py-5">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('news.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm6DbxCjdkTSfMk91YIDeCjwJREJVPAK6OGQ&usqp=CAU"
                                    alt="" />
                            </div>

                            <h6>News</h6>
                            <p class="card-text text-box"> total news : {{$countnews}} </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('category.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2CFsK5kiHMR4Oojf-4EOTBeUadXCP9oqIsQ&usqp=CAU"
                                    alt="" />
                            </div>

                            <h6>Category</h6>
                            <p> total category : {{$countcategory}} </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

</div>


@endsection