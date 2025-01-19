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
	<fieldset>
		<legend> <img style="border-radius:100%; width:50px;"src="/public/backdoor/uploads/logo/sonarbangla.png"/> </legend>
			 <form action="{{route('confirmStudent')}}" method="post" enctype="multipart/form-data">
                            @csrf();
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Student Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"  name='studentname' id="inputPassword">
                            </div>
                          </div>   
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Father Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name='Fathername' id="inputPassword">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mother Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name='mothername' id="inputPassword">
                            </div>
                          </div>
                    
                    
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name='phone' id="inputPassword">
                            </div>
                          </div>  
                            <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Session</label>
                            <div class="col-sm-10">
                                <select name= 'session' class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                      <option selected>Select </option>
                                      <option value="14-15">14-15</option>
                                      <option value="16-17">16-17</option>
                                      <option value="18-19">18-19</option>
                                      <option value="20-21">20-21</option>
                                      <option value="22-23">22-23</option>
                                      <option value="24-25">24-25</option> 
                                </select>
                            </div>
                        </div>
                         <div class="mb-3 row">
                             <label for="staticEmail" class="col-sm-2 col-form-label">Semester</label>
                             <div class="col-sm-10">
                                <select name= 'semester' class=" form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                      <option selected>Open this select menu</option>
                                      <option value="1st semester">first semester</option>
                                      <option value="2nd semester">Secand semester</option>
                                      <option value="3rd semester">Third semester</option>
                                      <option value="4rth semester">Four</option>
                                      <option value="5th semester">Five semester</option>
                                      <option value="6th semester">six semister</option>   
                                      <option value="7th semester">seven semester</option>
                                      <option value="8th semester">Eight semester</option>               
                                </select>
                            </div>
                         </div>    
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Roll</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name='roll' id="inputPassword">
                            </div>
                          </div> 
                          
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> Regi_NO </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name='regi' id="inputPassword">
                            </div>
                          </div>            
                           <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email"  class="form-control" name='emaill' value="email@example.com">
                            </div>
                         </div>
                         <div class="mb-3 row">
                            <label for="staticEmail"  class="col-sm-2 col-form-label">Date of Brith </label>
                            <div class="col-sm-10">
                                <div class="form-floating">
                                    <input type="date" name='brithdate' class="form-control" id="inputPassword">
                                    
                                </div>  
                            </div>
                        </div> 
                     
                           <div class="mb-3 row">
                             <label for="staticEmail" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <select name='gender' class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                  <option selected>Select</option>
                                  <option value="Male">Male</option>
                                  <option value="Femail">Femail</option>
                                </select>
                                </div>
                            </div>
                                 <div class="mb-3 row">
                                 <label for="staticEmail" class="col-sm-2 col-form-label">Blood Group</label>
                                <div class="col-sm-10"> 
                                <select name='blood' class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>select </option>
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
                             <div class="col-mb-5 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Religion </label>
                                <div class="col-sm-10">            
                                <select name='religion' class="form-control form-select form-select-sm" aria-label=".form-select-sm example">
                                      <option selected>Select</option>
                                      <option value="Isam">Isam</option>
                                      <option value="Christan">Christan</option>
                                      <option value="Boddosim">Boddosim</option>
                                      <option value="Hindosim">Hindosim</option>
                                      <option value="other">other</option>
                                </select>              
                            </div>
                         </div>
                         <div class="mb-3 mt-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label"> Addresas </label>
                            <div class="col-sm-10 col-md-5">
                                <div class="form-floating">
                                     <textarea class="form-control" name='present' placeholder="Present Address" id="floatingTextarea"></textarea>
                                </div>  
                            </div>
                            <div class="col-sm-10 col-md-5">
                                <div class="form-floating">
                                     <textarea class="form-control" name='parmanent' placeholder="Parmanent Address" id="floatingTextarea"></textarea>
                                </div>  
                            </div>        
                        </div>
                           <div class="mb-3 row">
                             <label for="staticEmail" class="col-sm-2 col-form-label">Profile Status</label>
                            <div class="col-sm-10">
                                <select name= 'profilestatus' class=" form-control form-cntrol form-select form-select-sm" aria-label=".form-select-sm example">
                                  <option selected>Select</option>
                                  <option value="Active">Active</option>
                                  <option value="Pending">Pending</option>
                                </select>
                            </div>
                         </div>  
                         <div class="mb-3">
                        </div>
                              <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                             <input class="form-control" type="file" name='avatar' onchange=loadFile(event) />
                            </div>
                          </div>
                          <div class="text-center width-150">
                              <td> 	<img  style="width:130px; border-radius:5px ;" id="privew" src='/public/backdoor/uploads/Image/demo.jpg' alt="image"/>					</td>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary text-center">Submit</button>
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




















