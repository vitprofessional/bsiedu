@extends('frontside.include')
@section('backtitle') Welcome @endsection
@section('backcontent')

<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}
    .overlay{
        width:100%;
        height:400px;
        background:rgba(0,0,0,0.5);
        position:absolute;
        color:#fff;
        top:0px;
        text-align:center;
        padding-top:150px;
        margin:0px;
        font-size:30px;
        font-weight:300;
    }
    .overlay span{
        font-size:30px;
        font-weight:300;  
    }
    .slide{
        width:100%;
        max-height:400px;
    }
    .custom-img{
      height:250px;
    }
    .custom-img:hover{ 
      filter: grayscale(100%);
    }
</style>
<div class="container mt-2">
    <!--slider section start here-->
    <section class="row">
        <div class="col-10 col-md-12 mx-auto">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner rounded">
                   @foreach($Datakey as $data)
                    <div class="carousel-item active">
                        <img style="width:100%; max-height:400px;" src="{{asset('/')}}{{$data->location}}" alt="image"/>
                        <div class="overlay"> 
                            <span class="text-white">বাংলাদেশ সার্ভে ইন্সটিটিট</span><br>
                            Bangladesh Survey Institute, Cumilla  
                        </div>
                    </div>
                 @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="z-index:0;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="z-index:0;" >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>            
        </div>
    </section>
    <!--Notice board here-->
    <section class="row mt-4">
        <div class="col-10 col-md-9 mx-auto">
            <div class="card rounded-0 p-0">
                <div class="card-header bg-success rounded-0 text-white"><p class="mb-0 fw-bold text-white">সর্বশেষ নোটিশ</p></div>
                <table class="table table-bordered text-center mb-0">
                    <thead>
                        <th class="fw-bold" style="width:15%">Publish Date</th>
                        <th class="fw-bold">Subject</th>
                        <th class="fw-bold">View</th>
                    </thead>
                    <tbody>
                        @foreach($Notice as $data)
                        <tr>
                            <td class="text-danger fw-semi-bold">{{ $data->updated_at->format('m-d-Y') }}</td>
                            <td> <a data-fancybox data-type="iframe" href="{{ asset('/') }}public/storage/frontend/uploads/notice/{{ $data->notice_location }}" title=" {{ $data->title }}" class="text-danger fw-semi-bold p-0" style="text-decoration: none;">{{ \Illuminate\Support\Str::words($data->title, 10,'...') }}</a></td>
                            <td>
                                <a data-fancybox data-type="iframe" href="{{ asset('/') }}public/storage/frontend/uploads/notice/{{ $data->notice_location }}" title=" {{ $data->title }}" class="text-light pl-0" style="text-decoration: none;">
                                    <span>
                                        <i class="fa fa-eye pl-1 pr-2 text-danger fw-semi-bold"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-10 col-md-3 mx-auto mt-md-0 mt-2">
            <div class="card rounded-0 p-0">
                <div class="card-header bg-success rounded-0 text-white"><p class="mb-0 fw-bold text-white">অধ্যক্ষ কর্ণার</p></div>
                <div class="p-2 text-center">
                    @php 
                        $admin = \App\Models\AdminPanel::first();
                    @endphp
                    @if(!empty($admin))
                        <img src="{{ asset('/') }}/public/backdoor/uploads/user_images/{{ $admin->adminimage }}" class="img-responsive img-rounded" alt="Principal Speech" style="max-height:250px" title="Principal Speech" />
                        <br />
                        <p class="mb-0 fw-bold mt-2">
                            {{ $admin->adminname }}
                        </p>
                        <a href="{{ route('principalSpeech') }}">অধ্যক্ষের বাণী</a>
                    @else
                    <img src="{{ asset('/') }}public/frontend/uploads/profile-picture/principal.jpg" class="img-responsive img-rounded" alt="Principal" title="none" />
                    <br />
                    <p class="mb-0 text-white fw-bold">
                        
                    </p>
                    <a href="#">বাণী</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--Mission & Vision section here-->
    <section class="row mt-4">
        <div class="col-10 col-md-9 mx-auto">
            <div class="card rounded-0 p-0">
                <div class="card-header bg-success rounded-0 text-white"><p class="mb-0 fw-bold text-white">আমাদের লক্ষ্য</p></div>                        <div class="card-body text-center">
                    <p>“বাংলাদেশের প্রযুক্তিগত এবং আর্থ-সামাজিক উন্নয়নে অবদান রাখার জন্য ব্যাপকভাবে শিল্পের সঙ্গে মানসম্মত শিক্ষা ও প্রশিক্ষন, সঠিক নির্দেশনা এবং পরামর্শ, সহযোগিতা প্রদানের মাধ্যমে বাংলাদেশ সার্ভে ইনস্টিটিটকে স্বনির্ভরশীল প্রমান করা।”</p>
                    <div class="alert alert-success rounded-0">
                        <p class="mb-0 fw-bold">মূল্যবোধঃ- নেতৃত্ব, ইনোভেশন, ত্যাগ, এক্সেলেন্স এবং প্রতিষ্ঠা।</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10 col-md-3 mx-auto">
            <div class="card rounded-0 p-0">
                <div class="card-header bg-success rounded-0 text-white"><p class="mb-0 fw-bold text-white">আমাদের দৃষ্টি</p></div>                        <div class="card-body text-center">
                    <div class="alert alert-success rounded-0">
                        <p class="mb-0 fw-bold">“৪র্থ শিল্প বিপ্লবের জন্য শ্রেষ্ঠ মানের আউটপুট।”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Box section here-->
    <section class="row mt-2">
        @if(!empty($boxInfo))
        @foreach($boxInfo as $ib)
        <div class="col-10 col-md-4 my-2">
            <div class="card card-primary rounded-0" style="height:240px">
                <div class="card-header text-white bg-success rounded-0">
                    <p class="mb-0 text-white fw-bold">{{ $ib->boxName }}</p>
                </div>
                <div class="card-body row align-items-center">
                    <div class="col-12 col-md-4 text-center">
                        <img class="w-75" src="/storage/app/public/frontend/uploads/box/{{$ib->avatar }}" alt="{{ $ib->boxName }}">
                    </div>
                    <div class="col-12 col-md-8">
                        <ul class="caption fade-caption" style="margin: 0;">
                            @php
                                $boxContent = \App\Models\BoxContent::groupBy('contentTitle')->where(['boxId'=>$ib->id])->orderBy('id','ASC')->get();
                            @endphp
                            @if(empty($boxContent))
                                <li><a href="#"> Information Not Found</a></li>
                            @else
                                @foreach($boxContent as $con)
                                    @if($con->typeContent == 'Link')
                                    <li><a target="_blank" href="{{ $con->link }}"> {{ $con->contentTitle }} </a></li> 
                                    @elseif($con->typeContent == 'PDF/Image')
                                        @php
                                            $totContent = \App\Models\BoxContent::where(['contentTitle'=>$con->contentTitle,'boxId'=>$con->boxId])->get();
                                            $totalCon   = count($totContent);
                                        @endphp
                                        @if($totalCon>1)
                                        <li><a target="_blank" href="{{ route('boxContentShow',['boxId'=>$con->boxId,'title'=>$con->contentTitle]) }}"> {{ $con->contentTitle }} </a></li>
                                        @else
                                        <li><a target="_blank" href="/storage/app/public/frontend/uploads/box/content/{{$con->avatar }}"> {{ $con->contentTitle }} </a></li>
                                        @endif
                                    @else
                                        <li><a href="#"> Information Not Found</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-10 col-md-4 my-2 mx-auto">
            <div class="card card-primary rounded-0">
                <div class="card-header text-white bg-success">
                    <p class="mb-0 text-white fw-bold">সেবা প্রদান ও প্রতিশ্রুতি (সিটিজেন চার্টার)</p>
                </div>
                <div class="card-body row align-items-center">
                    <div class="col-12 col-md-4 text-center">
                        <img class="w-75" src="{{ asset('/') }}public/assets/images/boxes/1.jpg" alt="Institute">
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="">Data Not Found</div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>
    <!--photo gallery here-->
    <section class="row mt-2">
        <div class="col-10 col-md-12 mx-auto">
            <div class="card card-primary rounded-0">
                <div class="card-header text-white bg-success">
                    <p class="mb-0 text-white fw-bold">Photo Gallery</p>
                </div>
                <div class="card-body row align-items-center">
                    @if(!empty($Photo))
                    @foreach($Photo as $data)
                    <div class="col-12 mx-auto col-md-4 my-2">
                        <a class="wow fadeIn animated" data-wow-delay=".60s" href="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $data->location }}" data-lightbox="mygallery" >
                            <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $data->location }}"  alt="{{ $data->title }}" class="img-responsive img-thumbnail rounded-0 custom-img" />
                        </a>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12"><div class="">No data found</div></div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--video gallery here-->
    <section class="row mt-2">
        <div class="col-10 col-md-12 mx-auto">
            <div class="card card-primary rounded-0">
                <div class="card-header text-white bg-success">
                    <p class="mb-0 text-white fw-bold">Video Gallery</p>
                </div>
                <div class="card-body row align-items-center">
                    @if(!empty($video))
                    @foreach($video as $data)
                    <div class="col-12 mx-auto col-md-4 my-2">
                        <video width="100%" height="250px" src="{{url('/').'/'.$data->location}}" controls ></video>
                    </div>
                    @endforeach
                    @else
                    <div class="col-12"><div class="">No data found</div></div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
 @endsection


