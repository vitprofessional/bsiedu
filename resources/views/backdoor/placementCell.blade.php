@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-lg-12 card"> 
                    <div class="card-body">
                        @if(Session::get('success'))
                          <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="material-icons">close</i>
                            </button>
                            <span>{!! Session::get('success') !!}</span>
                          </div>
                        @endif
                        
                        @if(Session::get('error'))
                          <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="material-icons">close</i>
                            </button>
                            <span>{!! Session::get('error') !!}</span>
                          </div>
                        @endif 
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="placement-tab" data-bs-toggle="tab" data-bs-target="#placement-tab-pane" type="button" role="tab" aria-controls="placement-tab-pane" aria-selected="true">Placement Cell</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jobseekers-tab" data-bs-toggle="tab" data-bs-target="#jobseekers-tab-pane" type="button" role="tab" aria-controls="jobseekers-tab-pane" aria-selected="false">Job Seekers</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="placement-tab-pane" role="tabpanel" aria-labelledby="placement-tab" tabindex="0">
                                <div class="card rounded-0 border-top-0">
                                    <div class="card-body table-responsive"> 
                                        <!-- On tables -->
                                        <table data-order='[[ 0, "desc" ]]' id="example" class="table table-border" >
                                            <thead>
                                                <tr>
                                                    <th class="d-none">ID</th>
                                                    <th>Name</th>
                                                    <th>Session</th>
                                                    <th>Roll Number</th>
                                                    <th>Company</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($placement as $place)
                                                <tr>
                                                    <td class="d-none">{!!$place->id!!}</td>
                                                    <td>{!!$place->name!!}</td>
                                                    <td>{!!$place->session!!}</td>
                                                    <td>{!!$place->roll_number!!}</td>
                                                    <td>{!!$place->company!!}</td>
                                                    <td><img class="w-50" src="@if(!empty($place->photo)) {{ asset('/storage/app/public/frontend/uploads/').'/'.$place->photo }} @else {{ asset('/public/assets/images/users/avataricon.webp') }} @endif" alt="{!! $place->name !!}" style="max-height:120px !important"></td>
                                                    <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" data-bs-toggle="modal" data-bs-target="#getPlacement{{ $place->id }}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn" data-bs-toggle="modal" data-bs-target="#placeStd{{$place->id}}" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
        <!-- Modal -->
        <div class="modal fade" id="getPlacement{{ $place->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <p class="modal-title fs-5" id="staticBackdropLabel">Details About {{ $place->name }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <div class="text-center mb-3">
                        <img class="w-50 border" src="{{ asset('/storage/app/public/frontend/uploads/').'/'.$place->photo}}" alt="{!! $place->name !!}">
                    </div>
                  <table class="table table-bordered">
                      <tr>
                          <th class="fw-bold">Session</th>
                          <td>: {!! $place->session !!}</td>
                      </tr>
                      <tr>
                          <th class="fw-bold">Roll Number</th>
                          <td>: {!! $place->roll_number !!}</td>
                      </tr>
                      <tr>
                          <th class="fw-bold">Company</th>
                          <td>: {!! $place->company !!}</td>
                      </tr>
                      <tr>
                          <th class="fw-bold">Position</th>
                          <td>: {!! $place->position !!}</td>
                      </tr>
                      <tr>
                          <th class="fw-bold">Mobile</th>
                          <td>: {!! $place->mobile !!}</td>
                      </tr>
                      <tr>
                          <th class="fw-bold">Email</th>
                          <td>: {!! $place->email !!}</td>
                      </tr>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="placeStd{{$place->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Do You Want To Delete
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="{{ route('delPlaceStudent',['id'=>$place->id]) }}"  type="button" class="btn btn-primary">Yes</a>
              </div>
            </div>
          </div>
        </div> 
                                                    </td>
                                                </tr>
                                                @endforeach           
                                               
                                            </tbody>
                                         </table>                         
                                    </div>
                                </div>    
                            </div>
                            <div class="tab-pane fade card rounded-0" id="jobseekers-tab-pane" role="tabpanel" aria-labelledby="jobseekers-tab" tabindex="0">
                                <div class="card-body">
                                    <!-- On tables -->
                                    <table data-order='[[ 0, "desc" ]]' id="example" class="table table-border" >
                                        <thead>
                                            <tr>
                                                <th class="d-none">ID</th>
                                                <th>Name</th>
                                                <th>Session</th>
                                                <th>Roll Number</th>
                                                <th>Photo</th>
                                                <th>View CV</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ns as $n)
                                            <tr>
                                                <td class="d-none">{!!$n->id!!}</td>
                                                <td>{!!$n->name!!}</td>
                                                <td>{!!$n->session!!}</td>
                                                <td>{!!$n->roll_number!!}</td>
                                                <td><img class="w-50" src="{{ asset('/storage/app/public/frontend/uploads/').'/'.$n->photo}}" alt="{!! $n->name !!}" style="max-height:120px !important"></td>
                                                <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" data-bs-toggle="modal" data-bs-target="#getData{{ $n->id }}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn" data-bs-toggle="modal" data-bs-target="#jobseekers{{$n->id}}" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
    <!-- Modal -->
    <div class="modal fade" id="getData{{ $n->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <p class="modal-title fs-5" id="staticBackdropLabel">CV of {{ $n->name }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                <div class="text-center">
                    <embed class="w-100" height="550px" src="{{ asset('/storage/app/public/frontend/uploads/').'/'.$n->cv}}" alt="{!! $n->name !!}"></embed>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="jobseekers{{$n->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Do You Want To Delete
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <a href="{{ route('delNeedyStudent',['id'=>$n->id]) }}"  type="button" class="btn btn-primary">Yes</a>
          </div>
        </div>
      </div>
    </div> 
                                                </td>
                                            </tr>
                                            @endforeach           
                                           
                                        </tbody>
                                     </table>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection