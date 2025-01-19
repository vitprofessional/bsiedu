@extends('frontside.include')
@section('backtitle') Linkage Industry @endsection
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
                <h2 class="wow fadeInLeft animated" data-wow-delay=".60s"> সম্পাদিত <span>চুক্তিসমূহ</span></h2>
           </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    Linkage Industry
                </div>
                <div class="card-body">
                  <table id="myTable" class="display border" >
                        <thead>
                            <tr>
                                <th style="width:25%">Company</th>
                                <th style="width:25%">Location</th>
                                <th style="width:20%">Contact Person</th>
                                <th style="width:20%">Logo</th>
                                <th style="width:10%">MOU</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Datakey as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->location }}</td>
                                <td>{{ $data->contactPerson }}</td>
                                <td><img class="w-50" src="{{asset('/')}}storage/app/public/frontend/uploads/industry/{{ $data->companyLogo }}" alt="{{ $data->name }}"></td>
                                <td><a data-fancybox data-type="iframe" href="{{asset('/')}}storage/app/public/frontend/uploads/industry/{{ $data->mouSign }}" target="_blank"> <i class="fa fa-eye" style="color: green;"></i> </a></td>
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