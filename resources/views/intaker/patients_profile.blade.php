@extends('intaker.app')



@section('content')


<div class="content-wrapper" style="background-image: url({{asset('assets')}}/Artboard.png);">
    <div class="row">
      <div class="col-md-12">
          <div class="card-body">

             <ul  class="nav nav-tabs" role="tablist">

                <li class="nav-item">
                    <a class="nav-link" href="admin" >Admin</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" href="intaker"  id="home-tab" data-toggle="tab"  role="tab" aria-controls="home-1" aria-selected="true" >Inteker</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="scheduler">Scheduler</a>
                  </li>


             </ul>

            <div class="tab-content">
              <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                <div class="media">
                  <div class="col-12 grid-margin stretch-card">

        <div class="card" style="border: 0px;padding:60px">
          <h5 style="padding-bottom: 1rem;padding-top: 1rem;">
            <i class="fa fa-plus-square" style="color: #f5a623;"></i>
             Create Patient Profile
          </h5>

          <h4 class="card-title" style="border: 2px solid #74d8d4; border-radius: 5px; padding:10px; margin-bottom: 0rem;">
            <i class="fa fa-caret-down" style="color: #4d72c1; font-size: 1.5rem;"></i>
          Member Control
          </h4>

          <div class="card-body" style="margin-top: 0rem;">
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Insurance Plan <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="text">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Date Recieved <span style="color: red;">*</span></label>
                <div id="datepicker-popup" class="input-group date datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon input-group-append border-left">
                      <span class="far fa-calendar input-group-text"></span>
                    </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Date need to finished <span style="color: red;">*</span></label>
                <div id="datepicker-popup" class="input-group date datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon input-group-append border-left">
                      <span class="far fa-calendar input-group-text"></span>
                    </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Assesment Type <span style="color: red;">*</span></label>
                <select class="form-control" id="exampleSelectGender">
                    <option>Primary</option>
                    <option>Re-Assesment</option>
                  </select>
              </div>
            </form>
          </div>


          <h4 class="card-title" style="border: 2px solid #74d8d4; border-radius: 5px; padding:10px; margin-bottom: 0rem;">
            <i class="fa fa-caret-down" style="color: #4d72c1; font-size: 1.5rem;"></i>
         Personal Information
          </h4>

          <div class="card-body" style="margin-top: 0rem;">
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Medicate ID</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="p-100">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Member ID</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="50">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">First Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Last Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Sex <span style="color: red;">*</span></label>
                <select class="form-control" id="exampleSelectGender">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Date of Birth <span style="color: red;">*</span></label>
                <div id="datepicker-popup" class="input-group date datepicker">
                    <input type="text" class="form-control">
                    <span class="input-group-addon input-group-append border-left">
                      <span class="far fa-calendar input-group-text"></span>
                    </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Primary Language </label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Bangla">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Cell-Phone</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Home-Phone </label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="text">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Matrial Status</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="UM">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="email" class="form-control" id="exampleInputName1" placeholder="abc@gmail.com">
              </div>
            </form>
          </div>



          <h4 class="card-title" style="border: 2px solid #74d8d4; border-radius: 5px; padding:10px; margin-bottom: 0rem;">
            <i class="fa fa-caret-down" style="color: #4d72c1; font-size: 1.5rem;"></i>
          Address
          </h4>

          <div class="card-body" style="margin-top: 0rem;">
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Address</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Text">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">State or Region</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">Zip Code</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">Country</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="">
              </div>
            </form>
            <button type="submit" class="btn btn-primary mr-2">Create User</button>
          </div>

          <h4 style="text-align: center;">Or</h4><hr>

          <h5 style="padding-bottom: 1rem;">
            <i class="fa fa-plus-square" style="color: #f5a623;"></i>
             Upload the batch file
          </h5>
          <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-8 col-sm-8 col-md-8 col-lg-8">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Excel File">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Browse</button>
                  </span>
                  <div class="col-md-2 col-sm-2 col-lg-2">
                    <button class="btn btn-primary btn-md" type="button">
                        <i class="fas fa-cloud-upload-alt" style="font-size:25px"></i>
                    </button>
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

    </div>
  </div>
  @include('all_js');

  <script src="{{asset('assets')}}/js/formpickers.js"></script>
  <script src="{{asset('assets')}}/js/form-addons.js"></script>
  <script src="{{asset('assets')}}/js/x-editable.js"></script>
  <script src="{{asset('assets')}}/js/dropify.js"></script>
  <script src="{{asset('assets')}}/js/dropzone.js"></script>
  <script src="{{asset('assets')}}/js/jquery-file-upload.js"></script>
  <script src="{{asset('assets')}}/js/formpickers.js"></script>
  <script src="{{asset('assets')}}/js/form-repeater.js"></script>
  <script src="{{asset('assets')}}/js/file-upload.js"></script>



@endsection




