@extends('layouts.dashboard-admin')
@section('content')


<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Les Produits</h4>
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
                                    <form action="{{url('produit/'.$produit->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <a href="{{url('produit/'.$produit->id.'/edit')}}"  class="btn btn-warning  ">
                                        <i class="far fa-edit" style="color:#ffff;"> </i>
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