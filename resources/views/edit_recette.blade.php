@extends('layouts.dashboard-cuisinier')
@section('content')


<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Ajouter Recette</h4>
            </div>
            
        </div>
        <!-- /.col-lg-12 -->
    </div>
   
    <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <div class="container">
                    <form class="form-group" action="{{ url('addrecette/'.$recette->id) }}" method="post" id="form-recette" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                     
                    @csrf
                        <!-- Destails section -->
                        <h3 class="box-title">Détails</h3>
                        <p>Merci de remplir les details de votre recette</p>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <label >Titre</label>
                                <input type="string" class="form-control" name='titre' placeholder="Description" value="{{ $recette->titre }}">
                            </div>
                            <div class="col-md-3">
                                <label >Categorie</label>
                                <select name="categorie" class="custom-select" >
                                    @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}" @if($categorie->id == $recette->categorie_id) selected @endif>{{$categorie->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label >Temps de preparation</label>
                                <input type='text' class="form-control" name='temps_preparation' placeholder="Temps de préparation"value="{{ $recette->temps_preparation }}">
                                
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-md-3">
                                <label >Temps de cuisson</label>
                                <input type='text' class="form-control" name='temps_cuisson' placeholder="Temps de cuisson" value="{{ $recette->temps_cuisson }}">
                                
                            </div>
                            <div class="col-md-3">
                               
                                <label >Difficulté</label>
                                <select class="custom-select" name='difficulte' >
                                <option  @if($recette->difficulte== 'Facile') selected @endif >Facile</option>
                                <option  @if($recette->difficulte== 'Moyen') selected @endif >Moyen</option>
                                <option  @if($recette->difficulte== 'Dificile') selected @endif>Dificile</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label >Coût</label>
                                <select class="custom-select" name='cout'>
                                <option  @if($recette->cout== 'Pas chèr') selected @endif >Pas chèr</option>
                                <option  @if($recette->cout== 'Chèr') selected @endif >Chèr</option>
                                <option  @if($recette->cout== 'Assez chèr') selected @endif>Assez chèr</option>
                                </select>
                            </div>
                        </div>
                        <!-- Ingredients section -->
                        <h3 class="box-title mt-3">Ingrédients</h3>
                        <p>Merci de fournir les ingridients avec les informations</p>
                        <div class="ingredient-section">
                            @foreach ($recette->ingredients as $ingredient)
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Produit</label>
                                        <select name="produits" class="custom-select">
                                            @foreach ($produits as $produit)
                                    <option value={{$produit->id}} @if($produit->id == $ingredient->produit_id) selected @endif>{{$produit->name}}</option>
                                    
                                            
                                    @endforeach
                                    
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Quantité</label>
                                        <input type="number" class="form-control" value="{{$ingredient->quantite }}" name='quantite'>
                                    </div>
                                    <div class=" col-md-2">
                                        <label >Unité</label>
                                        <select class="custom-select" name='unite'>
                                        <option>Grs</option>
                                        <option>Litre</option>
                                        <option>pièce</option>
                                        </select>
                                    </div>
                                    <div class="d-flex align-items-end col-md-2">
                                    @if ($loop->iteration == 1 )
                                        <button type="button" class="btn btn-primary btn-add mr-1"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                        <button type="button" class="btn btn-danger btn-remove "><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    
                         <!-- Etapes section -->
                        <h3 class="box-title mt-3">Etapes</h3>
                        <p>Merci de fournir les etapes de preparation de votre recette</p>
                        <div class="etape-section">
                            <div class="row">
                                @foreach ($recette->etapes as $etape)
                                <div class="col-md-8">

                                    <label >Etape {{$loop->iteration}}</label>
                                    <textarea type="string" name="step1" class="form-control"  > {{$etape->description}}</textarea>

                                </div>
                                <div class="d-flex align-items-end col-md-2">
                                  @if ($loop->iteration == 1 )
                                      
                                  
                                <button type="button" class="btn btn-primary btn-add-step mr-1"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-danger btn-remove-step"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                    @endif  
                                </div>
                                @endforeach
                            </div>
                         </div>
                        <!-- Etapes section -->
                        <h3 class="box-title mt-3">Multimedia</h3>
                        <p>Tous ce qui est multimedia pour la recette </p>
                        <div class="media-section">
                        <div class="row">
                            <div class="col-md-8">
                                <label>Image du resultat </label>
                                <div class="custom-file">
                                   
                                        
                                   
                                    <input type="file" name="picture" class="custom-file-input" id="inputGroupFile02"/>
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-end col-md-2">
                                <button type="button" class="btn btn-primary btn-add-media mr-1"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-danger btn-remove-media"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </div>
                            
                        </div>
                        </div>
                    
                    </form>
                    <h3 class="box-title mt-3 text-center submitBtn"><button  class="btn btn-primary"> Modifier la recette </button></h3>
                </div>
        
    </div>



@endsection