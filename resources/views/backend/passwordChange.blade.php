@extends('backdoor.include')
@section('bsiadmintitle')
@endsection
@section('bsiadmincontent')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <style>
        		body{background:#ccc;}
        			
        			.form{
        			width:500px;
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
        <div class='form col-md-5 col-lg-5 text-center'>
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
        		<legend>  </legend>
        			<form method='post' action="{{route('changePassword')}}" enctype='multipart/form-data'>	
        			    <input type="hidden" name='id' value="{{$Datakey->id}}"   />
        			    @csrf
        				<table border='0' cellpadding='12' cellspacing='0'>
        				    <tr>
        						<td> Preeview Passwrod </td>
        						<td> <input type='password' class="form-control" autofocus  required name='prevewPassowrd' placeholder='Enter Name'/></td>
        					</tr>
        					<tr>
        						<td> New Password </td>
        						<td> <input type='password' class="form-control" autofocus  name='newPassword' placeholder='Enter Name'/>	</td>
        					<tr>
        						<td> Confirm Password </td>
        						<td> <input type='password' class="form-control" autofocus  name='confirmPassword' placeholder='Enter Name'/>	</td>
        					</tr>        						
        					</tr>
        					<tr>
        					    <td>  </td>
        						<td> <button class="btn btn-success">Submit</button></td>
        					</tr>
        				</table>
        			</form>
        	</fieldset>
        </div>
         </div>
     </div>
    </div>
@endsection




