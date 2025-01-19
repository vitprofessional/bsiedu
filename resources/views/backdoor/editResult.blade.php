@extends('backdoor.include')
@section('bsiadmintitle')
Result Update
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3>Result Update </h3> </div>
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
                            @if($result)
                            <form class="form text-danger font-weight-bold" action="{{ route('updateResult') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}     
                                <input type="hidden" name="resId" value="{{ $result->id }}">
                                <div class="form-group">
                                    <lable for="title">Title </lable>
                                    <input type="text" name="title" value="{{ $result->title }}" class="form-control" placeholder="Enter result title">
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">Details</lable>
                                    @if(!empty($result->avatar))
                                        @php
                                            $extension = pathinfo(asset('storage/app/public/frontend/uploads/result').'/'.$result->avatar, PATHINFO_EXTENSION);
                                        @endphp
                                        @if($extension == 'pdf' || $extension == 'PDF')
                                        <iframe class="w-100 mb-4" src="{{ asset('storage/app/public/frontend/uploads/result').'/'.$result->avatar }}" alt="{!! $result->title !!}" style="width:100%;height:170px !important"></iframe>
                                        @else
                                        <img class="w-100 mb-4" src="{{ asset('storage/app/public/frontend/uploads/result').'/'.$result->avatar }}" alt="{!! $result->title !!}">
                                        @endif
                                        <a href="{{ route('delResultObject',['id'=>$result->id]) }}">Delete</a>
                                    @else
                                        <input class="form-control" type="file" name="avatar">
                                    @endif
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                    <a href="{{ route('resultList') }}" class="btn btn-success">Manage</a>
                                </div>
                            </form>
                            @else
                                <div class="alert alert-warning">Sorry! No data found</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection