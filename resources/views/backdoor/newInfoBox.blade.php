@extends('backdoor.include')
@section('bsiadmintitle')
Information Box
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3>Information Box Creation </h3> </div>
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
                            <form class="form text-danger font-weight-bold" action="{{ route('saveInfoBox') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}     
                                <div class="form-group">
                                    <lable for="semister">Box Name </lable>
                                    <input type="text" name="boxName" class="form-control" placeholder="Enter box headline">
                                </div>
                                <!--<div class="form-group">-->
                                <!--    <lable for="prostatus"> Status</lable>-->
                                <!--    <select class="form-control" name="status">-->
                                <!--        <option> Select </option>-->
                                <!--        <option value="Active">Active</option>-->
                                <!--        <option value="Inactive">Inactive</option>-->
                                <!--    </select>-->
                                <!--</div>-->
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="file" name="avatar">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a href="{{ route('infoBox') }}" class="btn btn-success">Manage</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection