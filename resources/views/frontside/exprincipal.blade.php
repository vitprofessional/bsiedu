@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
body {
    background-image: url("/public/frontend/assets/images/bg/bg.png");
}
#myTable th{
    text-align:center;
}

</style>

 <section class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center con-title">
                <h2 class="wow fadeInLeft animated" data-wow-delay=".60s"> প্রাক্তন <span>অধ্যক্ষগণ</span></h2>
           </div>
        </div>
            <!-- On tables -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Ex-Principals List
                    </div>
                    <div class="card-body">
                <table id="myTable" class="display border" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start From</th>
                            <th>End To</th>
                            <th>Photo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Datakey as $data)
                        <tr class="text-center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->startdate}}</td>
                            <td>{{$data->enddate}}</td>
                            <td> <img src="@if(!empty($data->avatar)) {{asset('/')}}{{$data->avatar}} @else {{asset('/')}}/public/assets/images/users/user-dummy-img.jpg @endif" style="width:70px; height:70px;"/></td>
                              
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