@extends('backdoor.include')
@section('bsiadmintitle')
    Information Box Update
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3>Information Box Update</h3>
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
                            @if($boxInfo)
                            <form class="form text-danger font-weight-bold" action="{{ route('updateInfoBox') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}     
                                <input type="hidden" name="infoId" value="{{ $boxInfo->id }}">
                                <div class="form-group">
                                    <lable for="semister">Box Name </lable>
                                    <input type="text" name="boxName" value="{{ $boxInfo->boxName }}" class="form-control" placeholder="Enter box headline">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                    <a href="{{ route('infoBox') }}" class="btn btn-success">Manage</a>
                                </div>
                            </form>
                            
                            <form class="form text-danger font-weight-bold my-4" action="{{ route('updateInfoBoxMedia') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }} 
                                <input type="hidden" name="infoId" value="{{ $boxInfo->id }}">
                                <div class="form-group">
                                    @if(!empty($boxInfo->avatar))
                                        <lable for="avatar">Media</lable>
                                        <div class="my-2">
                                            <img style="width:100px;height:100px" src="/storage/app/public/frontend/uploads/box/{{$boxInfo->avatar }}" alt="{{ $boxInfo->boxName }}">
                                        </div>
                                        <a href="{{ route('delInfoBoxMedia',['id'=>$boxInfo->id]) }}">Delete</a>
                                    @else
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="file" name="avatar">
                                    @endif
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                            @else
                                <div class="alert alert-info">
                                    Sorry! No Data Found
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection