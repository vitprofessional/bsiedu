@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Teachers Panel</h5>
                        </div>
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
                             <a class="btn btn-danger btn-sm  m-2" href="{{ route('newProfile',['profileType'=>'Teacher']) }}">New Profile</a>
                            <table data-order='[[ 1, "desc" ]]' data-page-length='20' id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Avatar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($staff as $stf)
                                    <tr>
                                        <td>{{$stf->name}}</td>
                                        <td>{{$stf->email}}</td>
                                        <td>{{$stf->phone_number}}</td>
                                        
                                        <td>
                                            <img src="{{ asset('/') }}public/storage/frontend/uploads/teacher/{{ $stf->avatar }}" class="img-fluid rounded w-50" alt="{{ $stf->name }}" />
                                        </td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$stf->id}}" href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn" href="{{ route('editProfile',['profileType'=>'Teacher','id'=>$stf->id]) }}">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Edit
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{$stf->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete profile of {{ $stf->name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            Do you really wanted to delete the profile?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <a href="{{route('delProfile',['profileType'=>'Teacher','id'=>$stf->id])}}"  type="button" class="btn btn-primary">Yes</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>                                     
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
@endsection