@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3> Update Notice </h3> </div>
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
                                @php
                                   if(!empty($notice)):
                                @endphp
                                <div class="row">
                                    <div class="col-6 col-md-4">
                                        @php
                                            if(!empty($notice->notice_location)):
                                        @endphp
                                        <div class="form-group">
                                            <iframe src="{{ asset('/') }}public/storage/frontend/uploads/notice/{{ $notice->notice_location }}" title="{{ $notice->title }}">
                                            </iframe>
                                        </div>
                                        <div class="form-group">
                                            <a class="btn btn-danger btn-sm" href="{{ route('delNoticeObject',['id'=>$notice->id]) }}">Delete Media</a>
                                        </div>
                                        @php
                                            else:
                                        @endphp
                                        <form class="form" method="POST" action="{{ route('updatenoticeobject') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="proid" value="{{ $notice->id }}">
                                            <div class="form-group">
                                                <input class="form-control" type="file" name="avatar">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Upload Media" class="btn btn-success btn-sm">
                                            </div>
                                        </form>
                                        @php
                                            endif;
                                        @endphp
                                    </div>
                                </div>                         
                                        <form class="form text-danger font-weight-bold" action="{{ route('updatenotice') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}                        
                                            <input type="hidden" name="proid" value="{{ $notice->id }}">
                                            <div class="row">
                                                <div class="form-group">
                                                    <lable for="avatar">Notice Title</lable>
                                                    <input value="{{ $notice->title }}" class="form-control" type="text" placeholder="Enter notice title" name="title">
                                                </div>
                                                <div class="form-group">
                                                    <lable for="prostatus">Profile Status</lable>
                                                    <select class="form-control" name="prostatus">
                                                        <option value="{{ $notice->status }}">{{ $notice->status }}</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                                <a class="btn btn-success" href="{{ route('backnotice') }}">Notice List</a>
                                            </div>
                                        </form>
                            @php
                                else:
                                    echo "<div class='alert alert-warning'>Sorry! No Data Found</div>";
                                endif;
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection