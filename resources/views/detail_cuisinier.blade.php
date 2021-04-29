@extends('layouts.dashboard-admin')
@section('content')


<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Détaille Cuisinier</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    
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
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
            
                    <div class="container">

                        <h3 class="box-title mt-3 text-center">Les Détails D'un Cuisinier</h3>
                        <div class="container">
                        <div class="row">
                        
                        <div class="col-md-4">
                        <h5><span class="badge bg-primary">Nom Et Prenom :</span></h5> 
                        <p> {{$cuisinier->name }}</p>
                        </div>

                        <div class="col-md-4">
                        <h5><span class="badge bg-primary">Email:</span></h5> 
                        <p> {{$cuisinier->email }}</p>
                        </div>

                        <div class="col-md-4">
                        <h5><span class="badge bg-primary">Date De Naissance:</span></h5> 
                        <p> {{$cuisinier->date_naissance }}</p>
                        </div>
                        </div>
                        </div>
                
                
                    
                
                <h3 class="box-title mt-3 text-center">Ses Recettes</h3>
                    
                </div>
           
            </div>
        </div>
        </div>
        
                
               
               
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
       
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection