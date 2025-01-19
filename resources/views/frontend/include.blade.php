<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <title>Welcome | Bangladesh Survey Institute</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/') }}public/frontend/icon/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/') }}public/frontend/icon/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/') }}public/frontend/icon/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}public/frontend/icon/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/') }}public/frontend/icon/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}public/frontend/icon/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/') }}public/frontend/icon/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}public/frontend/icon/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}public/frontend/icon/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}public/frontend/icon/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}public/frontend/icon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/') }}public/frontend/icon/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}public/frontend/icon/favicon-16x16.png" />
        <link rel="favicon" href="{{ asset('/') }}public/frontend/icon/favicon.png" />
        <link rel="manifest" href="{{ asset('/') }}public/frontend/icon/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" />
        <link rel="stylesheet" href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
        

        <link href="{{ asset('/') }}public/frontend/lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/lib/fontawesoem/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/lib/mdb/css/mdb.css" />
        <link rel="stylesheet" href="{{ asset('/') }}public/frontend/css/slider.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/css/news-events-tabs.css" />
        <link rel="stylesheet" href="{{ asset('/') }}public/frontend/css/navbar.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/css/website/style.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/css/site.css" />
        <!--Fancy box-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/lib/fancybox/jquery.fancybox.min.css" />
      

        <style>
            a:hover{
                text-decoration:none;
            }
            body {
                font-family: "Kalpurush" !important;
            }
            
            @media only screen and (max-width: 600px) {
              .carousel-header-text {
                font-size:10px;
              }
            
            }
        </style>
        <style>
            .mobile-nav{
                width:100%;
            }
             @media only screen and (max-width: 600px) {
               .mobile-area{
                position:relative;
                left:10%;
            }
             }
           
        </style>

        <!-- jQuery [javascript library]-->
        <!-- animation library CSS -->
        <!--Image Slider CSS-->
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="LHMkmeMG"></script>
        <div class="container main_page">
            <!--Slider start-->
            <div class="row">
                <div class="col-md-12 p-0">
                    <div class="header-top text-white">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-10 mx-auto mb-md-0 mb-4 ml-4">
                                <div class="d-flex logo-area">
                                    <div class="pr-4 my-auto">
                                        <img src="{{ asset('/') }}public/frontend/uploads/logo/72170db1-002b-4bb3-bd81-ba33580657f1_logo.png" class="carousel-logo" alt="BSIEDU" />
                                    </div>
                                    <div class="text-left my-auto">
                                        <h3 class="carousel-header-text text-white mb-0">
                                            বাংলাদেশ সার্ভে ইন্সটিটিউট <br />
                                            Bangladesh Survey Institute,Cumilla
                                        </h3>
                                    </div>
                                    <div class="pl-4 my-auto">
                                        <img src="{{ asset('/') }}public/frontend/image/govtlogo.jpg" class="carousel-logo rounded-circle" alt="BSIEDU" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mobile-area">
                                <div class="d-none d-md-block text-right ml-md-4 ml-1">
                                    <a class="btn btn-green btn-lg text-danger" href="#"> <i class="fa fa-caret-right"></i> সিটিজেন চার্টার</a>
                                    <a class="btn btn-green btn-lg text-danger" href="{{route('jobplaceform')}}"> <i class="fa fa-users"></i> X-স্টুডেন্ট আর্কাইভ </a>
                            
                                </div>
                                <div class="col-10 mx-auto ml-1 d-block d-md-none">
                                    <a class="btn btn-green btn-lg text-danger" href="#"> <i class="fa fa-caret-right"></i> সিটিজেন চার্টার</a>
                                    <a class="btn btn-green btn-lg text-danger" href="{{route('jobplaceform')}}"> <i class="fa fa-users"></i> X-স্টুডেন্ট আর্কাইভ </a>
                                  
                                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            

                 <nav class="navbar navbar-expand-lg navbar-light w-res pl-0 pr-0 aos-item d-block d-md-none mobile-nav">
            <!-- Brand -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarText">
                <!-- Left -->
<ul class="navbar-nav mr-auto">
<li class="nav-item">
    <a class="nav-a-reday nav-link" href="{{ url('/') }}">
        প্রথম পাতা
    </a>
</li>
<li class="nav-item dropdown">
    <a href="#" class="text-warning nav-a-cyan nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> আমাদের সম্পর্কে </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
       
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="{{ route('speech')}}"> <i class="fa fa-caret-right pl-1 pr-2"></i> অধ্যক্ষের বক্তব্য </a>
        </li>
        @php
            $about = \App\Models\Page::where(['menu'=>'আমাদের সম্পর্কে'])->get();
            if(!empty($about)):
                foreach($about as $abt):
        @endphp
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('about',['id'=>$abt->page_name]) }}"> <i class="fa fa-caret-right pl-1 pr-2"> {{ $abt->page_title }}</i> </a>
        </li>
        @php
                endforeach;
            else:
        @endphp
        

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> একাডেমিক ইনচার্জের বক্তব্য </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i>ইন্সটিটিউট পরিচিতি  </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> অবকাঠামো </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> লক্ষ্য ও উদ্দেশ্য </a>
        </li>
        @php
            endif;
        @endphp
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> প্রাক্তন অধ্যক্ষগণ </a>
        </li>
          <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reday" href="{{ route('bsistaffs') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> শিক্ষক ও কর্মচারীবৃন্দ </a>
        </li>
    </ul>
</li>
<!-- end  mega menu Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="nav-a-blue nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> শিক্ষা ও প্রশিক্ষণ </a>
    <ul class="dropdown-menu multi-level pl-1 ddl" style="min-width: 19em;">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-blue" target="_blank" href="http://www.btebadmission.gov.bd/">
                <i class="fa fa-caret-right pl-1 pr-2"></i> ৪ বছর মেয়াদী ডিপ্লোমা ইন সার্ভেয়িং
            </a>
        </li>
        @php
            $education = \App\Models\Page::where(['menu'=>'শিক্ষা ও প্রশিক্ষণ'])->get();
            if(count($education)>0):
                foreach($education as $edu):
        @endphp
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('education',['id'=>$edu->page_name]) }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> {{ $edu->page_name }} </a>
        </li>
        @php
                endforeach;
            else:
        @endphp

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-blue" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> স্বল্পমেয়াদী কোর্স (৩৬০ ঘন্টা ) </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-blue" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> ইন-হাউস প্রশিক্ষণ </a>
        </li>
        @php
            endif;
        @endphp
    </ul>
</li>
<!-- end    Dropdown -->
<li class="nav-item">
    <a class="nav-a-reday nav-link" href="#">
        রেজাল্ট
    </a>
</li>
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="nav-a-reda nav-link dropdown-toggle"> একাডেমিক </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('probidhan') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> প্রবিধান </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('syllabus') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> সিলেবাস </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('semisterplan') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> সেমিস্টার প্লান </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('classroutine') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> ক্লাস রুটিন </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('examroutine') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> পরীক্ষার রুটিন </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('academiccalender') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> একাডেমিক ক্যালেন্ডার </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="#" class="nav-a-reday nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ডাটাবেজ</a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
      

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reday" href="{{ route('bsistudent') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> ছাত্র-ছাত্রীদের তথ্য </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="#" class="nav-a-green nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> গ্যালারি </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-green" href="{{ route('frontphotogallery') }}">
                <i class="fa fa-caret-right pl-1 pr-2"></i>
                <!--ফটোগ্যালারি-->
                ফটো গ্যালারি
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-green" href="{{ route('frontphotogallery') }}">
                <i class="fa fa-caret-right pl-1 pr-2"></i>
                <!--ফটোগ্যালারি-->
                ভিডিও গ্যালারি
            </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="#" class="nav-a-cyan nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ই-লার্নিং </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> টিউটোরিয়াল </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> ই-বুক </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> ডিজিটাল কনটেন্ট </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> লাইভ ক্লাস </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->

<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="nav-a-orange nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> জব প্লেসমেন্ট </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <!--<a class="nav-link border-bottom dropdwon-orange" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> জব ফেয়ার  /a>-->
             <a class="nav-link border-bottom dropdwon-orange" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> জব  ফেয়ার  </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-orange" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> জব সার্কুলার </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-orange" target="_blank" href="{{route('jobplaceform')}}"> <i class="fa fa-caret-right pl-1 pr-2"></i> স্টুডেন্ট সার্ভিস এন্ড ইনফরমেশন </a>
        </li>
    </ul>
</li>
                <!-- end    Dropdown -->
<li class="nav-item">
    <a class="nav-link nav-a-reday nav-link" href="">
        যোগাযোগ
    </a>
</li>
</ul>
        </div>
    
</nav>


                <div class="col-md-12 p-0 mt-1 header">
                    <div class="carousel-area w-res yes-p">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                    $details=App\Models\SliderGallery::orderBy('id','DESC')->get();
                                @endphp
                                    @if(count($details)>0)
                                        @foreach($details as $dt)  
                                <div class="carousel-md carousel-caption h-100 align-items-center d-none d-md-block">
                                    <div class="d-flex">
                                        <div class="text-left my-auto">
                                            <h3 class="carousel-header-text text-white mb-0">
                                                বাংলাদেশ সার্ভে ইন্সটিটিউট <br />
                                                Bangladesh Survey Institute,Cumilla
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                             
                                        <div class="carousel-item">
                                            <img src="{{ asset('/') }}{{ $dt->location }}" class="d-block w-100 carousel-img" alt="{{ $dt->title }}" />
                                        </div>
                                        @endforeach
                                    @else              
                                        <div class="carousel-item">
                                            <img src="{{ asset('/') }}public/frontend/uploads/Slider/welcome.jpg" class="d-block w-100 carousel-img" alt="BSIEDU" />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/') }}public/frontend/uploads/Slider/mainbuilding.jpg" class="d-block w-100 carousel-img" alt="BSIEDU" />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/') }}public/frontend/uploads/Slider/fieldwork.jpg" class="d-block w-100 carousel-img" alt="Proposed main gate" />
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('/') }}public/frontend/uploads/Slider/buildingwithpond.jpg" class="d-block w-100 carousel-img" alt="Proposed main  gate front view " />
                                        </div>
                                    @endif
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Slider end-->
                <!-- ********  Start navbar ******** -->
                <!-- End Navber -->
                <!-- Start left Section -->

<div class="col-md-12 p-0">
    <nav class="navbar navbar-expand-lg navbar-light w-res pl-0 pr-0 aos-item d-none d-md-block">
        <div class="container container-menu">
            <!-- Brand -->
            <a class="navbar-brand ml-3 d-block d-md-none" href="{{ url('/') }}">
                <img src="{{ asset('/') }}public/frontend/uploads/logo/72170db1-002b-4bb3-bd81-ba33580657f1_logo.png" height="30" width="30" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarText">
                <!-- Left -->
<ul class="navbar-nav mr-auto">
<li class="nav-item">
    <a class="nav-a-reday nav-link" href="{{ url('/') }}">
        প্রথম পাতা
    </a>
</li>
<li class="nav-item dropdown">
    <a href="#" class="text-warning nav-a-cyan nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> আমাদের সম্পর্কে </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="{{ route('speech')}}"> <i class="fa fa-caret-right pl-1 pr-2"></i> অধ্যক্ষের বক্তব্য </a>
        </li>
        @php
            $about = \App\Models\Page::where(['menu'=>'আমাদের সম্পর্কে'])->get();
            if(count($about)>0):
                foreach($about as $abt):
        @endphp
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('about',['id'=>$abt->page_name]) }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> {{ $abt->page_title }}</a>
        </li>
        @php
                endforeach;
            else:
        @endphp

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> একাডেমিক ইনচার্জের বক্তব্য </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i>ইন্সটিটিউট পরিচিতি </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> অবকাঠামো </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> লক্ষ্য ও উদ্দেশ্য </a>
        </li>
        @php
            endif;
        @endphp
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> প্রাক্তন অধ্যক্ষগণ </a>
        </li>
          <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reday" href="{{ route('bsistaffs') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> শিক্ষক ও কর্মচারীবৃন্দ </a>
        </li>
    </ul>
</li>
<!-- end  mega menu Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="nav-a-blue nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> শিক্ষা ও প্রশিক্ষণ </a>
    <ul class="dropdown-menu multi-level pl-1 ddl" style="min-width: 19em;">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-blue" target="_blank" href="http://www.btebadmission.gov.bd/">
                <i class="fa fa-caret-right pl-1 pr-2"></i> ৪ বছর মেয়াদী ডিপ্লোমা ইন সার্ভেয়িং
            </a>
        </li>
        @php
            $education = \App\Models\Page::where(['menu'=>'শিক্ষা ও প্রশিক্ষণ'])->get();
            if(count($education)>0):
                foreach($education as $edu):
        @endphp
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('education',['id'=>$edu->page_name]) }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> {{ $edu->page_name }} </a>
        </li>
        @php
                endforeach;
            else:
        @endphp

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-blue" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> স্বল্পমেয়াদী কোর্স (৩৬০ ঘন্টা ) </a>
        </li>

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-blue" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> ইন-হাউস প্রশিক্ষণ </a>
        </li>
        @php
            endif;
        @endphp
    </ul>
</li>
<!-- end    Dropdown -->
<li class="nav-item">
    <a class="nav-a-reday nav-link" href="#">
        রেজাল্ট
    </a>
</li>
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="nav-a-reda nav-link dropdown-toggle"> একাডেমিক </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('probidhan') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> প্রবিধান </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('syllabus') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> সিলেবাস </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('semisterplan') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> সেমিস্টার প্লান </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('classroutine') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> ক্লাস রুটিন </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('examroutine') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> পরীক্ষার রুটিন </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reda" href="{{ route('academiccalender') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> একাডেমিক ক্যালেন্ডার </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="#" class="nav-a-reday nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ডাটাবেজ</a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
      

        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-reday" href="{{ route('bsistudent') }}"> <i class="fa fa-caret-right pl-1 pr-2"></i> ছাত্র-ছাত্রীদের তথ্য </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="#" class="nav-a-green nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> গ্যালারি </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-green" href="{{ route('frontphotogallery') }}">
                <i class="fa fa-caret-right pl-1 pr-2"></i>
                <!--ফটোগ্যালারি-->
                ফটো গ্যালারি
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-green" href="{{ route('frontphotogallery') }}">
                <i class="fa fa-caret-right pl-1 pr-2"></i>
                <!--ফটোগ্যালারি-->
                ভিডিও গ্যালারি
            </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->
<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="#" class="nav-a-cyan nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ই-লার্নিং </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> টিউটোরিয়াল </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> ই-বুক </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> ডিজিটাল কনটেন্ট </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-cyan" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> লাইভ ক্লাস </a>
        </li>
    </ul>
</li>
<!-- end    Dropdown -->

<!-- start  Dropdown -->
<li class="nav-item dropdown">
    <a href="javascript:void(0);" class="nav-a-orange nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> জব প্লেসমেন্ট </a>
    <ul class="dropdown-menu multi-level pl-1 ddl">
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-orange" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> জব ফেয়ার </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-orange" href="#"> <i class="fa fa-caret-right pl-1 pr-2"></i> জব সার্কুলার </a>
        </li>
        <li class="nav-item">
            <a class="nav-link border-bottom dropdwon-orange" target="_blank" href="{{route('jobplaceform')}}"> <i class="fa fa-caret-right pl-1 pr-2"></i> স্টুডেন্ট সার্ভিস এন্ড ইনফরমেশন </a>
        </li>
    </ul>
</li>
                <!-- end    Dropdown -->
<li class="nav-item">
    <a class="nav-link nav-a-reday nav-link" href="">
        যোগাযোগ
    </a>
</li>
</ul>
        </div>
    </div>
</nav>

<!--/nav-bar-->
<!--<partial name="_NavbarSmall" />-->
</div>

<div class="col-md-9">
    @yield('bsicontent')
</div>

<div class="col-md-3">
    <!--Right Section Start-->

    <div class="row d-none d-md-block">
        <div class="col-md-12 p-2">
            <div class="side-box">
                <h6 class="mb-0">
                    অধ্যক্ষ মহোদয়
                </h6>
                @php 
                    $admin = \App\Models\AdminPanel::first();
                @endphp
                @if(!empty($admin))
                    <img src="{{ asset('/') }}/public/backdoor/uploads/user_images/{{ $admin->adminimage }}" class="img-responsive img-rounded" alt="Principal Speech" title="Principal Speech" />
                    <br />
                    <p class="mb-0">
                        {{ $admin->adminname }}
                    </p>
                    <a href="{{ route('speech') }}">বাণী</a>
                @else
                <img src="{{ asset('/') }}public/frontend/uploads/profile-picture/principal.jpg" class="img-responsive img-rounded" alt="Principal" title="none" />
                <br />
                <p class="mb-0">
                    জনাব মোঃ কেপায়েত উল্লাহ্
                </p>
                <a href="#">বাণী</a>
                @endif
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box">
                <h6 class="mb-0">
                    জাতীয় সংগীত
                </h6>
                <audio controls style="width: 100%;" class="mt-3">
                    <source src="{{ asset('/') }}public/frontend/uploads/audio/bd_national_anthem.mp3" type="audio/mpeg" />
                </audio>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    আভ্যন্তরীণ ই-সেবাসমূহ
                </h6>
                <div class="block">
                    <ul class="pl-0">
                        <li><a href="#" title="ফর্ম ডাউনলোড">ফর্ম ডাউনলোড</a></li>
                        <li><a href="#" title="তথ্য-সংগ্রহ">তথ্য-সংগ্রহ</a></li>
                        <!--<li><a href="#" title="রেজাল্ট সফটওয়্যার">রেজাল্ট সফটওয়্যার</a></li>-->
                        <li><a href="#" title="অনলাইনে অভিযোগ/মতামত">অনলাইনে অভিযোগ/মতামত</a></li>
                        <li><a href="https://webmail.bsiedu.gov.bd/" target="_blank" title="ওয়েবমেইল">ওয়েবমেইল</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <!--
        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    কেন্দ্রীয় ই-সেবা
                </h6>
                <div class="block">
                    <ul class="pl-0">
                        <li><a target="_blank" href="http://br.lgd.gov.bd/" title="জন্ম ও মৃত্যু নিবন্ধন">জন্ম ও মৃত্যু নিবন্ধন</a></li>
                        <li>
                            <a target="_blank" href="http://passport.gov.bd/" title="অনলাইনে পাসপোর্টের আবেদন">
                                অনলাইনে পাসপোর্টের আবেদন
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://services.nidw.gov.bd/voter_center" title="জাতীয় পরিচয়পএ এর তথ্য">জাতীয় পরিচয়পত্রের তথ্য</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.etaxnbr.gov.bd/tpos/home" title="অনলাইন আয়কর পরিশোধ">
                                অনলাইন আয়কর পরিশোধ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
-->
        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    গুরুত্বপূর্ণ লিংক
                </h6>
                <div class="block">
                    <ul class="pl-0">
                        <li>
                            <a target="_blank" href="http://www.bangladesh.gov.bd/" title="গণপ্রজাতন্ত্রী বাংলাদেশ সরকার">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</a>
                        </li>

                        <li>
                            <a target="_blank" href="http://www.moedu.gov.bd/" title="শিক্ষা মন্ত্রণালয়">
                                শিক্ষা মন্ত্রণালয়
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="http://www.techedu.gov.bd/" title="কারিগরি শিক্ষা অধিদপ্তর">
                                কারিগরি শিক্ষা অধিদপ্তর
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="http://www.bteb.gov.bd/" title="কারিগরি শিক্ষা বোর্ড">
                                কারিগরি শিক্ষা বোর্ড
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="http://www.tmed.gov.bd/" title="কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ">
                                কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ
                            </a>
                        </li>

                        <li>
                            <a target="_blank" href="http://118.67.215.141/ebook/" title="ই-বুক">ই-বুক</a>
                        </li>

                        <li>
                            <a target="_blank" href="http://118.67.215.141/studentHome.php?page=1" title="আই-বুক">আই-বুক</a>
                        </li>

                        <li><a target="_blank" href="http://www.dshe.gov.bd/" title="মাউশি">মাউশি</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    ফেসবুক লিংক                </h6>
                <div class="block">
                    <div class="fb-page" data-href="https://m.facebook.com/#!/Bangladesh-Survey-InstituteCumilla-757920381001244/?tsid=0.5271330586313573&amp;source=result" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://m.facebook.com/#!/Bangladesh-Survey-InstituteCumilla-757920381001244/?tsid=0.5271330586313573&amp;source=result" class="fb-xfbml-parse-ignore"><a href="https://m.facebook.com/Bangladesh-Survey-InstituteCumilla-757920381001244/?tsid=0.5271330586313573&amp;source=result">Bangladesh Survey Institute,Cumilla</a></blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    বঙ্গবন্ধু কর্নার-ঐতিহাসিক ৭ই মার্চ
                </h6>
                <div>
                    <iframe width="500" height="315" src="https://www.youtube.com/embed/rE8fpR8FqTU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    করোনা ভাইরাস প্রতিরোধে যোগাযোগ
                </h6>
                <div>
                    <a class="mb-2" href="http://infocom.gov.bd/" target="_blank">
                        <img class="img-responsive" src="{{ asset('/') }}public/frontend/image/corona_new.jpg" />
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    করোনা ট্রেসার বিডি
                </h6>
                <a href="https://play.google.com/store/apps/details?id=com.shohoz.tracer"> <img class="img-responsive" src="{{ asset('/') }}public/frontend/image/2020-06-16-00-21-94946eae5bcbd226dff95be9d2e49445.jpg" /></a>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    ডিজিটাল বাংলাদেশ দিবস ২০১৯
                </h6>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CGEr6m8aUwQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    পাবলিক সেক্টর ইনোভেশন একটি দেশের রূপান্তর
                </h6>
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/GQcmbqD0r7o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
            </div>
        </div>

        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    জরুরি হটলাইন
                </h6>
                <img class="img-responsive" src="{{ asset('/') }}public/frontend/image/National-Helpline%20(1).jpg" />
            </div>
        </div>
        <!--
        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    একদেশ
                </h6>
                <div>
                    <a href="https://ekdesh.ekpay.gov.bd/#/home"> <img class="img-responsive" src="{{ asset('/') }}public/frontend/image/2020-05-18-15-22-d1cb9a8e17dbdaed8c9badd286910939.jpg" /></a>
                </div>
            </div>
        </div>
        <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
            <div class="side-box pb-0">
                <h6 class="mb-0">
                    ডেঙ্গু প্রতিরোধে করণীয়
                </h6>
                <div>
                    <a href="https://bangladesh.gov.bd/site/page/91530698-c795-4542-88f2-5da1870bd50c"> <img class="img-responsive" src="{{ asset('/') }}public/frontend/image/dengu.jpg" /></a>
                </div>
            </div>
        </div>
        -->
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12 p-0">
        <div class="footer-artwork" id="footer-artwork">&nbsp;</div>
    </div>
    <div class="col-12 p-0">
        <div class="footer-wrapper full-width" id="footer-wrapper">
            <div class="row pt-3">
                <div class="col-12 col-sm-5 col-lg-5 text-sm-center">
                    <div id="footer-menu">
                        <ul>
                            <li>
                                <a href="#" title="ম্যাপ"> ম্যাপ</a>
                            </li>
                            <li>
                                <a href="#" title="সাইটম্যাপ">সাইটম্যাপ </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-copyright footer pt-2">
                        <p>কপিরাইট © <a href="{{ url('/') }}"> বাংলাদেশ সার্ভে ইন্সটিটিউট-{{ date('Y') }}</a></p>
                    </div>
                </div>
                <div class="col-12 col-sm-2 col-lg-2 mb-2 text-center">
                    <img src="{{ asset('/') }}public/frontend/uploads/logo/72170db1-002b-4bb3-bd81-ba33580657f1_logo.png" height="60" width="60" />
                </div>
                <div class="col-12 col-sm-5 col-lg-5 text-lg-right text-md-right">
                    <div class="footer-credit footer">
                        <!--  -->
                        <p>পরিকল্পনা ও বাস্তবায়নে: <a title="Principal, BSI, Cumilla" href="#">অধ্যক্ষ</a></p>
                    </div>
                    <div class="footer-dev footer">
                        <p>Development By :-&nbsp;<a href="http://www.virtualitprofessional.net" target="_blink"> Virtual IT Professional</a></p>
                    </div>
                </div>
            </div>
            <!-- /footer -->
        </div>
    </div>
</div>
</div>
        
        <script src="{{ asset('/') }}public/frontend/lib/jquery/dist/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script src="{{ asset('/') }}public/frontend/lib/mdb/js/popper.min.js"></script>
        <script src="{{ asset('/') }}public/frontend/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}public/frontend/lib/mdb/js/mdb.min.js"></script>
        <script src="{{ asset('/') }}public/frontend/lib/mdb/js/mdb.custom.js"></script>
        <script src="{{ asset('/') }}public/frontend/js/responsive-min.js"></script>
        <script src="{{ asset('/') }}public/frontend/js/navbar.js"></script>
        <script src="{{ asset('/') }}public/frontend/js/scripts.js"></script>
        <!--<script src="{{ asset('/') }}public/frontend/js/paginator.js"></script>-->
        <!--Fancybox-->
        <script src="{{ asset('/') }}public/frontend/lib/fancybox/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>
         <script>
         $("#name,#subject,#phone,#message,#name2,#rollnumber,#session,#position,#company,#description").keypress(function(event) {
                var character = String.fromCharCode(event.keyCode);
                return isValid(character);     
            });
            
            function isValid(str) {
                return !/[~`!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
            }
      </script>
      <script>
          function validatePaste(el, e) {
          var regex = /^[a-z .'-]+$/gi;
          var key = e.clipboardData.getData('text')
          if (!regex.test(key)) {
            e.preventDefault();
            return false;
          }
        }
      </script>
    </body>

</html>
