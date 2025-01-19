@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="row">
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="row align-items-center">
            <div class="col-md-12 mt-1 mb-1">
                <div id="box-1" class="card card-body">
                    <h5> Admin Profile</h5>
                    <hr class="mt-0" />
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
                    
                    @if(!empty($admin))
                    <div class="card mx-auto">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Name: {{ $admin->adminname }}</li>
                            <li class="list-group-item">Email: {{ $admin->adminemail }}</li>
                            <li class="list-group-item">Mobile: {{ $admin->adminmobile }}</li>
                            <li class="list-group-item">Speech : {{ $admin->adminspeech }}</li></li>
                            <li class="list-group-item"> <img src ="{{(!empty($admin->adminimage))?url('public/backdoor/uploads/user_images/'.$admin->adminimage):url('public/backdoor/upload/no_images.png')}}" style="width:150px; height:160px; border:1px solid #ddd"></li></li>
                             <li class="list-group-item">Action : <a title="edit" href="{{route('userEdit', $admin->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a></li></li>
                        </ul>
                    </div> 
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection