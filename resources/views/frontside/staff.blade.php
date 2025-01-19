@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}
#myTable th,td{
        text-align:left !important;
        vertical-align:center;
}
#myTable th{
    font-weight:bold;
}
</style>

 <section class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center con-title">
            <h2 class="hedingAbout wow fadeInLeft animated" data-wow-delay=".60s">অফিস <span>কর্মকর্তা/কর্মচারীগণ</span> </h2>
        </div>
    </div>
    <div class="row align-items-center">
        @if(!empty($Datakey))
         @foreach($Datakey as $data)
         <div class="col-12">
             <table class="table table-bordered">
                 <td style="width:10%"><img  class="w-100 img-thumbnail" src="@if(!empty($data->avatar)){{asset('/public/storage/frontend/uploads/staff/')}}/{{$data->avatar}} @else{{ asset('/') }}public/storage/frontend/uploads/staff/avatar.jpg @endif"/></td>
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
        @endif
    </div>
</section>
@endsection