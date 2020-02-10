
      <?php
      $user_id = Session::get('user_id');
      $user = \App\User::where('id','=',$user_id)->first();
      $image = $user->user_image;
      $name = $user->name;


      ?>

<!DOCTYPE html>
<html lang="en">



<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>View User</title>

  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" />
  <link rel="stylesheet" href="{{asset('assets')}}/css/fullcalendar.css?{{time()}}" />
  @include('all_css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.css">
    <link href="{{asset('assets')}}/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">



  <style>
        .fc-time-grid-event .fc-time {
           display: none;
        }




  </style>


</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="{{asset('assets')}}/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="{{asset('assets')}}/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <!--<li class="nav-item dropdown d-none d-lg-flex">
            <div class="nav-link">
              <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item font-weight-medium" href="#">
                  French
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Espanol
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Latin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Arabic
                </a>
              </div>
            </div>
          </li>-->

          <!--notification bar-->
          <!--<li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <span class="count">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="fas fa-exclamation-circle mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-wrench mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="far fa-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>-->

          <!--message bar-->
          <!--<li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-envelope mx-0"></i>
              <span class="count">25</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('assets')}}/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('assets')}}/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="{{asset('assets')}}/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>-->
          <li class="nav-item nav-profile dropdown">
            <h5><b>Hi, {{ $name }} &nbsp</b></h5>
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">

            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li>
        </ul>


        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">

      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>

      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="{{asset('assets')}}/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{asset('assets')}}/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{asset('assets')}}/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{asset('assets')}}/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{asset('assets')}}/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{asset('assets')}}/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>

        </div>
      </div>



      <nav class="sidebar sidebar-offcanvas" id="sidebar" >

        <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="profile-image">
                  <img style="" src="{{asset('image')}}/user_image/{{$image}}" alt="image"/>
                </div>
              <div class="nav-link">
                <div class="profile-name">
                  <p class="name">
                 {{ $name }}
                  </p>
                  <p class="designation">
                   Scheduler
                  </p>
                </div>
              </div>
              <hr>
            </li>
            <li class="nav-item">
              <p class="nav-link" class="menu-title" style="font-size: 18px; font-style: ''"><b>Pending Patient : {{$pending_patient}}</b></p>
              <p class="nav-link" class="menu-title" style="font-size: 15px; font-style: ''"><b>Select a Patient ....</b></p>
            </li>


            <input type="hidden" id="hidden_patient_id" value="all">

            @foreach ($patient_list as $patient )



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#patient-{{$patient->id}}" href='javascript:;' onclick='call_full_calendar({{ $patient->id }})' aria-expanded="false" aria-controls="patient-1">
                <i class="fa fa-chevron-circle-down menu-icon" style="color: #04b76b;"></i>
                <span class="menu-title">{{$patient->first_name." ".$patient->last_name}}</span>
              </a>
              <div class="collapse" id="patient-{{$patient->id}}">
                <ul class="nav flex-column sub-menu">

                  <li class="nav-item"><i class="fa fa-minus" style="padding-right: 27px;"></i>Medicaid ID : {{$patient->medicaid_id}}</li>

                  <li class="nav-item"><i class="fa fa-minus" style="padding-right: 27px;"></i>Address : {{ $patient->address.",".$patient->city }}</li>
                  <li class="nav-item"><i class="fa fa-minus" style="padding-right: 27px;"></i>Phone No : {{ $patient->cell_phone }}</li>
                  <li class="nav-item"><i class="fa fa-minus" style="padding-right: 27px;"></i>Assesment Type : {{$patient->assesment_type}}</li>
                </ul>
              </div>
            </li>

            @endforeach











          </ul>

      </nav>
      <!-- partial -->
      <div class="main-panel">


<div class="content-wrapper" style="background-image: url({{asset('assets')}}/Artboard.png);">
    <div class="row">
      <div class="col-md-12">
          <div class="card-body">


            <ul  class="nav nav-tabs" role="tablist">

                <li class="nav-item">
                    <a class="nav-link" href="admin" >Admin</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " href="intaker"  id="home-tab" data-toggle="tab"  role="tab" aria-controls="home-1" aria-selected="true" >Inteker</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" href="scheduler" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home-1" aria-selected="true">Scheduler</a>
                  </li>


             </ul>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">


                    <div class="content-wrapper">

                      <div class="card" style="border:none">
                        <div class="card-body" style="padding-top:2px">

                            <div id="calendar"></div>


                            <div class="modal fade modal-lg" id="show_date_details" style="padding-right:0px;margin-left:100px;align:center" >
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="overflow-x: auto;">
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="preload">
                                                <img src="{{asset('image')}}/loading_spinner.gif" />
                                            </div>

                                            <div class="card" style="overflow-x: auto;">

                                                <div class="card-body" style="overflow-x: auto;">


                                                    <div class="m-t-25">
                                                        <table id="data-table" class="table table-bordered">
                                                            <thead>
                                                                <th>Nurse Name</th>
                                                                <th>Patient Name</th>
                                                                <th>Date</th>
                                                                <th>Start Time</th>

                                                                <th>Patient Address</th>
                                                                <th>Assesment Type</th>


                                                                <th>Distance from patient(KM)</th>

                                                                <th></th>

                                                            </thead>
                                                            <tbody id="assign_nurse">

                                                            </tbody>

                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    </div>
                    <!-- content-wrapper ends -->


              </div>


            </div>
          </div>

      </div>

    </div>
  </div>


      </div>

    </div>

  </div>


</body>



</html>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="{{asset('assets')}}/js/app.min.js"></script>
  <script src="{{asset('assets')}}/js/vendors.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js" ></script>


  <script src="{{asset('assets')}}/vendors/datatables/jquery.dataTables.min.js"></script>
 <script src="{{asset('assets')}}/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/pages/datatables.js"></script>




  <script>


    var calendar;
    var events;
    var patient_id;


    function assign_nurse()
    {
        var patient_id = $("#assign_patient_id").val();
        var nurse_id = $("#assign_nurse_id").val();
        var date = $("#assign_date").val();
        var time = $("#assign_time").val();
        var assesment_type = $("#assesment_type").val();
        var formdata = new FormData();
        formdata.append('patient_id',patient_id);
        formdata.append('nurse_id',nurse_id);
        formdata.append('date',date);
        formdata.append('time',time);
        formdata.append('assesment_type',assesment_type);

         swal({
          title: "Are you sure?",
          text: "You will not be able to recover this assignment!",
          icon: "warning",
          buttons: [
            'No, cancel it!',
            'Yes, I am sure!'
          ],
           showLoaderOnConfirm: true,
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {

                    $.ajax({
                processData: false,
                contentType: false,
                url:"{{url('submit_nurse')}}",
                type:'POST',
                data: formdata,
                success:function(data, status){
                  // alert(data);
                     swal("Nurse Assign Successfully");
                     location.reload();





            },



              });

          } else {
            swal("Cancelled", "Assignment of nurse canceled :)", "error");
          }
        });



    }

    function call_full_calendar(patient_id)
    {

        $("#hidden_patient_id").val(patient_id);

     calendar.fullCalendar('refetchEvents');




    }



    function fetch_calendar_data()
    {


        patient_id = $("#hidden_patient_id").val();
        //alert(patient_id);





         calendar = $('#calendar').fullCalendar({


            editable:true,
            allDaySlot: false,
            eventLimit: true, // for all non-agenda views
            views: {
                agenda: {
                eventLimit: 6 // adjust to 6 only for agendaWeek/agendaDay
                },
                week: {
                    eventLimit: 6
                  },
                  timeGrid: {
                    eventLimit: 6
                  },

            },

            eventOrder: 'id',
            height: "auto",
            slotMinutes: 60,

            slotDuration: '00:60:00',


           slotLabelInterval: 60,



             defaultView: 'agendaWeek',

            minTime:'09:00:00',
            maxTime:'19:00:00',

            header:{
             left:'prev,next today',
             center:'title',
             right:'agendaWeek,agendaDay,',
            },

        events:function (start, end, timezone, callback) {
           //alert(patient_id);




        $.ajax({
            {{-- processData: false,
            contentType: false, --}}
            url:"{{url('fetch_calendar_data')}}",
            type:'POST',
           data:{patient_id:$("#hidden_patient_id").val()},
            success:function(data, status){



                //alert(patient_id);
                events = JSON.parse(data);

               callback(events);
               //$('#calendar').fullCalendar( 'removeEvents', events );







        },



          });

        },




         /* events:[{

            id: 999,
            title: 'Repeating Event',
            start: '2019-12-22T10:00',
            end:'2019-12-22T10:00',
            //dow:'[1]',

           // dow:'[1,4]',
            //dow:'[1,4]',
          }]*/






            selectable:true,
            selectHelper:true,

            editable:true,

            eventClick:function(calEvent, jsEvent, view)
            {
                //alert(calEvent.id);
              var patient_id = $('#hidden_patient_id').val();
                var nurse_id = calEvent.nurse_id;
              // alert(nurse_id);
              var time = calEvent.start.format('H:mm');
              var date = calEvent.start.format('DD-MM-YYYY');

             // alert(patient_id+" "+nurse_id);

             // alert(nurse_id);



            // alert(date);

                var formdata = new FormData();
                formdata.append('patient_id',patient_id);
                formdata.append('nurse_id',nurse_id);
                formdata.append('time',time);
                formdata.append('date',date);
                $.ajax({
                    processData: false,
                    contentType: false,
                    url:"{{url('show_nurse_assign_modal')}}",
                    type:'POST',
                    data: formdata,
                    success:function(data, status){
                        var msg = $.trim(data);
                        //alert(msg);
                        if(msg == 'not_ok')
                        {   swal("Please Select a patient first");

                        }
                        else if(msg =='already_appointed')
                        {

                            alert('Nurse already assigned for this slot. Try another nurse or another slot');
                        }
                        else
                        {
                        $("#assign_nurse").html(data);

                          $("#show_date_details").modal('show');
                        }
                        //alert(data);



                },



                  });






            }
            ,

            eventAfterAllRender: function() {

                // define static values, use this values to vary the event item height
                var defaultItemHeight = 30;
                var defaultEventItemHeight = 18;
                // ...

                // find all rows and define a function to select one row with an specific time
                var rows = [];
                $('div.fc-slats > table > tbody > tr[data-time]').each(function() {
                  rows.push($(this));
                });
                var rowIndex = 0;
                var getRowElement = function(time) {
                  while (rowIndex < rows.length && moment(rows[rowIndex].attr('data-time'), ['HH:mm:ss']) <= time) {
                    rowIndex++;
                  }
                  var selectedIndex = rowIndex - 1;
                  return selectedIndex >= 0 ? rows[selectedIndex] : null;
                };

                // reorder events items position and increment row height when is necessary
                $('div.fc-content-col > div.fc-event-container').each(function() {  // for-each week column
                  var accumulator = 0;
                  var previousRowElement = null;

                  $(this).find('> a.fc-time-grid-event.fc-v-event.fc-event.fc-start.fc-end').each(function() {  // for-each event on week column
                    // select the current event time and its row
                    var currentEventTime = moment($(this).find('> div.fc-content > div.fc-time').attr('data-full'), ['h:mm A']);
                    var currentEventRowElement = getRowElement(currentEventTime);

                    // the current row has to more than one item
                    if (currentEventRowElement === previousRowElement) {
                      accumulator++;

                      // move down the event (with margin-top prop. IT HAS TO BE THAT PROPERTY TO AVOID CONFLICTS WITH FullCalendar BEHAVIOR)
                      $(this).css('margin-top', '+=' + (accumulator * defaultItemHeight).toString() + 'px');

                      // increse the heigth of current row if it overcome its current max-items
                      var maxItemsOnRow = currentEventRowElement.attr('data-max-items') || 1;
                      if (accumulator >= maxItemsOnRow) {
                        currentEventRowElement.attr('data-max-items', accumulator + 1);
                        currentEventRowElement.css('height', '+=' + 0 + 'px');
                      }
                    } else {
                      // reset count
                      rowIndex = 0;
                      accumulator = 0;
                    }

                    // set default styles for event item and update previosRow
                    $(this).css('left', '0');
                    $(this).css('right', '7px');
                    $(this).css('height', defaultEventItemHeight.toString() + 'px');
                    $(this).css('margin-right', '0');
                    previousRowElement = currentEventRowElement;
                  });
                });

                // this is used for re-paint the calendar

                $('#calendar').fullCalendar('option', 'aspectRatio', $('#calendar').fullCalendar('option', 'aspectRatio'));
                //calendar.fullCalendar('refetchEvents');

              }



           });


         //  calendar.fullCalendar("removeEventSource", jQuery(this).data('source'));
    }


  $(document).ready(function() {

    $(".preload").hide();

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

        });
          fetch_calendar_data();




  });

  </script>

  <script>
    $('#data-table').DataTable({
        'paging' : false,
        'lengthChange': false,
        'searching' : false,
        'ordering' : false,
        'info' : false,
        'autoWidth' : true
      })

      $( document ).ajaxStart(function() {
         window.swal({
  title: "Loading...",
  text: "Please wait",
  imageUrl: "{{asset('image')}}/loading_spinner.gif",

  button: false,
  closeOnClickOutside: false,
    closeOnEsc: false
});
    });

    $( document ).ajaxStop(function() {
        swal.close();

    });
  </script>

