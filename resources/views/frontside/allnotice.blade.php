@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')

<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}
    .overlay{
        width:100%;
        height:500px;
        background:rgba(0,0,0,0.5);
        position:absolute;
        color:#fff;
        top:0px;
        text-align:center;
        padding:0px;
        margin:0px;
    }
</style>
    <!-- NOTICE BOARD -->
   <!--SECTION START-->
    <section>
        <div class="container">
            <div class="row">

                <div class="cor" style="margin-top:100px;">

                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2 class=" wow fadeInLeft animated" data-wow-delay=".60s">Notice<span>Board</span></h2>
                            <p  class=" wow fadeInRight animated" data-wow-delay=".60s">Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                   
                    <div class="s18-age-event l-info-pack-days">
                        <ul>
                            @foreach($Notice as $data)
                            <li class="wow fadeIn animated" data-wow-delay=".70s">
                                <div class="age-eve-com age-eve-1 text-center">
                                    <i class="fa fa-bullhorn" style="font-size:20px;color:white; tex-align:center; margin-top:17px; "></i>
                                </div>
                                <div class="s17-eve-time">
                                    <div class="s17-eve-time-tim">
                                        <span>21 May 1966</span>
                                    </div>
                                    <div class="s17-eve-time-msg">
                                        
                                        <a data-fancybox data-type="iframe" href="{{asset('/') }}public/storage/frontend/uploads/notice/{{ $data->notice_location }}" title=" {{ $data->title }}" class="text-light pl-0" style="text-decoration: none;">
                                            <span>
                                                <i class="fa fa-caret-right pl-1 pr-2" style="color: green;"></i>
                                                <span>{{ $data->title }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
          </div>
    </section>
    <!--SECTION END-->
 @endsection


