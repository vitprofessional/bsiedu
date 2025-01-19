@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')
<div class="row">

    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <div class="row align-items-center">
            <div class="col-12 mt-1 mb-1">
                <div id="box-1" class="service-box box">
                    <h5>Database</h5>
                    <hr class="mt-0" />
                    <img class="img-responsiv img-thumbnail" src="{{ asset('/') }}public/backdoor/image/database-blue.png" alt="Database" />
                    <ul class="caption fade-caption">
                        <li><a href="{{ route('backsyllabus') }}">Syllabus</a></li>
                        <li><a href="{{ route('backprobidhan') }}">Probidhan</a></li>
                        <li><a href="{{ route('backsemisterplan') }}">Semister Plan</a></li>
                        <li><a href="{{ route('backclassroutine') }}">Class Routine</a></li>
                        <li><a href="{{ route('backexamroutine') }}">Exam Routine</a></li>
                        <li><a href="{{ route('backacademiccalender') }}"> Academic Calender </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection