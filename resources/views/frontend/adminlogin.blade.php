<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> admin page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body{
            background:#ccc;
        }
         
         .cardsadhow{
             box-shadow: 3px 3px 11px #000  ;
            
         }
        
    </style>
  </head>
  <body>
      <div class="container" >
          <div class="row" >
              <div class="col-md-6 m-auto mt-5">
                  <div class="card cardsadhow">
        <h5 class="card-header">Admin Login </h5>
     <div class="card-body">
        @if(Session::get('success'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
            <span>{!! Session::get('success') !!}</span>
          </div>
        @endif
        @if(Session::get('error'))
          <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
            </button>
            <span>{!! Session::get('error') !!}</span>
          </div>
        @endif
        @php
            $admin = \App\Models\AdminPanel::all();
        @endphp
        @if(count($admin)>0)
        <form class="form" style="#F0F0F0" method="POST" action="{{ route('adminLogin') }}">
            {{ csrf_field() }}
            <div class="form-group ">
                <label class="mt-2" for="AdminEmail">Email</label>
                <input type="email" name="AdminEmail" placeholder="Enter admin email please" class="form-control" />
            </div>
            <div class="form-group">
                <label class="mt-2" for="AdminPassword">Password</label>
                <input type="password" class="form-control" name="AdminPassword" placeholder="Enter login password please">
            </div>
            <div class="form-group mt-2">
                <input type="submit" value="Login" class="btn btn-primary" />
            </div>
        </form>
        @else
        <form class="form" method="POST" action="{{ route('adminSignup') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="AdminName">Name</label>
                <input type="text" name="AdminName" placeholder="Enter admin name please" class="form-control" />
            </div>
            <div class="form-group">
                <label for="AdminEmail">Email</label>
                <input type="email" name="AdminEmail" placeholder="Enter admin email please" class="form-control" />
            </div>
            <div class="form-group">
                <label for="AdminMobile">Mobile</label>
                <input type="mobile" name="AdminMobile" placeholder="Enter admin mobile number please" class="form-control" />
            </div>
            <div class="form-group">
                <label for="AdminPassword">Password</label>
                <input type="password" name="AdminPassword" placeholder="Enter login password please" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" value="First Time Signup" class="btn btn-primary mt-2" />
            </div>
        </form>
        @endif
    </div>
</div>
 

              </div>
          </div>
      </div>
      


    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

  </body>
</html>




