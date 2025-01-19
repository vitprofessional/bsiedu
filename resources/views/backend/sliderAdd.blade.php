@extends('backend.include')
@section('adminviewtitle') 
    slider Add
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
                	padding:30px;
                }
		</style>
    </head>
    <body>
<div class='form col-md-6 col-lg-6'>
	<fieldset >
		<legend> <img style="border-radius:100%; width:50px;"src="/public/backdoor/uploads/logo/sonarbangla.png"/> </legend>
			<form method='post' action="{{route('sliderConfirm')}}" enctype='multipart/form-data'>
			    @csrf
				<table border='0' cellpadding='12' cellspacing='0'>
					<tr>
					    <td> Title </td>
						<td> <input type='text' class="form-control"  autofocus  required name='title' placeholder='Enter Name'/></td>
					</tr>
					<tr>
					    <td> Details </td>
						<td> <input type='text' class="form-control" v autofocus  required name='details' placeholder='Enter Name'/></td>
					</tr>					
					<tr>
						<td> video </td>
						<td> <input type='file'class="form-control"   autofocus  required name='location' onchange=loadFile(event) placeholder='Enter Name'/></td>
					</tr>
    					<tr>
    					    	<td>  </td>
    					    <td> 	<img  style="width:130px; border-style:1px solide #fff !importent;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/>					</td>
    					</tr>					
					<tr>
							<td>  </td>
						<td> <button class="btn btn-success">Submit</button></td>
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




















