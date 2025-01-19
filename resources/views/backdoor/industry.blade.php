@extends('backdoor.include') @section('bsiadmintitle') Industry Linkage @endsection @section('bsiadmincontent')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- coustom image -->
            <div class="row">
                <div class="col-lg-12 card">
                    <div class="card-header">Linkage Industry</div>
                    <div class="card-body">
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{!! Session::get('success') !!}</span>
                        </div>
                        @endif @if(Session::get('error'))
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{!! Session::get('error') !!}</span>
                        </div>
                        @endif
                        <div class="card rounded-0 border-top-0">
                            <div class="card-body table-responsive">
                                <!-- On tables -->
                                <table data-order='[[ 0, "desc" ]]' id="example" class="table table-border">
                                    <thead>
                                        <tr>
                                            <th class="d-none">ID</th>
                                            <th>Industry</th>
                                            <th>Location</th>
                                            <th>Contact Person</th>
                                            <th>MOU Photo</th>
                                            <th>Industry Picture</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($industry))
                                        @foreach($industry as $ind)
                                        <tr>
                                            <td class="d-none">{!!$ind->id!!}</td>
                                            <td>{!!$ind->name!!}</td>
                                            <td>{!!$ind->location!!}</td>
                                            <td>{!!$ind->contactPerson!!}</td>
                                            <td><iframe class="w-50" src="@if(!empty($ind->mouSign)) {{ asset('storage/app/public/frontend/uploads/industry').'/'.$ind->mouSign }} @else {{ asset('/public/assets/images/users/avataricon.webp') }} @endif" alt="{!! $ind->name !!}" style="height:70px !important"></iframe></td>
                                            <td><img class="w-50" src="@if(!empty($ind->companyLogo)) {{ asset('storage/app/public/frontend/uploads/industry').'/'.$ind->companyLogo }} @else {{ asset('/public/assets/images/users/avataricon.webp') }} @endif" alt="{!! $ind->name !!}" style="max-height:120px !important"></td>
                                                    
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="{{ route('editLinkageIndustry',['id'=>$ind->id]) }}" class="dropdown-item"><i class="ri-file-edit-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item edit-item-btn" data-bs-toggle="modal" data-bs-target="#placeStd{{$ind->id}}" href="#">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="placeStd{{$ind->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Industry Linkage Delete</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Do You Want To Delete
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <a href="{{ route('delLinkageIndustry',['id'=>$ind->id]) }}" type="button" class="btn btn-primary">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <a href="{{ route('createLinkageIndustry') }}" class="btn btn-success"><i class="ri-add-circle-fill"></i> New Linkage Industry</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
