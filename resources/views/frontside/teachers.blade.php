@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}

   .teachersImg{
        width:200px;
        height:180px;
        border-radius:5px;
        text-align:center;
        border:5px solid #a6a6a6;
       
        
    }
    .imgbox{
        width:270px;
        height:150;
        border-radius:10px;
        border:1px solid #a6a6a6;
        text-align:center;
        font-family:Raleway;
        font-size:15px;
        padding-top:30px;
        margin:10px;
    }
    table th,td{
        text-align:left !important;
        vertical-align:center;
    }
    table th{
        font-weight:bold;
    }
</style>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center con-title">
            <h2 class=" hedingAbout wow fadeInLeft animated" data-wow-delay=".60s">শিক্ষক/শিক্ষিকাগণের <span>তালিকা</span> </h2>
        </div>
    </div>
    <div class="row align-items-center">
         @foreach($Datakey as $data)
         <div class="col-12">
             <table class="table table-bordered">
                 <td style="width:10%"><img  class="w-100 img-thumbnail" src="@if(!empty($data->avatar)){{asset('/public/storage/frontend/uploads/teacher/')}}/{{$data->avatar}} @else{{ asset('/') }}public/storage/frontend/uploads/staff/avatar.jpg @endif"/></td>
                 <td style="width:90%">
                     <table class="table table-bordered">
                         <tr>
                             <th style="width:15%">Name</th>
                             <td colspan="3">: {{$data->name}}</td>
                         </tr>
                         <tr>
                             <th style="width:15%">Designation</th>
                             <td colspan="3">: {{$data->designation}}</td>
                         </tr>
                         <tr>
                             <th style="width:15%">Mobile</th>
                             <td style="width:35%">: {{$data->phone_number}}</td>
                             <th style="width:15%">Email</th>
                             <td style="width:35%">: {{$data->email}}</td>
                         </tr>
                     </table>
                 </td>
             </table>
         </div>
    @endforeach
    </div>
</div>





























@endsection