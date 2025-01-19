@extends('backend.include')
@section('adminviewtitle') 
    userprofile 
@endsection
@section('adminviewcontent')
        <section>    
            <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pr-0 ">
                        <div class="card-content text-center">
                          <img class="img-fluid m-10" src="{{ asset('/').$Datakey->adminimage }}"  style="border-radius:100%; width:200px; " /> 
    
                      </div>

                      </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pl-0 mt-10 text-center mt-2">
                            @if($Datakey)
                             <h5> <i data-feather="user"></i> {{ $Datakey->adminname }}</h5>
                             <h6> <i data-feather="layers"></i>   {{ $Datakey->position}}</h6>
                             <h6> <i data-feather="mail"></i>  {{$Datakey->adminemail}} </h6>
                             <h6> <i data-feather="phone"></i> {{$Datakey->adminmobile}}</h6>
                             <a href="{{route('editeUser',[$Datakey->id])}}" class="btn btn-success ">Edite</a>
                             <a href="{{route('passswordChange',[$Datakey->id])}}" class="btn btn-success ">PasswordEdite</a>
                            @endif
                        </div>
                       
                    </div>
                  </div>
                </div>
              </div>
        </section>
 
       
@endsection