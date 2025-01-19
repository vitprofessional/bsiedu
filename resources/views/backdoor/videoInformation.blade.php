@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3>Video Existing Info</h3>
                        </div>
                            <img class="img-responsive" src="{{ asset('/public/assets/images/videoinstruction.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection