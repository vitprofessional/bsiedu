@extends('backdoor.include') @section('bsiadmintitle') Result History @endsection @section('bsiadmincontent')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- coustom image -->
            <div class="row">
                <div class="col-lg-12 card">
                    <div class="card-header">Result History</div>
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
                                            <th>Title</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($result))
                                        @foreach($result as $res)
                                        <tr>
                                            <td>{!!$res->title!!}</td>
                                            <td>
                                            @php
                                                $extension = pathinfo(asset('storage/app/public/frontend/uploads/result').'/'.$res->avatar, PATHINFO_EXTENSION);
                                            @endphp
                                            @if($extension == 'pdf' || $extension == 'PDF')
                                            <iframe class="w-100 mb-4" src="{{ asset('storage/app/public/frontend/uploads/result').'/'.$res->avatar }}" alt="{!! $res->title !!}" style="width:100%;height:170px !important"></iframe>
                                            @else
                                            <img class="w-100 mb-4" src="{{ asset('storage/app/public/frontend/uploads/result').'/'.$res->avatar }}" alt="{!! $res->title !!}">
                                            @endif
                                            </td>
                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="{{ route('editResult',['id'=>$res->id]) }}" class="dropdown-item"><i class="ri-file-edit-fill align-bottom me-2 text-muted"></i> Edit</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item edit-item-btn" data-bs-toggle="modal" data-bs-target="#placeStd{{$res->id}}" href="#">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="placeStd{{$res->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Result Details</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Do You Want To Delete
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <a href="{{ route('delResult',['id'=>$res->id]) }}" type="button" class="btn btn-primary">Yes</a>
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
                                <a href="{{ route('newResult') }}" class="btn btn-success"><i class="ri-add-circle-fill"></i> Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
