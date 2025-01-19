@extends('frontend.include')
@section('bsititle')
@endsection
@section('bsicontent')
<div class="row align-items-center">

    <!--Video Section-->
    <div class="col-md-12 pt-0 pr-2 pl-2 pb-2">
        <!--Start News Events-->
        <div class="card">
            <div class="card-body radius-0" style="background-color: #fff;">
                    @php
                        $academic = "";
                        if($academic):
                    @endphp
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2>{{ $academic->page_name }}</h2>
                                @if(!empty($academic->avatar))
                                    <img width="100%" src="{{ asset('/') }}public/storage/frontend/uploads/page/{{ $academic->avatar }}" alt="{{ $academic->page_name }}">
                                @endif
                                <div class="row">
                                    <div class="col-12 text-center">
                                    @if(!empty($academic->page_headline)):
                                        <p>{{ $academic->page_headline }}</p>
                                    @endif;
                                    @if(!empty($academic->text_content))
                                        <p class="text-justify">{{ $academic->text_content }}</p>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @php
                        elseif(!empty($about)):
                    @endphp
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2>{{ $about->page_name }}</h2>
                                @if(!empty($about->avatar))
                                    <img width="100%" style="max-height:500px;" src="{{ asset('/') }}public/storage/frontend/uploads/page/{{ $about->avatar }}" alt="{{ $about->page_name }}">
                                @endif
                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                    @if(!empty($about->page_headline))
                                        <h3 class="text-left"><u>{{ $about->page_headline }}</u></h3>
                                    @endif
                                    @if(!empty($about->text_content))
                                        <p class="text-justify">{{ $about->text_content }}</p>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @php
                        else:
                            echo "<div class='alert alert-warning'>Sorry! No data found with your query</div>";
                        endif;
                    @endphp
            </div>
        </div>
    </div>
</div>
@endsection