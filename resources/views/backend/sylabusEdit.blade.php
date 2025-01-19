@extends('backend.include')
@section('adminviewtitle') 
    Notice Add
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
			<form method='post' action="{{route('updateSylbus')}}" enctype='multipart/form-data'>
			    <input type="hidden" name="id" value="{{$Datakey->id}}"/>
			    @csrf
				<table border='0' cellpadding='12' cellspacing='0'>
					<tr>
						<td> Department </td>
						<td>
                            <select name="department" class="form-control">
						        <option value="{{$Datakey-> department}}">{{$Datakey-> department }}</option>
						        <option value="Science">Science</option>
						        <option value="Commerce">Commerce</option>
						        <option value="Humnity">Humnity</option>
						        <option value="Bangla">Bangla</option>
						        <option value="English">English</option>
						    </select>						    
						</td>	
					</tr>
					<tr>
					    <td> Probdhan </td>
						<td> <input type='text' class="form-control" value="{{$Datakey->probidhan}}" autofocus  required name='probidhan' placeholder='Enter Name'/></td>
					</tr>
						<tr>
					    <td>Semester</td>
					    <td>
					        	<select name="semister" class="form-control">
						        <option value="{{$Datakey->semister}}">{{$Datakey->semister}}</option>
						        <option value="First semester">First semester</option>
						        <option value="Secand secand}}">secand semester</option>
						        <option value="Third semester">Third semester</option>
						        <option value="fourth semester">for semester</option>
						        <option value="five semester">five semester</option>
						        <option value="six semester">six semester</option>
						        <option value="seven semester">seven  semester</option>
						        <option value="Eight semester">Eight semester</option>
						    </select>
					   </td>
					</tr>
					<tr>
						<td> Status </td>
						<td> 
						    <select class="form-control" name="status">
                               <option value="{{$Datakey->semister}}" >{{$Datakey->status}}</option>						       
						       <option value="Active">Active</option>
						       <option value="Pending">Pending</option>
						   </select>
						</td>
					</tr>
					<tr>
						<td> image </td>
						<td> <input type='file'class="form-control" value="{{$Datakey->avatar}}"  autofocus  required name='avatar' onchange=loadFile(event) placeholder='Enter Name'/></td>
					</tr>
					<tr>
					    <td>  </td>
					    <!--<td> <img  style="width:130px; border-style:1px solide #fff !importent;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/></td>-->
					    <td> <iframe src="{{ asset('/').$Datakey->avatar }}" style="width:200px; height:100px;" frameborder="0"> </iframe></td> 
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
                var privew= document.getElementByid('privew');
                privew.src=privew.src= URL.createObjectURL(event.target.files['0']);
            }
        </script>
    </body>
</html>            

    
@endsection





















