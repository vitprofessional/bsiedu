@extends('backend.include')
@section('adminviewtitle') 
    Homepage
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
            	input[name='age']{
            		width:300px;
            		height:40px;
            		text-align:center;
            		font-style:italic;
            		font-family:sans-serif;
            		background:lightyellow;
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
			<form method='post' action="{{route('updateNotice')}}" enctype='multipart/form-data'>
			    <input type="hidden" name="id" value="{{ $Datakey->id }}"  />
			    @csrf
				<table border='0' cellpadding='12' cellspacing='0'>
					<tr>
						<td> Title </td>
						<td> <input type='text' class="form-control" autofocus  required name='name' value="{{ $Datakey->title }}" placeholder='Enter Name'/></td>
					</tr>
					<tr>
						<td> Status </td>
						<td> 
						    <select class="form-control" name="status">	       
						       <option value="{{ $Datakey->status }}">{{ $Datakey->status }}</option>					       
						       <option value="Active">Active</option>
						       <option value="Pending">Pending</option>
						   </select>
						</td>
					</tr>
					<tr>
					    <td> File </td>
						<td> <input type='file' class="form-control" autofocus  required name='avatar' value="{{ $Datakey->avatar }}" placeholder='Enter Name'/></td>					    
					</tr>
					<tr>
					    <td></td>
					    <td> <iframe src="{{ asset('/').$Datakey->avatar }}" style="width: 200px;height: 100px;border: none;"></iframe> </td>
					</tr>
					<tr>
						<td> </td> 
						<td>
						    <button class="btn btn-success">Submit</button>
						</td>
					</tr>		
				</table>	
			</form>
	</fieldset>
</div>
        <script>
            var loadFile= function(event){
                var privew= document.getElementByid('privew');
                privew.src=privew.src= URL.createObjectURL(event.target.files['0']);
            }
        </script>
    </body>
</html>            

    
@endsection





















