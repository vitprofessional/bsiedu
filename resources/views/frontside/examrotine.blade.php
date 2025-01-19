@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}

</style>

 <section style="margin-top:150px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center con-title">
                <h2 class="wow fadeInLeft animated" data-wow-delay=".60s"> পরিক্ষার <span>রুটিন</span></h2>
           </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               <div class="card">
                   <div class="card-header"> Exam Routine</div>
                   <div class="card-body">
                      <table id="myTable" class="display border" >
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Semester </th>
                                <th> Details </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Datakey as $data)
                            <tr>
                                <td>{{$data->exam}}</td>
                                <td>{{$data->semister}}</td>
                                <td><a data-fancybox data-type="iframe" href="{{asset('/')}}{{ $data->avatar }}" target="_blank"> <i class="fa fa-eye" style="color: green;"></i></a></td>
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