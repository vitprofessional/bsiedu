<!DOCTYPE html>
<html lang="en">


<head>
    <title>Bangladesh Survey Institute - @yield('backtitle') </title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    
    
    <link rel="shortcut icon" href="{{ asset('/') }}public/assets/images/icon-bsi.png" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
     <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/public/')}}/frontend/assets/css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    
   
    
    <!--<link href="{{asset('/public/')}}/frontend/assets/css/bootstrap.css" rel="stylesheet" />-->
    <link href="{{asset('/public/')}}/frontend/assets/css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <!--<link href="{{asset('/public/')}}/frontend/assets/css/style-mob.css" rel="stylesheet" />-->
    <link href="{{asset('/public/')}}/frontend/assets/css/animate.min.css" rel="stylesheet" />
    <link href="{{asset('/public/')}}/frontend/assets/css/lightbox.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Fancy box-->
        <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/frontend/lib/fancybox/jquery.fancybox.min.css" />
    
    <style>
        .wed-hom-footer {
            /* margin-top: 60px; */
            padding: 3rem 0rem;
            background: #002147;
        }
        .wed-hom-footer p {
            font-size:initial !important;
        }
        .footerMenu ul{
            padding-left:0;
            list-style-type:none;
            margin-top:1rem;
        }
        .footerMenu ul li{
            text-decoration:none;
            padding:.5rem 0;
        }
        .container{
            --bs-gutter-x: 0 rem;
        }
        @media (min-width: 769px){
            .navbar-expand-lg .navbar-nav .nav-link {
                padding: .8rem 1.5rem;
            }
            .navbar-expand-lg .navbar-nav .active,.navbar-expand-lg .navbar-nav .nav-link:hover,.dropdown-item:hover {
                background:#ff0303;
                color:#fff !important;
            }
            .navbar{
                padding:0 !important;
                padding-bottom: 0 !important;
            }
            .dropdown-menu li{
                border-bottom:1px dotted #fff;
            }
            .dropdown-menu li:last-child{
                border-bottom:0px dotted #fff;
            }
            .dropdown-menu{
                background:#198754;
                padding:0;
                border-radius:0;
            }
            .dropdown-item{
                color:#fff;
                padding:.5rem;
            }
            .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0; /* remove the gap so it doesn't close */
            }
        }
        .carousel-inner {
            border: 5px solid #198754;
        }
        table th,td{
            text-align:center !important;
        }
    </style>
    
</head>

<body>

                <div class="row g-0 bg-white py-2">
                    <div class="col-8 col-md-6 mx-auto text-center">
                        <a style="font-size:18px;" class="navbar-brand mb-2" href="#"><img src="{{ asset('/') }}public/assets/images/logo-survey2.png" alt="" class="w-75 pb-3" /> </a>
                        
                    </div>
                    <div class="col-12 mx-auto bg-success row">
                        <div class="col-12 d-block d-md-none">   
                            <button class="navbar-toggler" style="justify-content:right;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="fa fa-list"></i>
                            </button>
                        </div>
                        <div class="col-md-12">
                            <nav class="navbar navbar-dark navbar-expand-lg col-10 mx-auto">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav me-auto mb-0 mb-md-2 mb-lg-0">
                                    <li class="nav-item">
                                      <a class="nav-link active " aria-current="page" href="{{ url('/new/home')}}">হোম</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle  text-white" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       আমাদের সম্পর্কে
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li style="line-height:30px;"><a class="dropdown-item " href="{{route('instituteInfo')}}">প্রতিষ্ঠান পরিচিতি</a></li>
                                        <li style="line-height:30px;"><a class="dropdown-item " href="{{route('principalSpeech')}}">অধ্যক্ষের বক্তব্য</a></li>
                                        <li style="line-height:30px;"><a class="dropdown-item" href="{{route('exprincipals')}}"> প্রাক্তন অধ্যক্ষ</a></li>
                                        <li style="line-height:30px;"><a class="dropdown-item " href="{{route('teacherList')}}">শিক্ষকবৃন্দ</a></li> 
                                        <li style="line-height:30px;"><a class="dropdown-item " href="{{route('employeeList')}}">কর্মকর্তা/কর্মচারী বৃন্দ</a></li> 
                                      </ul>
                                    </li>  
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        প্রশিক্ষন
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('inhouseTrainingTeacherList') }}">ইন হাউস প্রশিক্ষন(শিক্ষক)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('inhouseTrainingStaffList') }}">ইন হাউস প্রশিক্ষন(কর্মকর্তা/কর্মচারী)</a></li>
                                        <li><a class="dropdown-item" href="{{ route('trainingSubjectWise') }}">বিষয় ভিত্তিক প্রশিক্ষন</a></li>
                                        <li><a class="dropdown-item" href="{{ route('industryAttachment') }}">শিল্প কারখানায় বাস্তব  প্রশিক্ষন</a></li>
                                        
                                      </ul>
                                    </li>            
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        একাডেমিক
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{route('Newsylabus')}}">সিলেবাস</a></li>
                                        <li><a class="dropdown-item" href="{{route('probdhan')}}">প্রবিধান</a></li>
                                        <li><a class="dropdown-item" href="{{route('NewclassRotine')}}">ক্লাস রুটিন</a></li>
                                        <li><a class="dropdown-item" href="{{route('NewExamRotine')}}"> পরিক্ষার রুটিন</a></li>
                                         <li><a class="dropdown-item" href="{{route('NewSemesterplan')}}">সেমিস্টার প্লান</a></li>
                                        
                                      </ul>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{route('result')}}" tabindex="-1" aria-disabled="true">রেজাল্ট</a>
                                    </li>    
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        জব প্লেসমেন্ট
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{route('placementCell')}}">প্লেসমেন্ট সেল</a></li>
                                        <li><a class="dropdown-item" href="{{route('jobNeededStudent')}}">কর্মপ্রত্যাশী ছাত্র/ছাত্রী</a></li>
                                        <li><a class="dropdown-item" href="https://bdjobs.com/" target="_blank">বিডি জবস নিয়োগ বিজ্ঞপ্তি</a></li>
                                        
                                      </ul>
                                    </li>  
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ইন্ডাস্ট্রি লিংকেজ
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('linkageIndustryList') }}">সম্পাদিত চুক্তি সমূহ</a></li>
                                        <li><a class="dropdown-item" href="{{ route('industryAttachment') }}">ইন্ডাস্ট্রিয়াল এটাচমেন্ট</a></li>
                                        <li><a class="dropdown-item" href="{{ route('industryVisitList') }}">ইন্ডাস্ট্রি ভিজিট</a></li>
                                      </ul>
                                    </li>                       
                                    
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        গ্যালারি
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{route('Photogallary')}}">ফটোগ্যালারি</a></li>
                                        <li><a class="dropdown-item" href="{{route('newVideogallary')}}">ভিডিও গ্যালারি</a></li>
                                        
                                      </ul>
                                    </li>        
                                    <li class="nav-item">
                                      <a class="nav-link  text-white" href="{{route('newContact')}}" tabindex="-1" aria-disabled="true">যোগাযোগ</a>
                                    </li>
                                  </ul>
                            
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
<!--END HEADER SECTION-->
@yield('backcontent')

    <!-- FOOTER -->
<div class="mt-5 row g-0">
    <section class="wed-hom-footer col-12">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-md-3 wow fadeIn animated" data-wow-delay=".70s">
                    <a href="#" class="text-center"><img src="{{ asset('/') }}public/assets/images/logo-bsi.png" alt="BSIEDU" class="w-75 bg-light rounded-circle" /></a>
                </div>
                <div class="col-4 col-md-4 wow fadeIn animated footerMenu" data-wow-delay=".70s">
                    <p class="mb-0 fw-bold text-white h3">গুরুত্বপুর্ণ লিংক</p>
                    <ul>
                        @php
                            $link = \App\Models\ImportantLink::all();
                        @endphp
                        @if(!empty($link))
                        @foreach($link as $li)
                        <li><a href="{{ $li->link }}" target="_blank" style="color:#fff;">{{ $li->content }}</a></li>
                        @endforeach
                        @else
                        <li><a href="http://www.tmed.gov.bd/" target="_blank" style="color:#fff;">কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ</a></li>
                        <li><a href="http://www.techedu.gov.bd/" target="_blank" style="color:#fff;">কারিগরি শিক্ষা অধিদপ্তর</a></li>
                        <li><a href="http://www.bteb.gov.bd/" target="_blank" style="color:#fff;">কারিগরি শিক্ষা বোর্ড</a></li>
                        <li><a href="http://rdocumilla.gov.bd/user/home.php" target="_blank" style="color:#fff;">আঞ্চলিক উপপরিচালকের কার্যালয়</a></li>
                        @endif
                    </ul>
                </div>
                <div class="co-8 col-md-5">
                    <p class="mb-0 fw-bold text-white h3">যোগাযোগ</p>
                    <p style="color:#fff;"><i class="fa fa-location-arrow" aria-hidden="true"> </i> রামমালা,টমছমব্রীজ,কুমিল্লা</p>
                    <p style="color:#fff;"> <i class="fa fa-phone pl-1 pr-2"> </i>  01756-157751  (প্রিন্সিপাল),<br> 01715-307841 (প্রধান সহকারী)<br> 01725-519409 (তথ্য অফিসার)</a></p>
                    <p style="color:#fff;"><i class="fa fa-envelope-o" aria-hidden="true"></i>  bangladeshsurveyinstitute@yahoo.com</p>
                </div>
                <div class="row wow fadeIn animated" data-wow-delay=".70s" style="margin-top:40px;">
                    <div class="col-12 col-md-6">
                        <h4 class="mb-0">Google Map</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3660.323243926635!2d91.17283331497568!3d23.448801984738882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDI2JzU1LjciTiA5McKwMTAnMzAuMSJF!5e0!3m2!1sen!2sbd!4v1686223931475!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                    </div>
                    <div class="col-12 col-md-6">
                        <h4 class="mb-0">Social Media</h4>
                        <iframe class="rounded" style="width:100%;max-height:350px" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBSI65056&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>                   
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 text-white text-center">
                    1914-{{ date('Y') }} Copyrights &copy; Bangladesh Survey Institute || All Rights Reserved
                </div>
                <div class="col-12 text-center">
                    <a target="_blank" href="https://www.virtualitprofessional.com/" class="text-white">IT Partner- Virtual IT Professional</a>
                </div>
            </div>
        </div>
    </section>


    
    <!--Import jQuery before materialize.js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
    <script src="{{asset('/public/')}}/frontend/assets/js/main.min.js"></script>
    <script src="{{asset('/public/')}}/frontend/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('/public/')}}/frontend/assets/js/materialize.min.js"></script>
    <script src="{{asset('/public/')}}/frontend/assets/js/custom.js"></script>
    <script src="{{asset('/public/')}}/frontend/assets/js/wow.min.js"></script>
    <script src="{{asset('/public/')}}/frontend/assets/js/lightbox.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <!--Fancybox-->
        <script src="{{ asset('/') }}public/frontend/lib/fancybox/jquery.fancybox.min.js"></script>
    		<script>
                $(document).ready( function () {
                    $('#myTable').DataTable({
                        order: [[0, 'asc']],
                    });
                });
		</script>
    	<script>
		     new WOW().init();
		</script>

</body>

</html>