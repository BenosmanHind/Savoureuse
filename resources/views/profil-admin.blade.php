@extends('layouts.dashboard-admin')
@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Mon Profile</h4>
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
                               
                                <h4 class="text-white mt-2">{{ old('name', Auth::user()->name) }}</h4>
                                 <h5 class="text-white mt-2">{{ old('email', Auth::user()->email) }}</h5>

                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->

           
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{url('/profil-admin/'.Auth::user()->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Nom Prenom</label>
                                
                              <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="{{ old('name', Auth::user()->name) }}" class="form-control @error('name') is-invalid @enderror" name="name"  required class="form-control p-0 border-0" >
                               
                                         </div>
                            </div>
                            <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Date de naissance</label>
                                    <div class="col-md-12 border-bottom p-0">
                                    <input type="date"  value="{{ old('date_naissance', Auth::user()->date_naissance) }}" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance"  required  class="form-control p-0 border-0" > 
                                       
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                <input type="email" value="{{ old('email', Auth::user()->email) }}"
                                        class="form-control @error('email') is-invalid @enderror" name="email"  required >

                     
                                    </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mot De Passe </label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="password"  class="form-control p-0 border-0"class="form-control @error('password') is-invalid @enderror" name="password" >

                               
                                </div>
                            </div>
                            
                           
                           
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                    
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