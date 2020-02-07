@extends('super_admin.app')

{{-- @section('title')

<h2 class="header-title">Form Layouts</h2>

@endsection --}}

@section('content')

<div class="content-wrapper" style="background-image: url({{asset('assets')}}//Artboard.png);">
    <div class="row">
      <div class="col-md-12">
          <div class="card-body">
            <h4 class="card-title" style="color: #fff">Dashboard</h4>

            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="admin-page.html" role="tab" aria-controls="home-1" aria-selected="true">Admin</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="super admin-page.html">Super Admin</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="inteker-page.html">Inteker</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="scheduler-page.html">Scheduler</a>
              </li>

              <!--
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">Contact</a>
              </li>-->
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
               <h1> select view user</h1>
              </div>


            </div>
          </div>

      </div>

    </div>
  </div>





@endsection


