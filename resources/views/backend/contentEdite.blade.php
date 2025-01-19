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
    			<form method='post' action="{{route('updateContent')}}" enctype='multipart/form-data'>
    			     <input type="hidden" name="id" value="{{ $Datakey->id }}"  />
        			    @csrf()
        				<table border='0' cellpadding='12' cellspacing='0'>
        					<tr>
        						<td> Menu </td>
        						<td> <input type='text' class="form-control"  value="{{ $Datakey->menu }}" autofocus  required name='menu' placeholder='Enter Username'/></td>
        					</tr>
        					<tr>
        						<td> Page name </td>
        						<td> <input type='text'  class="form-control"  value="{{ $Datakey->page_name }}"  autofocus  required name='page_name' placeholder='Enter email'/></td>
        					</tr>
        					<tr>
        						<td>Page title </td>
        						<td> <input type='text'  class="form-control" value="{{ $Datakey->page_name }}" name='page_title' required placeholder='Enter phone'/></td>
        					</tr>
        					<tr>
        						<td>Page headline </td>
        						<td> <input type='text'  class="form-control" value="{{ $Datakey->page_headline }}" autofocus required name='page_headline' placeholder='Enter space'/></td>
        					</tr>
        					<tr>
        						<td>Text content </td>
        						<td> <input type='text'  class="form-control"  value="{{ $Datakey->text_content }}" name='text_content'  required placeholder='Enter position'/></td>
        					</tr>
        					<tr>
        						<td> Status </td>
        						<td> <select   name="status" class="form-control">
        						    <option  value="{{ $Datakey->status }}" >{{ $Datakey->status }}</option>
        						    <option value="Active">Active</option>
        						    <option value="Active">Pending</option>
        					</tr>    
        					<tr>
        						<td>Image </td>
        						<td> <input type='file'   value="{{ $Datakey->avatar }}"  class="form-control" name='avatar' onchange="loadFile(event)" required placeholder='Enter phone'/></td>
        					</tr> 
        					<tr>
        					    <td>  </td>
        					    <!--<td> <img  style="width:130px; border-style:1px solide #fff !importent;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/></td>-->
        					    <td> <img id="privew" src="{{ asset('/').$Datakey->avatar }}" style="width:200px; height:100px; border-radius:5px;" frameborder="0"/> </td> 
        					</tr>    					
            				
        					<tr>
        						<td> </td>
        						<td> <button class="btn btn-success">Update</button></td>
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





















