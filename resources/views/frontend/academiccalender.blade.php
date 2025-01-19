@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row">

    <!--Video Section-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-header bg-green p-2 radius-0">
                <h5 class="card-title mb-0 text-light">
                    <i class="fa fa-attachment"></i>
                    Academic Calender
                </h5>
            </div>
            <div class="card-body radius-0" style="background-color: #fff;">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Education Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                if(count($academiccalender)>0):
                                    $x=1;
                                    foreach($academiccalender as $pro):
                            @endphp
                            <tr>
                                <td>{{ $x }}</td>
                                <td>{{ $pro->edu_year }}</td>
                                <td><a data-fancybox data-type="iframe" href="{{ asset('/') }}public/storage/frontend/uploads/academiccalender/{{ $pro->avatar }}" title=" {{ $pro->edu_year }}" class="text-light pl-0" style="text-decoration: none;">
                            <span>
                                <i class="fa fa-eye" style="color: green;"></i>
                            </span>
                            <!--<a href="{{ asset('/') }}public/storage/frontend/uploads/syllabus/{{ $pro->avatar }}"><i class="fa fa-download" style="color: green;"></i></a> -->
                        </a>
                                </td>
                            </tr>
                            @php
                                    $x++;
                                    endforeach;
                                else:
                            @endphp
                            <tr>
                                <td colspan="6"><div class="alert alert-warning">Sorry! No data found</div></td>
                            </tr>
                            @php
                                endif;
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection