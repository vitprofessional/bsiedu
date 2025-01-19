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
   .principlaimg{
        width:100%;
        height:400px;
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
    .principalname{
        margin:auto;
        font-size:22px;
        font-weight:bold;
        text-align:center;
        padding-top:20px;
    }
</style>

 <section style="margin-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center con-title">
                <h2 style="margin-bottom:30px;" class=" wow fadeInLeft animated" data-wow-delay=".60s">অধ্যক্ষের <span>বক্তব্য</span></h2>
           </div>
        </div>
        <div class="row align-items-center">
        @if(!empty($Datakey))
            <div class="col-8 col-md-3 text-center mx-auto">
                <div class="card">
                    <img  class="w-100 wow bounce animated" data-wow-delay="1s" src="{{asset('public/backdoor/uploads/user_images/')}}/{{$Datakey->adminimage}}"/>
                    <div class="card-footer">
                        <p class="fw-bold mb-0">{{$Datakey->adminname}}</p>
                        <p>অধ্যক্ষ<br> বাংলাদেশ সার্ভে ইনস্টিটিউট </p>
                    </div>
                </div>
           </div>
             <div class="col-12 col-md-9">
                 <p class="principalspace wow fadeIn animated" data-wow-delay=".60s">
                     {{$Datakey->adminspeech}}
                 </p>
            </div>        
        @endif            
        </div>

    </div>
</section>

   


@endsection