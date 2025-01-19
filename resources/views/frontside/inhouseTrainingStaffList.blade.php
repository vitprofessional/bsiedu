@extends('frontside.include')
@section('backtitle') Inhouse Training(Staff) @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}

</style>

 <section style="margin-top:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center con-title">
                <h2 class="wow fadeInLeft animated" data-wow-delay=".60s"> ইনহাউজ প্রশিক্ষন <span>(কর্মকর্তা/কর্মচারীবৃন্দ)</span></h2>
           </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    Inhouse Training(Staff)
                </div>
                <div class="card-body">
                  <table id="myTable" class="display border" >
                        <thead>
                            <tr class="text-center">
                                <th style="width:70%">Title</th>
                                <th style="width:30%">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Datakey as $data)
                            <tr>
                                <td>{{ $data->title }}</td>
                                <td><a data-fancybox data-type="iframe" href="{{asset('/')}}storage/app/public/frontend/uploads/inhouse/staff/{{ $data->avatar }}" target="_blank"> <i class="fa fa-eye" style="color: green;"></i> </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>       
                </div>                     
                </div>
           </div>
        </div>
    </div>
</section>

   


@endsection