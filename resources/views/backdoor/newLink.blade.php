@extends('backdoor.include')
@section('bsiadmintitle')
Important Link
@endsection
@section('bsiadmincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3>New Important Link </h3> </div>
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
                            <form class="form text-danger font-weight-bold" action="{{ route('saveLink') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}     
                                <div class="form-group">
                                    <lable for="semister">Content Name</lable>
                                    <input type="text" name="content" class="form-control" placeholder="Enter content name">
                                </div>
                                <div class="form-group">
                                    <lable for="semister">Link </lable>
                                    <input type="text" name="link" class="form-control" placeholder="Enter link url">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                    <a href="{{ route('importantLink') }}" class="btn btn-success">Manage</a>
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