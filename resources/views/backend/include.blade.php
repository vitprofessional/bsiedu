<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="keywords" content="HTML, CSS, Bootstrup, JavaScript, jquery, php, mysql, laravel ">
  <meta name="author" content=" Virtual It Professional, Project Manegar Engineer Abu Yousof, Developer By Abdur Rahman Bsc in Cse ">
  <title>SBC Admin - @yield('adminviewtitle')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/css/style.css">
  <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{ asset('/otika/assets/') }}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!--DataTable-->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <style>
    .sidebar-mini .main-sidebar .sidebar-menu>li {
    padding: 0px;
}
        
    </style>
</head>
<body>
  <!--<div class="loader"></div>-->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          
          @php
            $adminDetails = \App\Models\AdminPanel::find(Session::get('bsiadmin'));
          @endphp
          <li class="dropdown">  <a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" style="border-radius:100%;"src="{{ asset('/').$adminDetails->adminimage }}"> <span class="d-sm-none d-lg-inline-block"></span>  <span style="color:#000000"></span></a>
                
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">{{$adminDetails->adminname}}</div>
            	<a href="{{route('userProfile')}}" class="dropdown-item has-icon"> <i class="far fa-user"></i> Profile </a>
                <!--<a href="" class="dropdown-item has-icon"> <i class="far fa-edit"></i> Password Change </a>            	-->
               <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{route('adminlogout')}}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2 pb-5">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand text-center">
            <a href="{{route('adminHome')}}"> <img alt="image" src="{{ asset('/') }}public/frontend/uploads/logo/sonarbangla.png" class="header-logo" /> <span
                class="logo-name">SBCC</span>
            </a>
          </div>
          <ul class="sidebar-menu padding-0">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="{{route('adminHome')}}" class="nav-link"><i data-feather="home"></i><span>Dashboard</span></a>
            </li>
             <li><a class="nav-link" href="https://www.sbccumilla.edu.bd" target="_blank"><i data-feather="globe"></i><span>Website</span></a></li>
             
            <!--<li><a class="nav-link" href="newNoticetable"><i data-feather="file"></i><span>Notice & Event</span></a></li>-->
            <!--<li><a class="nav-link" href="userprofile"><i data-feather="file"></i><span>User Profile</span></a></li>-->
            <!--<li><a class="nav-link" href="TeacherandstuffList"><i data-feather="file"></i><span>Teacher & Staff</span></a></li>-->
            <!--<li><a class="nav-link" href="Studentmanagement"><i data-feather="file"></i><span>Student Management</span></a></li>-->
            
            <li class="menu-header">Notice & Event</li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="alert-triangle"></i><span>Notice & Event</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('adminNotice')}}">Notice</a></li>
              </ul>
            </li> 
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>User Profile</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('userProfile')}}">User</a></li>
              </ul>
            </li>             
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Teacher & Staff</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('adminstuff')}}">Teacher </a></li>
              </ul>
            </li>               
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Student Management</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('studentDetails')}}">Student</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="book-open"></i><span>Academic</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('sylabuslist')}}">Syllabus</a></li>
                <li><a class="nav-link" href="{{route('probidhan')}}">Probidhan</a></li>
                <li><a class="nav-link" href="{{route('semesterlist')}}">Semister Plan</a></li>
                <li><a class="nav-link" href="{{route('classrotine')}}">Class Routine</a></li>
                <li><a class="nav-link" href="{{route('examRotine')}}">Exam Routine</a></li>
              </ul>
            </li>
            <!--<li><a class="nav-link" href="newresult"><i data-feather="file"></i><span>Result</span></a></li>-->
            <!--<li><a class="nav-link" href="contents"><i data-feather="file"></i><span>Content Management</span></a></li>-->
            <!--<li><a class="nav-link" href="contact"><i data-feather="file"></i><span>Contact Message</span></a></li>-->
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="award"></i><span>Result</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('resultlist')}}">Result</a></li>
              </ul>
            </li>              
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Content Manegment</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('contentlist')}}">Content</a></li>
              </ul>
            </li>            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="message-square"></i><span>Message</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('message')}}">Client Message</a></li>
              </ul>
            </li>    
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="film"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('photList')}}">Photo Galary</a></li>
                <li><a class="nav-link" href="{{route('videolist')}}">Video Galary</a></li>
                <li><a class="nav-link" href="{{route('sliderlist')}}">Slider</a></li>
              </ul>
            </li>

            
           
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
		@yield('adminviewcontent')
		<!--sidebar settings-->
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('/otika/assets/') }}/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('/otika/assets/') }}/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('/otika/assets/') }}/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="{{ asset('/otika/assets/') }}/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('/otika/assets/') }}/js/custom.js"></script>
  
  

  <!-- JS Libraies -->
  <script src="{{asset('/otika/assets/')}}/bundles/datatables/datatables.min.js"></script>
  <script src="{{asset('/otika/assets/')}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('/otika/assets/')}}/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('/otika/assets/')}}/js/page/datatables.js"></script>
   
  
<!--  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
<!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->

  
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>