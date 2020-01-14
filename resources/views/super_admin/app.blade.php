<!DOCTYPE html>
<html lang="en">



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <title>Smart Nurse</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/logo/favicon.png">


    <!-- page css -->
<link href="{{asset('assets')}}/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Core css -->
    <link href="{{asset('assets')}}/css/app.min.css" rel="stylesheet">

</head>

<body style="overflow-x:auto">
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('image') }}/logo.jpg" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold11.png" alt="Logo">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="{{url('/')}}">
                        <img src="assets/images/logo/logo-white.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold-white1.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="{{ url('super_admin') }}">
                                Super Admin
                            </a>
                        </li>

                         <li class="desktop-toggle">
                            <a href="{{url('admin')}}">
                                Admin
                            </a>
                        </li>


                        <li class="desktop-toggle">
                            <a href="{{url('intaker')}}">
                                Intaker
                            </a>
                        </li>


                        <li class="desktop-toggle">
                            <a href="{{url('scheduler')}}">
                                Scheduler
                            </a>
                        </li>

                    </ul>
                    <ul class="nav-right">

                        <li class="dropdown dropdown-animated scale-left">
                            <a href="{{ url('log_out') }}">
                                Log Out
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">

                    <ul class="side-nav-menu scrollable">
                        <!--<li class="nav-item dropdown open">-->
                        <!--    <a  href="{{url('/')}}">-->
                        <!--        <span class="icon-holder">-->
                        <!--            <i class="anticon anticon-dashboard"></i>-->
                        <!--        </span>-->
                        <!--        <span class="title">Result</span>-->

                        <!--    </a>-->

                        <!--</li>-->

                        <li class="nav-item dropdown open">
                            <a  href="{{url('view_user')}}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-hdd"></i>
                                </span>
                                <span class="title">View User</span>

                            </a>

                        </li>

                        <li class="nav-item dropdown open">
                            <a  href="{{ url('create_user') }}">
                                <span class="icon-holder">
                                    <i class="anticon anticon-form"></i>
                                </span>
                                <span class="title">Create User</span>

                            </a>

                        </li>





                    </ul>
                </div>
            </div>
           <div class="page-container">
             <div class="main-content">

                    @yield('content')
             </div>
            </div>


        </div>
    </div>



    {{-- <script src="{{asset('assets')}}/js/vendors.min.js"></script>


    <script src="{{asset('assets')}}/vendors/chartjs/Chart.min.js"></script>
    <script src="{{asset('assets')}}/js/pages/dashboard-default.js"></script>




    <script src="{{asset('assets')}}/js/app.min.js"></script>
     <script src="{{asset('assets')}}/js/ajax.min.js"></script> --}}


</body>



</html>
