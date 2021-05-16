@extends('layouts.dashboard-admin')
@section('content')


   
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        
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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Vous trouverez ci-joint la table des cuisiniers</h3>
                              
                            
                            <ul class="navbar-nav ms-auto d-flex align-items-left">
                            <li class=" in">
                            <form role="search" class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
                                <input type="search" placeholder="Search..." class="form-control mr-sm" name="query">
                               <button class="btn btn-outline-primary my-2 my-sm-0 " type="submit">search</button>
                                </form>    
                        </li>
                    </ul>
                        </li>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nom & Prénom</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Statu</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cuisiniers as $cuisinier)
                                        <tr>
                                            <td>{{ $cuisinier->id }}</td>
                                            <td>{{ $cuisinier->name }}</td>
                                            <td>{{ $cuisinier->created_at }}</td>
                                            
                                            <td >
                                                @if ($cuisinier->accept == 0)
                                                     <h5><span class="badge bg-warning text-dark">En attent</span></h5>
                                                @else  <h5><span class="badge bg-success">Approuvé</span></h5>
                                                @endif
                                                   
                                                  
                                              </td>
                                            
                                            <td>
                                            
                                                <form action="{{url('cuisiniers/'.$cuisinier->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    
                        
                                                    @if($cuisinier->accept == 0)
                                                <a href="{{url('cuisiniers/validate/'.$cuisinier->id)}}"  onclick="return confirm('Vous voulez vraiment approuver?')" class="btn btn-success  ">
                                                  <i class="fas fa-check "> </i>
                                                </a> 
                                                @else  <a href=""   class="btn btn-success  disabled ">
                                                  <i class="fas fa-check" style="color:#ffff;"> </i>
                                                </a> 
                                                @endif
                                          <a href="{{url('cuisinierdetail/'.$cuisinier->id)}}" class="btn btn-warning ">
                                          <i class="fas fa-eye" style="color:#ffff;"> </i>
                                          </a>
                                           
                                          
                                           
                                            <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger ">
                                            <i class="fas fa-trash" style="color:#ffff;"> </i>
                                            
                                            </form>
                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>





@endsection