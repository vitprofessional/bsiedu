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
                    @if(count((array)($photogallery))>0)
                        <div class="row align-items-center">
                            <div class="col-12 text-center row">
                                    <!-- photo gallery -->
                                @php
                                    $x=1;
                                    foreach($photogallery as $pgl):
                                @endphp
                                <div class="col-6 col-md-4">
                                    <a href="#" class="shadow text-center" data-toggle="modal" data-target="#pg-{{ $x }}">
                                      <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $pgl->location }}" alt="{{ $pgl->title }}" class="img-fluid shadow img-thumbnail"/>
                                      <p>{{ $pgl->title }}</p>
                                    </a>
                                    
                                    <!-- gallery {{ $x }} -->
                                    <div class="modal fade" id="pg-{{ $x }}" tabindex="-1" role="dialog" aria-labelledby="GalleryLabel-{{ $x }}" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="GalleryLabel-{{ $x }}">{{ $pgl->title }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $pgl->location }}" alt="{{ $pgl->title }}" class="img-fluid shadow"/>
                                            {{ $pgl->details }}
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                @php
                                    $x++;
                                    endforeach;
                                @endphp
                            </div>
                        </div>
                    @elseif(count($videogallery)>0)
                        <div class="row align-items-center">
                            <div class="col-12 row">
                                @php
                                    $x=1;
                                    foreach($videogallery as $vgl):
                                @endphp
                                <div class="col-6 col-md-4">
                                    <a href="#" class="shadow" data-toggle="modal" data-target="#vg-{{ $x }}">
                                      <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $vgl->location }}" alt="{{ $vgl->title }}" class="img-fluid shadow img-thumbnail"/>
                                      <p>{{ $vgl->title }}</p>
                                    </a>
                                    
                                    <!-- gallery {{ $x }} -->
                                    <div class="modal fade" id="vg-{{ $x }}" tabindex="-1" role="dialog" aria-labelledby="GalleryLabel-{{ $x }}" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="GalleryLabel-{{ $x }}">{{ $vgl->title }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <img src="{{ asset('/') }}public/storage/frontend/uploads/photogallery/{{ $pgl->location }}" alt="{{ $vgl->title }}" class="img-fluid shadow"/>
                                            {{ $vgl->details }}
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                @php
                                    $x++;
                                    endforeach;
                                @endphp
                            </div>
                        </div>
                    @else
                            <div class='alert alert-warning'>Sorry! No data found with your query</div>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection