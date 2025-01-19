@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!-- coustom image -->
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card">
                        <div class="card-header"> <h3> Update Page </h3> </div>
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
                            @if(!empty($page)>0)
                            <div class="col-12 col-md-6">
                                @php
                                    if(!empty($page->avatar)):
                                @endphp
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <iframe src="{{ asset('/') }}public/storage/frontend/uploads/page/{{ $page->avatar }}" title="{{ $page->page_name }}">
                                    </iframe>
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-danger btn-sm" href="{{ route('delPageObject',['id'=>$page->id]) }}">Delete</a>
                                </div>
                                @php
                                    else:
                                @endphp
                                <form class="form" method="POST" action="{{ route('updatepageobjects') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="proid" value="{{ $page->id }}">
                                    <div class="form-group">
                                        <lable for="avatar">Media</lable>
                                        <input class="form-control" type="file" name="avatar">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-success btn-sm">
                                    </div>
                                </form>
                                @php
                                    endif;
                                @endphp
                            </div>    
                        <form class="form text-danger font-weight-bold" action="{{ route('updatepage') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="proid" value="{{ $page->id }}">
                        <div class="row">
                                <div class="form-group">
                                    <lable for="menuname">Under Menu</lable>
                                    <select class="form-control" name="menuname">
                                        <option value="{{ $page->menu }}">{{ $page->menu }}</option>
                                        <option value="আমাদের সম্পর্কে">আমাদের সম্পর্কে</option>
                                        <option value="একাডেমিক">একাডেমিক</option>
                                        <option value="শিক্ষা ও প্রশিক্ষন">শিক্ষা ও প্রশিক্ষন</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <lable for="page_name">Page Name</lable>
                                    <input class="form-control" type="text" name="page_name" placeholder="Enter page name" value="{{ $page->page_name }}">
                                </div>

                                <div class="form-group">
                                    <lable for="page_title">Page Title</lable>
                                    <input class="form-control" type="text" name="page_title" value="{{ $page->page_title }}" placeholder="Enter page title">
                                </div>
                                <div class="form-group">
                                    <lable for="page_headline">Headline</lable>
                                    <input class="form-control" type="text" name="page_headline" value="{{ $page->page_headline }}" placeholder="Enter a valuable haedline">
                                </div>
                                <div class="form-group">
                                    <lable for="page_name">Text Content</lable>
                                    <textarea name="text_content" class="form-control" placeholder="Details">{{ $page->text_content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <lable for="prostatus">Page Status</lable>
                                    <select class="form-control" name="prostatus">
                                        <option value="{{ $page->status }}">{{ $page->status }}</option>
                                        <option value="Publish">Publish</option>
                                        <option value="Unpublish">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                     <a class="btn btn-success" href="{{ route('pagelist') }}">Page List</a>
                                </div>
                            </form>
                    @else
                        <div class="alert alert-warning">Sorry! No data found with your query</div>
                       
                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection