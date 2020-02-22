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

                  <li class="nav-item">
                    <a class="nav-link" href="examiner">Examiner</a>
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
<<<<<<< HEAD
                      
=======

>>>>>>> 91fec668cda214d6775f199ff0f933a8b1db57f2
                      <div class="card">
                        <div class="card-body"  >
                            <h4>Patients List</h4>



                            <div class="m-t-25" style="overflow-x:auto;overflow-y:scroll;height: 450px;">
                                <table id="data-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Patient Name</th>
                                            <th>Medicaid Id</th>
                                            <th>Member Id</th>
                                            <th>Primary Language</th>
                                            <th>Phone Number</th>
                                             <th>Email</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            {{-- <th>Status</th> --}}

                                        </tr>
                                    </thead>
                                    <tbody style="overflow-x:auto;overflow-y:scroll;height: 450px;">
                                        @foreach($patient_lists as $patient)
                                        <?php $address = $patient->address.",".$patient->city.",".$patient->country;
                                         if($patient->status=='assign')
                                         {
                                             $status = 'Assigned';
                                         }
                                         else
                                         {
                                             $status = 'Pending';
                                         }
                                        ?>
                                        <tr>
                                            <td>{{ $patient->first_name." ".$patient->last_name }}</td>
                                            <td>{{ $patient->medicaid_id  }}</td>
                                            <td>{{ $patient->member_id }}</td>
                                            <td>{{ $patient->primary_language }}</td>
                                            <td>{{ $patient->cell_phone }}</td>
                                            <td>{{ $patient->email }}</td>
                                            <td>{{ $address}}</td>
                                            <td>{{ $status}}</td>


                                        </tr>
                                        @endforeach

                                    </tbody>

                                </table>
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






@endsection


<script src="{{asset('assets')}}/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="{{asset('assets')}}/vendors/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/pages/datatables.js"></script>




    <script src="{{ asset('assets') }}/js/pages/form-elements.js"></script>



    <!-- Core JS -->
    <script src="{{asset('assets')}}/js/app.min.js"></script>

    <!-- JQuery -->

<!-- Bootstrap tooltips -->


<script src="{{ asset('assets') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<script src="{{ asset('assets') }}/vendors/select2/select2.min.js"></script>





    <script>











        $(function () {

            $.ajaxSetup({

headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});


        })







        $('#data-table').DataTable({
    'paging' : false,
    'lengthChange': false,
    'searching' : false,
    'ordering' : false,
    'info' : false,
    'autoWidth' : true
  })




    </script>


