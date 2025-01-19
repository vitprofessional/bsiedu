@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row">
    <style>
   div#myTable_paginate {
    position: relative;
    top: -20px;
    left: 67%;
    cursor: pointer;
}
a#myTable_previous, a#myTable_next {
    padding: 7px 15px;
    background: #000!important;
    boder: 4px;
    /* border: 6px; */
    color: #fff!important;
}
  @media only screen and (max-width: 600px) {
              div#myTable_paginate {
                position: relative;
                top: 5px;
                cursor: pointer;
                left: -11px;
            }
     }
a.paginate_button {
    padding: 12px;
}
    </style>
    <div class="col-md-12 p-2">
        <a href="https://www.youtube.com/watch?v=v1R-CB3e-pw" target="_blank">
            <img class="img-thumbnail" src="{{ asset('/') }}public/frontend/image/National-Portal-Card-PM.jpg" style="width: 100%; height: 100%;" />
        </a>
    </div>

    <!--Start marquee notice -->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="row m-0">
            <div class="col-md-3 col-sm-4 pt-2" style="background: #2d6200;">
                <span class="h5 text-light">সর্বশেষ নোটিশ:</span>
            </div>
            <div class="col-md-9 col-sm-8 pt-2 bg-green">
                <marquee>
                    @php
                        $notice = \App\Models\Notice::orderBy('updated_at','DESC')->limit(5)->get();
                        if(count($notice)>0):
                            foreach($notice as $ntc):
                    @endphp
                        <a data-fancybox data-type="iframe" href="{{ asset('/') }}public/storage/frontend/uploads/notice/{{ $ntc->notice_location }}" title=" {{ $ntc->title }}" class="text-light pl-0" style="text-decoration: none;">
                            <span>
                                <i class="fa fa-caret-right pl-1 pr-2" style="color: green;"></i>
                                <span>{{ $ntc->title }}</span>
                            </span>
                        </a>
                    @php
                            endforeach;
                        else:
                    @endphp
                        Sorry! No data found
                    @php
                        endif;
                    @endphp
                </marquee>
            </div>
        </div>
    </div>
    <!--End Marque Notice-->
    <!--Start notice*-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
    <div class="m-0" id="notice-board">
        <div class="notice-board-bg">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="mt-4 pl-1">
                        <h2 class="btn btn-success rounded-0">নোটিশ বোর্ড</h2>
                        <ul class="list-unstyled pr-2">
                            @php
                                if(count($notice)>0):
                                    foreach($notice as $ntcl):
                            @endphp
                                    <li class="nav-item mb-1 text-left fw-bold text-danger border border-top-0 border-right-0 border-left-0 mb-1 p-1">
                                        <i class='fa fa-arrow-right text-success'></i> <a data-fancybox data-type="iframe" class="pl-0" href="{{ asset('/') }}public/storage/frontend/uploads/notice/{{ $ntcl->notice_location }}" title=" {{ $ntcl->title }}">
                                            <span class="fw-bold text-danger">{{ $ntcl->title }} ({{ $ntcl->created_at->format('Y-m-d') }})</span>
                                        </a>
                                    </li>
                            @php    
                                    endforeach;
                                else:
                            @endphp
                                <div class="alert alert-info">Sorry! No notice found</div>
                            @php
                                endif;
                            @endphp
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End notice -->

    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    আমাদের দৃষ্টিঃ-
                </h5>
            </div>
            <div class="card-body radius-0 text-center" style="background-color: #fff;">
                <h3>“৪র্থ শিল্প বিপ্লবের জন্য শ্রেষ্ঠ মানের আউটপুট।”</h3>
            </div>
        </div>
    </div>
    <!--End News Events-->

    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    আমাদের  লক্ষ্যঃ-
                </h5>
            </div>
            <div class="card-body radius-0 text-center" style="background-color: #fff;">
                <p>“বাংলাদেশের প্রযুক্তিগত এবং আর্থ-সামাজিক উন্নয়নে অবদান রাখার জন্য ব্যাপকভাবে শিল্পের সঙ্গে মানসম্মত শিক্ষা ও প্রশিক্ষন, সঠিক নির্দেশনা এবং পরামর্শ, সহযোগিতা প্রদানের মাধ্যমে বাংলাদেশ সার্ভে ইনস্টিটিটকে স্বনির্ভরশীল প্রমান করা।”</p>
                <h4 class="alert alert-success fw-bold text-center">মূল্যবোধঃ- নেতৃত্ব, ইনোভেশন, ত্যাগ, এক্সেলেন্স এবং প্রতিষ্ঠা।</h4>
            </div>
        </div>
    </div>
    <!--End News Events-->

    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <span class="fa fa-calendar"></span>
                    নিউজ এন্ড ইভেন্ট
                </h5>
            </div>
            <div class="card-body radius-0" style="background-color: #fff;">
                
            </div>
        </div>
    </div>
    <!--End News Events-->

    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>বার্ষিক কর্মসম্পাদন ও ব্যবস্থাপনা</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/frontend/image/Annual_Management.png" alt="Annual_Management" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="#"> পরিপত্র/ নীতিমালা </a></li>
                        <li><a href="#"> চুক্তি সমূহ </a></li>
                        <li><a href="#"> বার্ষিক পুস্তিকা </a>       </li>
                        <li><a href="/public/backdoor/uploads/Notice/APP Aproval 22-2-22.pdf"target="_blank"> বার্ষিক ক্রয় পরিকল্পনা বাজেট  </a></li>
                        <li><a href="#"> এপএমএস </a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-6 col-sm-12 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>উদ্ভাবনী কার্যক্রম</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/frontend/image/Innovaation.jpg" alt="Innovaation" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="#"> ইনোভেশন টিম </a></li>
                        <li><a href="#"> উদ্ভাবন বাণিজ্যিকরণ</a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-6 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>শুদ্ধাচার</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/frontend/image/Intrigrity.jpg" alt="Intrigrity" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="#"> অধিদপ্তরের কর্মপরিকল্পনা </a></li>
                        <li><a href="#"> জাতীয় শুদ্ধাচার কৌশল কমিটি </a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-6 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>সেবাসমূহ</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/frontend/image/Services.png" alt="Services" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="#">বোর্ড রেজাল্ট</a></li>
                        <li><a href="#">লাইভ ক্লাস</a></li>
                        <li><a href="#">ইন্ডাস্ট্রি লিংকেজ</a></li>
                    </ul>
                </div>
            </div>
    
            <div class="col-md-6 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>রোভার স্কাউট দল</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/frontend/image/rover-bd.png" alt="" width="110" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="#">কর্মকর্তাগনের তথ্য</a></li>
                        <li><a href="#">সদস্যদের তথ্য</a></li>
                        <li><a href="#">নোটিশ</a></li>
                        <li><a href="#">ফটো গ্যালারী</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>যুব রেড ক্রিসেন্ট সোসাইটি</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/frontend/image/bangladesh-rc-logo.png" alt=" " width="110" />
                    <ul class="caption fade-caption" style="margin: 0;">
                        <li><a href="#">কর্মকর্তাগনের তথ্য</a></li>
                        <li><a href="#">সদস্যদের তথ্য</a></li>
                        <li><a href="#">নোটিশ</a></li>
                        <li><a href="#">ফটো গ্যালারী</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="card card-primary rounded-0">
            <h6 class="card-header bg-success text-white rounded-0">গুগল ম্যাপ </h6>
            <div class="card-body">
                <div class=""><div class=""><iframe width="100%" height="550" id="gmap_canvas" src="https://maps.google.com/maps?q=%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6%20%E0%A6%B8%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%AD%E0%A7%87%20%E0%A6%87%E0%A6%A8%E0%A6%B8%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A6%89%E0%A6%9F&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:550px;width:100%;}</style><a href="https://www.embedgooglemap.net">create google map for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:550px;width:100%;}</style></div>
                </div>
            </div>
        </div>
    </div>
    <!--Photo Gallery-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-camera"></i>
                    ফটো গ্যালারি
                </h5>
            </div>
            <div class="card-body radius-0 row" style="background-color: #fff;">
                @php
                    $photogallery = \App\Models\PhotoGallery::all();
                    $x=1;
                    foreach($photogallery as $pgl):
                @endphp
                <div class="col-6 col-md-4">
                    <a href="#" class="shadow text-center" data-toggle="modal" data-target="#pg-{{ $x }}">
                      <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $pgl->location }}" alt="{{ $pgl->title }}" class="img-fluid shadow img-thumbnail"/>
                      <p>{{ $pgl->title }}</p>
                    </a>
                    
                    <!-- gallery {{ $x }} -->
                    <div class="modal fade" id="pg-{{ $x }}" tabindex="-1" role="dialog" aria-labelledby="GalleryLabel-{{ $x }}" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="GalleryLabel-{{ $x }}">{{ $pgl->title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $pgl->location }}" alt="{{ $pgl->title }}" class="img-fluid shadow"/>
                            {{ $pgl->details }}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @php
                    $x++;
                    endforeach;
                @endphp
            </div>
        </div>
    </div>

    <!--Video Gallery-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-film"></i>
                    ভিডিও গ্যালারি
                </h5>
            </div>
            <div class="card-body radius-0 row" style="background-color: #fff;">
                <div class="col-12 col-md-6">
                    <iframe style="width: 100%; height: 250px;" src="https://www.youtube.com/embed/W9SB53E-r6k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    ></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <iframe style="width: 100%; height: 250px;" src="https://www.youtube.com/embed/rE8fpR8FqTU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <iframe style="width: 100%; height: 250px;" src="https://www.youtube.com/embed/CGEr6m8aUwQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <iframe style="width: 100%; height: 250px;" src="https://www.youtube.com/embed/GQcmbqD0r7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection