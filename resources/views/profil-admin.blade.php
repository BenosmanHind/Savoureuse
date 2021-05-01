@extends('layouts.dashboard-admin')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                        class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                        to Pro</a>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->

            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box">
                    <div class="user-bg"> 
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img src="dashboard/plugins/images/users/image_profile.jpg"
                                        class="thumb-lg img-circle" alt="img"></a>
                               
                                <h4 class="text-white mt-2">User Name</h4>
                                 <h5 class="text-white mt-2">info@myadmin.com</h5>

                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box mt-5 d-md-flex">
                        <div class="col-md-4 col-sm-4 text-center">
                            <h1>258</h1>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <h1>125</h1>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <h1>556</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->

           <form  action="{{url('/profil-admin/'.Auth::user()->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @csrf
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Full Name</label>
                                
                              <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="{{ old('name', Auth::user()->name) }}" class="form-control @error('name') is-invalid @enderror" name="name"  required class="form-control p-0 border-0" >
                               
                                         </div>
                            </div>
                            <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Date de naissance</label>
                                    <div class="col-md-12 border-bottom p-0">
                                    <input type="number"  value="{{ old('date_naissance', Auth::user()->date_naissance) }}" class="form-control @error('name') is-invalid @enderror" name="name"  required  class="form-control p-0 border-0" > 
                                       
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                <input type="email" value="{{ old('email', Auth::user()->email) }}"
                                        class="form-control @error('email') is-invalid @enderror" name="email"  required >

                        @error('email')
                                    </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Password</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password" value="password" class="form-control p-0 border-0">
                                </div>
                            </div>
                            
                           
                           
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

@endsection