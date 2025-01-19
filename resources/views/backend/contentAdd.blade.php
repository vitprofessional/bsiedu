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
    			<form method='post' action="{{route('confirmContent')}}" enctype='multipart/form-data'>
        			    @csrf()
        				<table border='0' cellpadding='12' cellspacing='0'>
        					<tr>
        						<td> Menu </td>
        						<td> <input type='text' class="form-control"  autofocus  required name='menu' placeholder='Enter Username'/></td>
        					</tr>
        					<tr>
        						<td> Page name </td>
        						<td> <input type='text'  class="form-control"  autofocus  required name='page_name' placeholder='Enter email'/></td>
        					</tr>
        					<tr>
        						<td>Page title </td>
        						<td> <input type='text'  class="form-control" name='page_title' required placeholder='Enter phone'/></td>
        					</tr>
        					<tr>
        						<td>Page headline </td>
        						<td> <input type='text'  class="form-control" autofocus required name='page_headline' placeholder='Enter space'/></td>
        					</tr>
        					<tr>
        						<td>Text content </td>
        						<td> <input type='text'  class="form-control" name='text_content'  required placeholder='Enter position'/></td>
        					</tr>
        					<tr>
        						<td> Status </td>
        						<td> <select   name="status" class="form-control">
        						    <option >Select</option>
        						    <option value="Active">Active</option>
        						    <option value="Active">Pending</option>
        					</tr>    
        					<tr>
        						<td>Image </td>
        						<td> <input type='file'    class="form-control" name='avatar' onchange="loadFile(event)" required placeholder='Enter phone'/></td>
        					</tr> 
        					<tr>
        					    	<td>  </td>
        					    <td> 	<img  style="width:130px; border-style:1px solide #fff !importent;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/>					</td>
        					</tr>    					
            				
        					<tr>
        						<td> 						</td>
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





















