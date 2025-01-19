@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row align-items-center">
      <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-body radius-0" style="background-color: #fff;"> 
              <div class="card-header">
                <h2>Contact Us</h2>
             
              </div>
                <div class="card-body">
                <form class="" method="post" id="myForm" action="{{route('contactStore')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" onpaste="validatePaste(this, event)">
                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="name" class="form-control">
                             <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                        </div>
                           <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" onpaste="validatePaste(this, event)">
                             <font style="color:red">{{($errors->has('phone'))?($errors->first('phone')):''}}</font>
                        </div>
                           <div class="form-group col-md-6">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" onpaste="validatePaste(this, event)">
                             <font style="color:red">{{($errors->has('subject'))?($errors->first('subject')):''}}</font>
                        </div>
                           <div class="form-group col-md-12">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" onpaste="validatePaste(this, event)" name="message" rows="3"></textarea>
                            <font style="color:red">{{($errors->has('message'))?($errors->first('message')):''}}</font>
                        </div> 
                          <div class="form-group col-md-6"> 
                            <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
               </div>
            </div>
          </div>
      </div>
 </div>
@endsection