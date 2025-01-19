@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row">

    <!--Video Section-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-user-secret"></i>
                    Principal Speech
                </h5>
            </div>
            <div class="card-body radius-0">
                @foreach($allData as $key => $user)
                    <div class="row">
                        <div class="col-12 col-md-6 mx-auto text-center">
                            <img src ="{{(!empty($user->adminimage))?url('public/backdoor/uploads/user_images/'.$user->adminimage):url('public/backdoor/upload/no_images.png')}}" class="img-fluid border border-success img-thumbnail rounded-0">
                            <h2 class="fw-bold">{{ $user->adminname }}</h2>
                            <h4 class="text-center">অধ্যক্ষ<br>বাংলাদেশ সার্ভে ইনস্টিটিউট, রামমালা, কুমিল্লা।</h4>
                        </div>
                        <div class="col-12 text-justify mt-2">
                            <h4 class="text-center"><u>অধ্যক্ষের বানী</u></h4>
                            <p>{{$user->adminspeech}}</p>
                        </div>
                    </div>
                @endforeach
                    
            </div>
        </div>
    </div>
</div>
@endsection