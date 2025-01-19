@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row align-items-center">
     
  <style>
  div#myTable_paginate {
    position: relative;
    top: -16px;
    left: 75%;
    cursor: pointer;
}
a#myTable_previous, a#myTable_next {
    padding: 7px 15px !important;
    background: #000!important;
    boder: 4px !important;
    /* border: 6px; */
    color: #fff!important;
}
  @media only screen and (max-width: 600px) {
              div#myTable_paginate {
                position: relative !important;
                top: 5px !important;
                cursor: pointer !important;
                left: -11px !important;
            }
     }
a.paginate_button {
    padding: 12px !important;
}
    </style>  
      <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
       <div class="card">
            <div class="card-body radius-0 d-none d-md-block" style="background-color: #fff;"> 
              <div class="card-header">
                <h2>Job Placement</h2>
             
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('jobStore')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="jobtitle">Job Title</label>
                            <input type="text" name="jobtitle" class="form-control">
                            <font style="color:red">{{($errors->has('jobtitle'))?($errors->first('jobtitle')):''}}</font>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="rollno">Rollno</label>
                            <input type="rollno" name="rollno" class="form-control">
                             <font style="color:red">{{($errors->has('rollno'))?($errors->first('rollno')):''}}</font>
                        </div>
                           <div class="form-group col-md-6">
                            <label for="session">Session</label>
                            <input type="text" name="session" class="form-control">
                             <font style="color:red">{{($errors->has('session'))?($errors->first('session')):''}}</font>
                        </div>
                           <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control">
                             <font style="color:red">{{($errors->has('phone'))?($errors->first('phone')):''}}</font>
                          </div>
                           <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                             <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                          </div>
                           <div class="form-group col-md-6">
                            <label for="company">Company</label>
                            <input type="company" name="company" class="form-control">
                             <font style="color:red">{{($errors->has('company'))?($errors->first('company')):''}}</font>
                          </div>
                           <div class="form-group col-md-12">
                            <label for="jobdes">Job Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="jobdes" rows="3"></textarea>
                        </div> 
                          <div class="form-group col-md-6"> 
                            <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
               </div>
          
            </div>
          </div>
           
        <!--Start News Events-->
      <div class="card">
              <div class="card-header">
                <h2>Job Places List</h2>
              </div>
                <div class="card-body">
              <table id="myTable" class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Name</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Company</th>
                  <th scope="col">Position</th>
                </tr>
              </thead>
             <tbody>
              @foreach($alldata as $key => $jobplace)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$jobplace->name}}</td>
                  <td>{{$jobplace->mobile}}</td>
                  <td>{{$jobplace->company}}</td>
                  <td>{{$jobplace->position}}</td>
                </tr>
               @endforeach
          </tbody>
            </table>
              </div>
            </div>
      </div>
 </div>
@endsection