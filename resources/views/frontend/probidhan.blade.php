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
                    Probidhan
                </h5>
            </div>
            <div class="card-body radius-0" style="background-color: #fff;">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Probidhan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                if(count($probidhan)>0):
                                    $x=1;
                                    foreach($probidhan as $pro):
                            @endphp
                            <tr>
                                <td>{{ $x }}</td>
                                <td>{{ $pro->probidhan }}</td>
                                <td><a data-fancybox data-type="iframe" href="{{ asset('/') }}public/storage/frontend/uploads/probidhan/{{ $pro->avatar }}" title=" {{ $pro->probidhan }}" class="text-light pl-0" style="text-decoration: none;"target="_blank">
                            <span>
                                <i class="fa fa-eye" style="color: green;"></i>
                            </span>
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