
<html>
	<head>
	    <title> Form </title>
	    <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/css/app.min.css">
	    <style>
	
		body{background:#ccc;}
			
			.form{
			width:450;
			height:auto;
			margin: auto;
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
        	
        /*input[name='image']	{*/
        /*			width:150px;*/
        /*			height:35px;*/
        /*			border-radius:10px;*/
        /*			box-shadow:2px 2px 2px #000;*/
        /*}*/
		</style>
	</head>
    <body>
        @php
            $admin = \App\Models\AdminPanel::all();
        @endphp
        <div class='form col-md-5'>
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
            	<fieldset  class="scheduler-border">
            		<legend> <img style="border-radius:100%; width:50px;"src="/public/backdoor/uploads/logo/sonarbangla.png"/></legend>
                    @if(count($admin)>0):
            			<form class="text-center" method='post' action="{{route('adminLogin')}}" enctype='multipart/form-data'>
            			    @csrf
            				<table border='0' cellpadding='12' cellspacing='0'>
            					<tr>
            						<td> Email </td>
            						<td> <input type='email' class="form-control" autofocus  required name='adminemail' placeholder='Enter user email'/></td>
            					</tr>
            					<tr>
            						<td>Password </td>
            						<td> <input type='password' class="form-control" name='password' placeholder='Enter Password'/></td>
            					</tr>	
            					<tr>
            					    <td></td>
                                    <td><button  class="btn btn-success">Login</button> </td>
            					</tr>				
            				</table>
            			</form>
                    @else:
        			    <form method='post' action="{{route('adminRegister')}}" enctype='multipart/form-data'>
        			        @csrf()
        				    <table border='0' cellpadding='12' cellspacing='0'>
            					<tr>
            						<td> Usename </td>
            						<td> <input type='text' class="form-control" autofocus  required name='username' placeholder='Enter Username'/></td>
            					</tr>
        					<tr>
        						<td>Password </td>
        						<td> <input type='password'required  class="form-control" name='password' /></td>
        					</tr>	
        					<tr>
        						<td> Email </td>
        						<td> <input type='email'  class="form-control" autofocus  required name='email' placeholder='Enter email'/></td>
        					</tr>
        					<tr>
        						<td>Phone </td>
        						<td> <input type='text'  class="form-control" name='mobile' required placeholder='Enter phone'/></td>
        					</tr>
        					<tr>
        						<td> Admin Space </td>
        						<td> <input type='text'  class="form-control" autofocus  required name='space' placeholder='Enter space'/></td>
        					</tr>
        					<tr>
        						<td>Degination </td>
        						<td> <input type='text'  class="form-control" name='position' required placeholder='Enter position'/></td>
        					</tr>
        					<tr>
        						<td> Status </td>
        						<td> 
        						    <select name="status" class="form-control">
            						    <option >Select</option>
            						    <option value="Active">Active</option>
            						    <option value="Active">Pending</option>
            						</select>
            					</td>
        					</tr> 
        					<tr>
        						<td>Image </td>
        						<td> <input type='file'  class="form-control" name='adminimage' onchange=loadFile(event) required placeholder='Enter phone'/></td>
        					</tr>
        					<tr>
        					    <td>  </td>
        					    <td> <img  style="width:130px; border-radius:5px;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/></td>
        					</tr>        					
        					<tr>
        						<td> 						</td>
        						<td> <button class="btn btn-success">Sign up</button></td>
        					</tr>				
        				</table>
        			</form>
                @endif
            </fieldset>
        </div>
        <script>
            var loadFile= function(event){
            var privew= document.getElementByid('privew');
            privew.src=privew.src= URL.createObjectURL(event.target.files['0']);
            }
        </script>
        </script>
    </body>
</html>


                       