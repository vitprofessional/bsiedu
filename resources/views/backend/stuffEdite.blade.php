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
                	padding-top:0px;
                }
		</style>
    </head>
    <body>
<div class='form col-md-8 col-lg-8'>
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
		 <form action="{{route('updateStuff')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{$Datakey->id}}"/>
            @csrf();
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Stuff Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$Datakey->name}}"  name='stuffname' id="inputPassword">
            </div>
          </div>   
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Father Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$Datakey->father_name}}" name='Fathername' id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mother Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$Datakey->mother_name}}" name='mothername' id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Degintion</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$Datakey->	designation}}" name='degination' id="inputPassword">
            </div>
          </div> 
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label"> Education Qualification </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$Datakey->name}}" name='edu_qul' id="inputPassword">
            </div>
          </div>       
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$Datakey->phone_number	}}" name='phone' id="inputPassword">
            </div>
          </div>      
           <div class="mb-3 row">
             <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email"  class="form-control" value="{{$Datakey->email}}" name='emaill' value="email@example.com">
            </div>
         </div>
         <div class="mb-3 row">
            <label for="staticEmail"  class="col-sm-2 col-form-label">Date of Brith </label>
            <div class="col-sm-10">
                <div class="form-floating">
                    <input type="date" name='brithdate' value="{{$Datakey->birth_date}}" class="form-control" id="inputPassword">
                </div>  
            </div>
        </div> 
            <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Joint date </label>
            <div class="col-sm-10">
                <div class="form-floating">
                    <input type="date" class="form-control" value="{{$Datakey->join_date}}" name='jointdate' id="inputPassword">
                </div>  
            </div>
        </div> 
           <div class="mb-3 row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <select name='gender' class=" form-control form-select form-select-sm" aria-label=".form-select-sm example">
                  <option value="{{$Datakey->gender}}">{{$Datakey->gender}}</option>
                  <option value="Male">Male</option>
                  <option value="Femail">Femail</option>
                </select>
                </div>
                </div>
           <div class="mb-3 row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Blood Group</label>
            <div class="col-sm-10">                
                <select name='blood' class=" form-control form-select form-select-sm" aria-label=".form-select-sm example">
                  <option value="{{$Datakey->bl_group}}" >{{$Datakey->bl_group}} </option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option> 
                  <option value="AB+">O+</option>
                  <option value="AB-">O-</option>               
                </select> 
            </div>
            </div>
            <div class="mb-3 row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Religion</label>
            <div class="col-sm-10"> 
                <select name='religion'class=" form-control form-select form-select-sm" aria-label=".form-select-sm example">
                  <option value="{{$Datakey->religion}}" >{{$Datakey->religion}}</option>
                  <option value="Isam">Isam</option>
                  <option value="Christan">Christan</option>
                  <option value="Boddosim">Boddosim</option>
                  <option value="Hindosim">Hindosim</option>
                  <option value="other">other</option>
                </select>              
            </div>
         </div>
         <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label"> </label>
            <div class="col-sm-10 col-md-5">
                <div class="form-floating">
                     <textarea value="{{$Datakey->pre_address}}" class="form-control" name='present' placeholder="Present Address" id="floatingTextarea"></textarea>
                </div>  
            </div>
            <div class="col-sm-10 col-md-5">
                <div class="form-floating">
                     <textarea value="{{$Datakey->per_address}}" class="form-control" name='parmanent' placeholder="Parmanent Address" id="floatingTextarea"></textarea>
                </div>  
            </div>        
        </div>
           <div class="mb-3 row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Merital Status</label>
            <div class="col-sm-10">
                <select name= 'maritalstatus' class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                      <option value="{{$Datakey->merital_status}}">{{$Datakey->merital_status}}</option>
                      <option value="Single">Single</option>
                      <option value="Marrited">Marrited</option>
                </select>
            </div>
        </div>
           <div class="mb-3 row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Profile Status</label>
            <div class="col-sm-10">        
                <select name= 'profilestatus' class=" form-control form-select form-select-sm" aria-label=".form-select-sm example">
                      <option value="{{$Datakey->status}}">{{$Datakey->status}}</option>
                      <option value="1">Active</option>
                      <option value="2">Pending</option>
                </select>
            </div>
            </div>
           <div class="mb-3 row">
             <label for="staticEmail" class="col-sm-2 col-form-label">Rank</label>
            <div class="col-sm-10">             
                <select name= 'rankstatus' class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                      <option value="{{$Datakey->rank}}">{{$Datakey->rank}}</option>
                      <option value="Assisten">Assisten</option>
                      <option value="sub Assisten">sub Assisten</option>
                      <option value="other">other</option>
                </select> 
            </div>
         </div>    
            <div class="mb-3">
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file"  onchange=loadFile(event) name='avatar' id="formFile">
              </div>
          </div>
          <div class="text-center">
              <td></td>
              <td> 	<img style="width:150px; height:100px; border-radus:5px;" id="privew" src="{{ asset('/').$Datakey->avatar }}" alt="image"/></td>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary text-center">Update</button>
                </div>
          </div> 
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



















