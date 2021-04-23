@extends('layouts.dashboard-cuisinier')

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
            <div class="col-md-12">
                
                <div class="white-box">
                    <form role="form"  method="POST" action="" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Ingrédient 
                            <button type="submit"  class="btn btn-primary ">
                                <i class="fas fa-plus" style="color:#ffff;"> </i>
                            </button>
                        </label>
                        <div class="row">
                      <div class="col-md-6">
                        <input  type="text"  id="exampleFormControlInput1" placeholder="Entrer la quantite "  class="form-control @error('quantite') is-invalid @enderror" name="quantite"  required  />
                      </div>
                       <div class="col-md-6">
                        <input  type="text"  id="exampleFormControlInput1" placeholder="Entrer l'unite "  class="form-control @error('unite') is-invalid @enderror" name="unite"  required  />
                       </div>
                        <div class="col-md-6">
                             <select @error('produits') is-invalid @enderror name="produits[]" multiple class="form-control">
                               @foreach ($produits as $produit)
                                <option value="{{$produit->id}}">{{$produit->name}}</option>
                                 
                                        
                                @endforeach
                                    
                                </select>
                        </div>
                        </div>
                      </div>
                      
                      <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Etapes
                            <button type="submit"  class="btn btn-primary ">
                                <i class="fas fa-plus" style="color:#ffff;"> </i>
                            </button>
                        </label>
                        <div class="row">
                            <div class="col-md-6">
                        <input type="text"  id="exampleFormControlInput1" placeholder="Numero d'etape "  class="form-control @error('numero') is-invalid @enderror" name="numero"  required  />
                            </div>
                            <div class="col-md-6">
                        <input type="text"  id="exampleFormControlInput1" placeholder="Déscription d'etape "  class="form-control @error('description') is-invalid @enderror" name="description"  required  />
                            </div>
                      </div>
                      </div>

                      <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Temps de préparation</label>
                        <select  class="form-select" aria-label="Default select example">
                            <option value="1">10min</option>
                            <option value="2">15min</option>
                            <option value="3">20min</option>
                            <option value="4">30min</option>
                            <option value="5">45min</option>
                            <option value="6">1h</option>
                            <option value="7">1h:30</option>
                            <option value="8">2h</option>
                            <option value="9">3h</option>
                          </select>
                      </div>

                      <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Temps de cuisson</label>
                        <select  class="form-select" aria-label="Default select example">
                            <option value="1">10min</option>
                            <option value="2">15min</option>
                            <option value="3">20min</option>
                            <option value="4">30min</option>
                            <option value="5">45min</option>
                            <option value="6">1h</option>
                            <option value="7">1h:30</option>
                            <option value="8">2h</option>
                            <option value="9">3h</option>
                          </select>
                      </div>
                      <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Difficulté</label>
                        <select  class="form-select" aria-label="Default select example">
                            <option value="1">Facile</option>
                            <option value="2">Moyen</option>
                            <option value="3">Difficile</option>
                            
                          </select>
                      </div>
                      <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Cout</label>
                        <select  class="form-select" aria-label="Default select example">
                            <option value="1">Moins cher</option>
                            <option value="2">Cher</option>
                            <option value="3">Assez cher</option>
                            
                          </select>
                      </div>

                      <div class="mb-3 col-md-8 ">
                        <label for="exampleFormControlInput1" class="form-label">Catégorie</label>
                        <select  class="form-select" aria-label="Default select example">
                            <option value="1">Facile</option>
                            <option value="2">Moyen</option>
                            <option value="3">Difficile</option>
                            
                          </select>
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

        
    </div>




@endsection