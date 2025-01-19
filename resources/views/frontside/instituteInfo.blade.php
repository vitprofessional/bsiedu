@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}
    .hedingAbout{
        text-align:center;
        margin-bottom:50px;
        
    }
   .principla img{
        width:100%;
        height:400px;
        border-radius:100%;
        text-align:center;
        margin-top:30px; 
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        
    }
    .principalspace{
        width:100%;
        height:auto;
        text-align:justify;
        margin:auto;
        font-family:Raleway;
        font-size:15px;
        padding-top:30px;
        padding-bottom:30px;
        line-height:29px;
        
    }
</style>

 <section class="my-4">
    <div class="container">
        <div class="row mb-1">
            <div class="col-md-12 text-center con-title">
                <h2  class=" wow fadeInLeft animated" data-wow-delay=".60s">{{$Datakey->title}}</span></h2>
           </div>
        </div>

        <div class="row align-items-center mt-0">
             <div class="col-md-8 col-12 mx-auto">
                <img  class="w-100 wow fadeIn animated" data-wow-delay="1s" src="{{asset('/')}}{{$Datakey->avatar}}" />
           </div>
             <div class="col-md-10 col-12 mx-auto">
                 <p class="principalspace wow fadeIn animated" data-wow-delay="1s" > {{$Datakey->details}}   </p>
            </div>    
        </div>
    </div>
</section>

   


@endsection