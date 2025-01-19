@extends('backend.include')
@section('adminviewtitle') 
   videoEdite
@endsection
@section('adminviewcontent') 
    <html>
        <head>
            <style>
        		body{background:#ccc;}
        			.form{
        			width:auto;
        			height:auto;
        			margin:30px auto;
        			background:#f0f0f0;
        			box-shadow:3px 3px 11px #000;
        			padding:30px;
        		}

                legend{
                	font-size:24px;
                	padding-left:0px;
                	width:50px;
                }	
                fieldset{
                	border:1px solid #ddd;
                }
		</style>
    </head>
    <body>
<div class='form col-md-6 col-lg-6'>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-warning">
            {{ session()->get('error') }}
        </div>
    @endif    
	<fieldset>
		<legend> <img style="border-radius:100%; width:50px;"src="/public/backdoor/uploads/logo/sonarbangla.png"/> </legend>
		@if(!empty($Datakey))
			<form method='post' action="{{route('sliderUpdate')}}" enctype='multipart/form-data'>
			    <input type="hidden" name="id" value="{{ $Datakey->id }}"  />
			    @csrf
				<table border='0' cellpadding='12' cellspacing='0'>
					<tr>
					    <td> Title </td>
						<td> <input type='text' class="form-control" value="{{ $Datakey->title }}" autofocus  required name='title' placeholder='Enter Name'/></td>
					</tr>	
					<tr>
					    <td> Details </td>
						<td> <input type='text' class="form-control" value="{{ $Datakey->details }}" autofocus  required name='details' placeholder='Enter Name'/></td>
					</tr>					
					<tr>
						<td> image </td>
						<td> <input type='file'class="form-control" value="{{ $Datakey->location }}"  autofocus  required name='avatar' onchange=loadFile(event) placeholder='Enter Name'/></td>
					</tr>
					<tr>
					    <td>  </td>
					    <!--<td> <img  style="width:130px; border-style:1px solide #fff !importent;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/></td>-->
					    <td> <img id="privew" src="{{ asset('/').$Datakey->location }}" style="width:150px; height:100px; border-radius:5px;" frameborder="0"/> </td> 
					</tr>					
					<tr>
							<td>  </td>
						<td> <button class="btn btn-success">Update</button></td>
					</tr>				
				</table>
			</form>
		@else
		    <div class="m-2 alert alert-info">Sorry! No data found</div>
		@endif
	</fieldset>
</div>
        <script>
            var loadFile= function(event){
                var privew= document.getElementById('privew');
                privew.src=privew.src= URL.createObjectURL(event.target.files['0']);
            }
        </script>
    </body>
</html>            

    
@endsection




















