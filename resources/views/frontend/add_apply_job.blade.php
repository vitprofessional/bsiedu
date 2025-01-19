@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row align-items-center">
      <style>
   div#myTable_paginate {
    position: relative;
    top: -20px;
    left: 67%;
    cursor: pointer;
}
a#myTable_previous, a#myTable_next {
    padding: 7px 15px;
    background: #000!important;
    boder: 4px;
    /* border: 6px; */
    color: #fff!important;
}
  @media only screen and (max-width: 600px) {
              div#myTable_paginate {
                position: relative;
                top: 5px;
                cursor: pointer;
                left: -11px;
            }
     }
a.paginate_button {
    padding: 12px;
}
    </style>
      <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
       <div class="card">
            <div class="card-body radius-0" style="background-color: #fff;"> 
              <div class="card-header">
                <h2>Job Placement</h2>
             
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('Storejob')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name2" class="form-control" onpaste="validatePaste(this, event)">
                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                             <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                          </div>
                           <div class="form-group col-md-6">
                            <label for="mobile">Phone</label>
                            <input type="text" name="mobile" class="form-control" onpaste="validatePaste(this, event)">
                             <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                          </div>
                           <div class="form-group col-md-6">
                            <label for="rollno">Rollno</label>
                            <input type="text" name="roll_number" id="rollnumber" class="form-control" onpaste="validatePaste(this, event)">
                             <font style="color:red">{{($errors->has('roll_number'))?($errors->first('roll_number')):''}}</font>
                        </div>
                          <div class="form-group col-md-6">
                            <label for="session">Session</label>
                            <input type="text" name="session" class="form-control" id ="session" onpaste="validatePaste(this, event)">
                             <font style="color:red">{{($errors->has('session'))?($errors->first('session')):''}}</font>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="jobtitle">Job Position</label>
                            <input type="text" name="position" id="position" class="form-control" onpaste="validatePaste(this, event)">
                            <font style="color:red">{{($errors->has('position'))?($errors->first('position')):''}}</font>
                        </div>
                           <div class="form-group col-md-6">
                            <label for="company">Company</label>
                            <input type="company" name="company" id="company" class="form-control" onpaste="validatePaste(this, event)">
                             <font style="color:red">{{($errors->has('company'))?($errors->first('company')):''}}</font>
                          </div>
                           <div class="form-group col-md-12">
                            <label for="jobdes">Job Description</label>
                            <textarea class="form-control" id="description" name="details" rows="3" onpaste="validatePaste(this, event)"></textarea>
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
              <table id="myTable" class="table table-bordered table-responsive">
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