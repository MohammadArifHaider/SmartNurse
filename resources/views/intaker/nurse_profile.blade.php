@extends('intaker.app')

@section('title')

<h2 class="header-title">Form Layouts</h2>

@endsection

@section('content')

<div class="card">
        <div class="card-body">
            <h4>Create Nurse Profile</h4>

            <div class="m-t-25" >
                <form>






                    <h4>Nurse Information</h4>
                    <hr>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Gender</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Language</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Trained Plan</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email Address</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nurse Registration No</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Phone number</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Address</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">City</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Country</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Zip</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Prefered Days</label>
                           <div >
                                <input class="prefered_day" type="checkbox" value = "sunday" >
                                <label for="checkbox1">Sunday</label>
                                
                                <input class="prefered_day" type="checkbox" value = "monday" >
                                <label for="checkbox1">Monday</label>
                                
                                <input class="prefered_day" type="checkbox" value = "tuesday" >
                                <label for="checkbox1">Tuesday</label>
                                
                                <input class="prefered_day" type="checkbox"value = "wednesday" >
                                <label for="checkbox1">Wednesday</label>
                                <br>
                                
                                <input class="prefered_day" type="checkbox"value = "thursday" >
                                <label for="checkbox1">Thursday</label>
                                
                                <input class="prefered_day" type="checkbox" value = "friday" >
                                <label for="checkbox1">Friday</label>
                                
                                <input class="prefered_day" type="checkbox" value = "saturday">
                                <label for="checkbox1">Saturday</label>
                            </div>
                            
                             
                        </div>

                       
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Prefered Start Times</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Prefered End Times</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>


                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Prefered Notes</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="p-100">
                        </div>







                    </div>










                    <button type="button" id = "nurse_information_upload" style="float:right" class="btn btn-primary">Create Account</button>
                </form>
            </div>



        </div>
        <hr>
        <h4 style="text-align:center">OR</h4>

        <div class="card">
            <div class="card-body">
                    <div class="preload">
                            <img src="{{asset('image')}}/loading_spinner.gif" />
                        </div>
                <h4>Upload the batch file</h4>

                <div class="m-t-25">
                    <form method="post" enctype="multipart/form-data" action="{{ url('nurse_file_import') }}">
                        @csrf
                    <div class="row">
                        <div class="col-md-7">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="select_file" id="customFile" multiple>

                                <label class="custom-file-label" for="customFile">Choose file</label>

                            </div>
                        </div>
                        <div class="col-md-3 file_name_shown">

                            <button type="button" id="upload" class="btn btn-primary">Upload</button>

                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Upload</button> --}}

                            <div class="modal fade bd-example-modal-xl" id="excel_error_modal">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content" style="overflow-x: auto;">
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card" style="overflow-x: auto;">
                                                <div class="card-body" style="overflow-x: auto;">
                                                    <h4>Missing Data</h4><span style="float:right" ><a href="{{ url('export') }}"><button type="button" id="export" class="btn btn-primary">Download Missing Data</button></a></span>
                                                    <p style="color:red">This record has missing data. Please fill it up and re-upload</p>
                                                    <div class="m-t-25">
                                                        <table id="data-table" class="table table-bordred">
                                                            <thead>
                                                                <tr>
                                                                    <th>Row no</th>
                                                                    <th>Name</th>
                                                                    <th>Gender</th>
                                                                    <th>Language</th>
                                                                    <th>Trained Plan</th>
                                                                    <th>Email Address</th>
                                                                    <th>Nurse Registration No</th>
                                                                    <th>Phone_number</th>
                                                                    <th>Address</th>
                                                                    <th>City</th>
                                                                    <th>Country</th>
                                                                    <th>Prefereed Days</th>
                                                                    <th>Prefered Location</th>
                                                                    <th>Prefered Start Times</th>
                                                                    <th>Prefered End Times</th>
                                                                    <th>Prefered Notes</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody id="missing_data">


                                                            </tbody>
                                                            {{-- <tfoot>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Position</th>
                                                                    <th>Office</th>
                                                                    <th>Age</th>
                                                                    <th>Start date</th>
                                                                    <th>Salary</th>
                                                                </tr>
                                                            </tfoot> --}}
                                                        </table>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>

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

    <script>
            $( document ).ajaxStart(function() {
                $( ".preload" ).show();
            });

            $( document ).ajaxStop(function() {
                $( ".preload" ).hide();
            });


        $(function () {

            $(".preload").hide();
            $.ajaxSetup({

headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});


        })
        
        $("#nurse_information_upload").on('click',function(){
            var prefered_day = [];            
        $('.prefered_day:checked').each(function(){
            prefered_day.push($(this).val());
        });
        
        var formdata = new FormData();
        formdata.append(" ",);
        //alert(prefered_day);
            
        });

        $("#upload").on('click',function(){

               var formdata = new FormData();
               formdata.append('select_file',$('#customFile')[0].files[0]);
     $.ajax({
      processData: false,
      contentType: false,
      url:"{{url('nurse_file_import')}}",
      type:'POST',
      data: formdata,
      success:function(data, status){

        var msg = $.trim(data);
        if(msg != "ok")
        {
            {{--  $('#missing_data').html(data);
            $('#excel_error_modal').modal('show');  --}}

            alert('Data Uploaded Successfully');
        }
        else
        {
            alert('Data Uploaded Successfully');
        }


    //  alert("Notice send successfully");
    //  location.reload();
  },



    });


            //  $("#excel_error_modal").modal('show');

        });




        $('#customFile').on('change',function(){
            //get the file name
            var fileName = $(this).val().split('\\').pop();;
            //replace the "Choose a file" label
          $(".custom-file-label").html(fileName);
        });

        $('#data-table').DataTable({
    'paging' : true,
    'lengthChange': true,
    'searching' : false,
    'ordering' : false,
    'info' : false,
    'autoWidth' : true
  })




    </script>





@endsection


