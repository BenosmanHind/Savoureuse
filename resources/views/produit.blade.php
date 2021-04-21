@extends('layouts.dashboard-admin')
@section('content')


<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Blank Page</h4>
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
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                
                <div class="white-box">
                    <form role="form"  method="POST" action="{{url('produit')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3 col-md-12 ">
                        <label for="exampleFormControlInput1" class="form-label">Nom de produit</label>
                        <input type="text"  id="exampleFormControlInput1" placeholder="Entrer le nom "  class="form-control @error('name') is-invalid @enderror" name="name"  required  />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      
                        <button type="submit" class="btn btn-primary pl-4 pr-4 float-right">Ajouter</button>
                    </form> 
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

        <div class="row d-flex justify-content-center">
            <div class="col-sm-8">
                <div class="white-box">
                    <h3 class="box-title">Vous trouverez ci-joint la table des produits</h3>
                    
                    
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Nom</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                    
                               @foreach ($produits as $produit )
                                   
                               
                                <tr>
                                    <td>{{ $produit->id }}</td>
                                    <td>{{ $produit->name }}</td>
                                    <td>{{ $produit->created_at }}</td>
                                
                                    <td>
                                    <form action="" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href=""  class="btn btn-warning  ">
                                        <i class="far fa-edit" > </i>
                                      </a> 
                                    <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger ">
                                    <i class="fas fa-trash" style="color:#ffff;"> </i>
                                    </button>
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
    </div>

@endsection