<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Bangladesh Survey Institute</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/') }}public/assets/images/icon-bsi.png" type="image/x-icon" />

        <!--datatable css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />

        <!-- jsvectormap css -->
        <link href="{{asset('public/assets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

        <!--Swiper slider css-->
        <link href="{{asset('public/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />

        <!--datatable css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <!--datatable responsive css-->
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />

        <!-- Layout config Js -->
        <script src="{{asset('public/assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('public/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box horizontal-logo">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22" />
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17" />
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22" />
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="17" />
                                    </span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="dropdown d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-search fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                                    <i class="bx bx-fullscreen fs-22"></i>
                                </button>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                                    <i class="bx bx-moon fs-22"></i>
                                </button>
                            </div>
                            @php $AdminDetails= \App\Models\AdminPanel::find(Session::get('bsiadmin')); @endphp

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img
                                            class="rounded-circle header-profile-user"
                                            src="{{('/public/backdoor/uploads/user_images/').$AdminDetails->adminimage}}"
                                            style="width: 50px; height: 50px; border-radius: 100%;"
                                            alt="Header Avatar"
                                        />
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"></span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Welcome Anna!</h6>
                                    <a class="dropdown-item" href="{{route('userview')}}"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="{{route('contactview')}}"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('passwordChangepage')}}"><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Password Settings</span></a>
                                    <a class="dropdown-item" href="{{route('adminlogout')}}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                                    <form action="{{route('adminlogout')}}" method="POST">
                                        {{csrf_field()}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->

                    <span class="logo-sm" style="color: #ffffff; font-size: 18px;">
                        BSI
                    </span>
                    <span class="logo-lg">
                        BSI
                    </span>
                    <!-- Light Logo-->

                    <span class="logo-sm">
                        BSI
                    </span>
                    <span class="logo-lg">
                        BSI
                    </span>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">
                        <div id="two-column-menu"></div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a href="{{route('backhome')}}" class="nav-link" data-key="t-analytics"><i class="mdi mdi-home"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://bsiedu.gov.bd" target="_blank" class="nav-link" data-key="t-analytics"><i class="mdi mdi-web"></i> Website</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('adminPlacementCell') }}" class="nav-link" data-key="t-analytics"><i class="mdi mdi-grid"></i> Placement Cell</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="mdi mdi-view-grid-plus-outline"></i> <span data-key="t-apps">Notice Board</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('backnotice')}}" class="nav-link" data-key="t-calendar"> Notice </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('newnotice')}}" class="nav-link" data-key="t-chat"> Add New </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="mdi mdi-sticker-text-outline"></i> <span data-key="t-pages">Teachers & Employees</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('teacherPanel')}}" class="nav-link" data-key="t-starter"> Teachers Panel </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('employeePanel')}}" class="nav-link" data-key="t-starter"> Employee List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Exprincipal')}}" class="nav-link" data-key="t-starter"> Ex-princpal</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLandings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="bx bx-book-open"></i> <span data-key="t-landing">Accademic</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLandings">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('backsyllabus')}}" class="nav-link" data-key="t-one-page">Sylabus</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('backclassroutine')}}" class="nav-link" data-key="t-one-page">Class Rotine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('backexamroutine')}}" class="nav-link" data-key="t-one-page">Exam Rotine</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('backprobidhan')}}" class="nav-link" data-key="t-one-page">Probidhan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('backsemisterplan')}}" class="nav-link" data-key="t-one-page">semester plan</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('resultList')}}" class="nav-link" data-key="t-analytics"><i class="ri-rocket-line"></i> Result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLandingGallary" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="bx bx-film"></i> <span data-key="t-landing">Gallary</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLandingGallary">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('photogallery')}}" class="nav-link" data-key="t-one-page">Photo Gallary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('videogallery')}}" class="nav-link" data-key="t-one-page">Video Gallary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('youtubeVideo')}}" class="nav-link" data-key="t-one-page">YoutubVideo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('sliderlist')}}" class="nav-link" data-key="t-one-page">Slider Gallary</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#infoBox" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="infoBox">
                                    <i class="bx bx-book-open"></i> <span data-key="t-landing">Information Box</span>
                                </a>
                                <div class="collapse menu-dropdown" id="infoBox">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('newInfoBox')}}" class="nav-link" data-key="t-one-page">Add New</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('infoBox')}}" class="nav-link" data-key="t-one-page">Manage Info Boxes</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                    <i class="mdi mdi-view-carousel-outline"></i> <span data-key="t-layouts">User</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLayouts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('userview')}}" class="nav-link" data-key="t-horizontal">Admin Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('institutedetails')}}" class="nav-link" data-key="t-horizontal">About institute</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('passwordChangepage')}}" class="nav-link" data-key="t-horizontal">password reset</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- end Dashboard Menu -->

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="bx bx-male-female"></i> <span data-key="t-landing">Student</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLanding">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('backstudent')}}" class="nav-link" data-key="t-one-page">Students</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('newstudent')}}" class="nav-link" data-key="t-nft-landing"> Add New<span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#trainingSection" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="mdi mdi-account-group"></i> <span data-key="t-apps">Training</span>
                                </a>
                                <div class="collapse menu-dropdown" id="trainingSection">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('inHouseTeacher')}}" class="nav-link" data-key="t-calendar"> Inhouse Training(Teacher) </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('inHouseStaff')}}" class="nav-link" data-key="t-calendar"> Inhouse Training(Staffs) </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('trainingListSubjectwise')}}" class="nav-link" data-key="t-chat">Training(Subjectwise)</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="mdi mdi-link"></i> <span data-key="t-apps">Important Link</span>
                                </a>
                                <div class="collapse menu-dropdown" id="link">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('newLink')}}" class="nav-link" data-key="t-calendar"> New Link </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('importantLink')}}" class="nav-link" data-key="t-calendar"> Manage </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#linkageIndustry" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="mdi mdi-office-building"></i> <span data-key="t-apps">Industry Linkage</span>
                                </a>
                                <div class="collapse menu-dropdown" id="linkageIndustry">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('linkageIndustry')}}" class="nav-link" data-key="t-calendar"> Linkage Industry </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('industrialAttachment')}}" class="nav-link" data-key="t-calendar"> Industrial Attachment </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('indVisit')}}" class="nav-link" data-key="t-chat"> Visited Industry</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarNews" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarNews">
                                    <i class="mdi mdi-bullhorn-variant-outline"></i> <span data-key="t-apps">News & Event</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarNews">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('yearplaning')}}" class="nav-link" data-key="t-calendar"> Yearly planing </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Admission')}}" class="nav-link" data-key="t-chat"> Addmission info </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('YearBay')}}" class="nav-link" data-key="t-calendar"> Yearly Bay planing </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('jobplacement')}}" class="nav-link" data-key="t-calendar"> Job placement </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('researchmanagement')}}" class="nav-link" data-key="t-chat"> Reserce management </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('studentArcive')}}" class="nav-link" data-key="t-chat"> Student Arcive </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLandingContent" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="bx bx-receipt"></i> <span data-key="t-landing">Content Management</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLandingContent">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('pagelist')}}" class="nav-link" data-key="t-one-page">content</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLandingMessage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="bx bx-chat"></i> <span data-key="t-landing">Message</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLandingMessage">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{route('contactview')}}" class="nav-link" data-key="t-one-page">Client Message</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->

            @yield('bsiadmincontent')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            © BSI.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

        <!-- END layout-wrapper -->

        <div class="customizer-setting d-none d-md-block">
            <div class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                <i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
            </div>
        </div>


  <!-- JAVASCRIPT -->
        <script src="{{asset('public/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('public/assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
        <script src="{{asset('public/assets/js/plugins.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('public/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Vector map-->
        <script src="{{asset('public/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
        <script src="{{asset('public/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!--Swiper slider js-->
        <script src="{{asset('public/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('public/assets/js/pages/dashboard-ecommerce.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('public/assets/js/app.js')}}"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!--datatable js-->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

        <script src="{{asset('public/assets/js/pages/datatables.init.js')}}"></script>
        <!-- App js -->
    </body>
</html>
