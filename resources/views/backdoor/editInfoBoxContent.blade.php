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
                        <div class="card-header"> <h3>Information Box Content Creation </h3> </div>
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
                            @if($boxContent)
                            <form class="form text-danger font-weight-bold" action="{{ route('updateInfoBoxContent') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}   
                                <input type="hidden" name="contentId" value="{{ $boxContent->id }}">    
                                <div class="form-group">
                                    <lable for="semister">Information Box </lable>
                                    <select name="boxName" class="form-control">
                                        @php
                                            $boxDetails = \App\Models\InfoBox::find($boxContent->boxId);
                                        @endphp
                                        @if($boxDetails)
                                        <option value="{{ $boxDetails->id }}">{{ $boxDetails->boxName }}</option>
                                        @else
                                        <option value="">Select</option>
                                        @endif
                                        @if($boxInfo)
                                            @foreach($boxInfo as $bi)
                                            <option value="{{ $bi->id }}">{{ $bi->boxName }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>  
                                <div class="form-group">
                                    <lable for="semister">Headline </lable>
                                    <input type="text" name="headline" class="form-control" value="{{ $boxContent->contentTitle }}" placeholder="Enter box headline">
                                </div>
                                <div class="form-group">
                                    <lable for="typeContent">Content Type </lable>
                                    <select name="typeContent" onchange="contentChange()" id="typeContent" class="form-control" required>
                                        <option value="{{ $boxContent->typeContent }}">{{ $boxContent->typeContent }}</option>
                                        <option value="Link">Link</option>
                                        <option value="PDF/Image">PDF/Image</option>
                                    </select>
                                </div>
                                <div id="content">
                                    <div class='form-group'>
                                        <lable for='avatar'>File</lable>
                                        <input class='form-control' type='file' name='avatar[]'>
                                    </div>
                                    <a class='my-2' href='javascript:void(0);' onclick='createInputBox()'>Add New</a>
                                </div>
                                    <div class="form-group">
                                        @php
                                            $avatarAll = \App\Models\BoxContent::where(['boxId'=>$boxContent->boxId,'contentTitle'=>$boxContent->contentTitle,'typeContent'=>'PDF/Image'])->get();
                                        @endphp
                                        @if(!empty($avatarAll))
                                        <div class="row">
                                            @foreach($avatarAll as $ava)
                                            <div class="col-6">
                                                <div class="my-2">
                                                    <iframe class="w-100" style="height:150px" src="/storage/app/public/frontend/uploads/box/content/{{ $ava->avatar }}" alt="{{ $ava->boxName }}"></iframe>
                                                </div>
                                                <a href="{{ route('delInfoBoxContent',['id'=>$ava->id]) }}">Delete</a>
                                            </div>
                                            @endforeach
                                    </div>
                                        @endif
                                </div>
                                <div class="form-group mt-2">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                    <a href="{{ route('infoBox') }}" class="btn btn-success">Manage</a>
                                </div>
                            </form>
                            @else
                                <div class="alert alert-info">
                                    Sorry! No Data Found
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function contentChange(){
        var x = document.getElementById("typeContent").value;
        if(x=='Link'){
            document.getElementById('content').innerHTML = "<div class='form-group'><lable for='link'>Link</lable><input class='form-control' type='text' name='link' placeholder='Enter content link'></div>";
        }else if(x=='PDF/Image'){
            document.getElementById('content').innerHTML = "<div class='form-group'><lable for='avatar'>File</lable><input class='form-control' type='file' name='avatar[]'></div><a class='my-2' href='javascript:void(0);' onclick='createInputBox()'>Add New</a>";
        }else{
            alert('Please select content type');
        }
    }
    
    function createInputBox(){
        var maxField = 10; //Input fields increment limitation
        var wrapper = $('#content'); //Input field wrapper
        var fieldHTML = "<div><div class='form-group'><lable for='avatar'>File</lable><input class='form-control' type='file' name='avatar[]'></div><a href='javascript:void(0);' class='remove_button'>Remove</a></div>"; //New input field html 
        var x = 1; //Initial field counter is 1
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    }
</script>
@endsection