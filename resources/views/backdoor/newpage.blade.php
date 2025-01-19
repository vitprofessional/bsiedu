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
                        <div class="card-header"> <h3>New Page Existing </h3> </div>
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
                    <form class="form text-danger font-weight-bold" action="{{ route('createpage') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                                <div class="form-group">
                                    <lable for="menuname">Under Menu</lable>
                                    <select class="form-control" name="menuname">
                                        <option value="আমাদের সম্পর্কে">আমাদের সম্পর্কে</option>
                                        <option value="একাডেমিক">একাডেমিক</option>
                                        <option value="শিক্ষা ও প্রশিক্ষন">শিক্ষা ও প্রশিক্ষন</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="page_name">Page Name</lable>
                                    <input class="form-control" type="text" name="page_name" placeholder="Enter page name">
                                </div>
                                <div class="form-group">
                                    <lable for="page_title">Page Title</lable>
                                    <input class="form-control" type="text" name="page_title" placeholder="Enter page title">
                                </div>
                                <div class="form-group">
                                    <lable for="page_headline">Headline</lable>
                                    <input class="form-control" type="text" name="page_headline" placeholder="Enter a valuable haedline">
                                </div>
                                <div class="form-group">
                                    <lable for="page_name">Text Content</lable>
                                    <textarea name="text_content" class="form-control" placeholder="Details"></textarea>
                                </div>
                                <div class="form-group">
                                    <lable for="prostatus">Page Status</lable>
                                    <select class="form-control" name="prostatus">
                                        <option value="Publish">Publish</option>
                                        <option value="Unpublish">Unpublish</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <lable for="avatar">Media</lable>
                                    <input class="form-control" type="file" name="avatar">
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                     <a class="btn btn-success" href="{{ route('pagelist') }}">Page List</a>
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