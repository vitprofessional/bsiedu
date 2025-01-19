@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row align-items-center">
       <style>
   div#myTable_paginate {
    position: relative;
    top: 5px;
    left: 67%;
    cursor: pointer;
}
a.paginate_button {
    padding: 12px;
}
    </style>
      <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
      <div class="card">
              <div class="card-header">
                <h2>Job Places List</h2>
              </div>
                <div class="card-body">
              <table id="myTable" class="table table-bordered table-hover table-responsive">
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
                  <td>{{$jobplace->phone}}</td>
                  <td>{{$jobplace->company}}</td>
                  <td>{{$jobplace->jobtitle}}</td>
                </tr>
               @endforeach
          </tbody>
            </table>
              </div>
          
            </div>
         
      </div>
 </div>
@endsection