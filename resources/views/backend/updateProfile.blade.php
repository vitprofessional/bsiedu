@extends('backend.include')
@section('adminviewtitle') 
    upadateUser
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
	<fieldset>
		<legend> <img style="border-radius:100%; width:50px;"src="/public/backdoor/uploads/logo/sonarbangla.png"/> </legend>
			<form method='post' action="{{route('updateProfile')}}" enctype='multipart/form-data'>
    			    <input type="hidden" name="id" value="{{ $Datakey->id }}"  />
    			    @csrf()
    				<table border='0' cellpadding='12' cellspacing='0'>
    					<tr>
    						<td> Usename </td>
    						<td> <input type='text' class="form-control" value="{{ $Datakey->adminname }}" autofocus  required name='adminname' placeholder='Enter Username'/></td>
    					</tr>
    					<tr>
    						<td> Email </td>
    						<td> <input type='email'  class="form-control" value="{{ $Datakey->adminemail }}" autofocus  required name='email' placeholder='Enter email'/></td>
    					</tr>
    					<tr>
    						<td>Phone </td>
    						<td> <input type='text'  class="form-control" value="{{ $Datakey->adminmobile }} "name='mobile' required placeholder='Enter phone'/></td>
    					</tr>
    					<tr>
    						<td> Admin Space </td>
    						<td> <input type='text'  class="form-control" autofocus value="{{ $Datakey->adminspeech }}"  required name='space' placeholder='Enter space'/></td>
    					</tr>
    					<tr>
    						<td>Degination </td>
    						<td> <input type='text'  class="form-control" name='position' value="{{ $Datakey->position }}"  required placeholder='Enter position'/></td>
    					</tr>
    					<tr>
    						<td> Status </td>
    						<td> 
    						    <select name="status" class="form-control">
        						    <option value="{{ $Datakey->status }}" >{{ $Datakey->status }}</option>
        						    <option value="Active">Active</option>
        						    <option value="Active">Pending</option>
    						    </select>
    						</td>
    					</tr>    				
    					<tr>
    						<td>Image </td>
    						<td> <input type='file' value="{{ $Datakey->adminimage }}"   class="form-control" name='adminimage' onchange="loadFile(event)"  placeholder='Enter phone'/></td>
    					</tr> 
    					<tr>
    					    <td>  </td>
    					    <td> <img  style="width:130px; border-radius:5px;" id="privew" src=' {{asset('/').$Datakey->adminimage}} ' alt="image"/></td>
    					</tr>    					
        				
    					<tr>
    						<td> </td>
    						<td> <button class="btn btn-success">Sign up</button></td>
    					</tr>				
    				</table>
    			</form>
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





















