@extends('admin.app')

{{-- @section('title')

<h2 class="header-title">Form Layouts</h2>

@endsection --}}

@section('content')

<div class="content-wrapper" style="background-image: url({{asset('assets')}}//Artboard.png);">
    <div class="row">
      <div class="col-md-12">
          <div class="card-body">


            <ul  class="nav nav-tabs" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" href="admin"  id="home-tab" data-toggle="tab"  role="tab" aria-controls="home-1" aria-selected="true" >Admin</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="intaker"  id="home-tab" >Inteker</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="scheduler">Scheduler</a>
                  </li>


             </ul>




            <div class="tab-content">
              <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">

                <div class="main-panel">
                    <div class="content-wrapper">
                      <div class="page-header">

                        {{-- <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">view user</li>
                          </ol>
                        </nav> --}}
                      </div>
                      <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Create User Profile</h4>
                              <p class="card-description">Information</p>
                              <form class="forms-sample">
                                <div class="form-group">
                                  <label for="exampleInputUsername1"><i class="fa fa-user-circle" style="color: #dedede;"></i> Name</label>
                                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1"><i class="fa fa-envelope" style="color: #dedede;"></i> Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1"><i class="fa fa-lock" style="color: #dedede;"></i> Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputConfirmPassword1"><i class="fa fa-lock" style="color: #dedede;"></i> Confirm Password</label>
                                  <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                  <div class="form-check form-check-flat form-check-primary">
                                    <h4 class="card-title">User Role</h4>
                                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                            Admin
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked>
                            Super admin
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                            Inteker
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="">
                            Scheduler
                          </label>
                        </div>
                      </div>
                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Create User</button>

                              </form>
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
  <script src="{{asset('assets')}}/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{asset('assets')}}/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/pages/datatables.js"></script>

    <!-- Core JS -->
    <script src="{{asset('assets')}}/js/app.min.js"></script>
    <script src="{{asset('assets')}}/js/custom/view_user_data.js"></script>

    <script>
            $( document ).ajaxStart(function() {
                $( ".preload" ).show();
            });

            $( document ).ajaxStop(function() {
                $( ".preload" ).hide();
            });



            $('#data-table').DataTable({
                'paging' : true,
                'lengthChange': false,
                'searching' : false,
                'ordering' : false,
                'info' : false,
                'autoWidth' : false
            })




    </script>






@endsection


