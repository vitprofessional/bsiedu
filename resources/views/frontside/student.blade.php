@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
body {
  background-image: url("/public/frontend/assets/images/bg/bg.png");
}
    .hedingAbout{
        text-align:center;
        margin-top:150px;
        margin-bottom:50px;
        
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
    
</style>

    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2 class=" wow fadeInLeft animated" data-wow-delay=".60s">ছাত্র/ছাত্রী <span>তথ্যাবলি</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Student</div>
                        <div class="card-body">
                            <!-- On tables -->
                          <table id="myTable" class="display border " >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Roll Number</th>                
                                    <th>Semester</th>
                                    <th>Photos</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($Datakey))
                                @foreach($Datakey as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->roll_number}}</td>
                                    <td>{{$data->semister}}</td>
                                    <td> <img style="width:70px;" src="@if(!empty($data->image)){{asset('/public/storage/frontend/uploads/student/')}}/{{$data->image}} @else{{ asset('/') }}public/storage/frontend/uploads/staff/avatar.jpg @endif"/></td>
                                    <td>{{$data->semister}}</td>
                                    <td><a href="#" class="btn btn-success btn-sm my-2" data-bs-toggle="modal" data-bs-target="#getData{{ $data->id }}" > Details </a></td>
                                </tr> 
<!-- Modal -->
<div class="modal fade" id="getData{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-5" id="staticBackdropLabel">Details About {{ $data->name }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <table class="table table-bordered">
              <tr>
                  <th class="fw-bold">Name</th>
                  <td>: {{ $data->name }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Session</th>
                  <td>: {{ $data->session }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Semester</th>
                  <td>: {{ $data->semister }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Roll Number</th>
                  <td>: {{ $data->roll_number }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Register Number</th>
                  <td>: {{ $data->regi_no }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Father</th>
                  <td>: {{ $data->father_name }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Mother</th>
                  <td>: {{ $data->mother_name }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Mobile</th>
                  <td>: {{ $data->phone_number }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Email</th>
                  <td>: {{ $data->email }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Address</th>
                  <td>: {{ $data->pre_address }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Religion</th>
                  <td>: {{ $data->religion }}</td>
              </tr>
              <tr>
                  <th class="fw-bold">Mobile</th>
                  <td>: {{ $data->birth_date }}</td>
              </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>          
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4"><div class="alert alert-info">Sorry! No data found</div></td>
                                </tr> 
                                @endif
                            </tbody>
                        </table>                         
                        </div>
                    </div>
               </div>
            </div>
            </div>
          </div>
    </section>
@endsection