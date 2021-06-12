@extends('layouts.dashboard-admin')
@section('content')


<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Les Catégories</h4>
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
                    <form role="form"  method="POST" action="{{url('categorie')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3 col-md-12 ">
                        <label for="exampleFormControlInput1" class="form-label">Nom de catégorie</label>
                        <input type="text"  id="exampleFormControlInput1" placeholder="Entrer le nom "  class="form-control @error('name') is-invalid @enderror" name="name"  required  />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      
                        <button type="submit" class="btn btn-primary pl-4 pr-4 ml-3">Ajouter</button>
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
                    <h3 class="box-title">Vous trouverez ci-joint la table des catégories</h3>
                    
                     <ul class="navbar-nav ms-auto d-flex align-items-left">
                            <li class=" in">
                            <form role="search" class="form-inline my-2 my-lg-0" type="get" action="{{url('/searchcategorie')}}">
                                <input type="search" placeholder="Search..." class="form-control mr-sm" name="query">
                               <button class="btn btn-outline-primary my-2 my-sm-0  " type="submit"align="right" > <i class="fa fa-search"></i></button>
                               
                                </form>  

                        </li>
                    </ul>
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
                               
                                    
                               @foreach ($categories as $categorie )
                                   
                               
                                <tr>
                                    <td>{{ $categorie->id }}</td>
                                    <td>{{ $categorie->name }}</td>
                                    <td>{{ $categorie->created_at }}</td>


                                
                                    <td>
                                    <form action="{{url('categorie/'.$categorie->id)}}" method="post">

                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href="{{url('categorie/'.$categorie->id.'/edit')}}"  class="btn btn-warning  ">
                                        <i class="far fa-edit" style="color:#ffff;"> </i>
                                      </a> 
                                    <button type="submit" onclick="return confirm('Vous voulez vraiment supprimer?')" class="btn btn-danger ">
                                    <i class="fas fa-trash "style="color:#ffff;"> </i>
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
