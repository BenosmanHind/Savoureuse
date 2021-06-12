@extends('layouts.front')
@section('content')



<!--main-->
<main class="main" role="main">
    <!--wrap-->
    <div class="wrap clearfix">
        <!--breadcrumbs-->
        <nav class="breadcrumbs">
            <ul>
                <li><a href="index.html" title="Home">Home</a></li>
                <li><a href="#" title="Recipes">Recipes</a></li>
                <li><a href="recipes.html" title="Cocktails">Deserts</a></li>
                <li>Recipe</li>
            </ul>
        </nav>
        <!--//breadcrumbs-->
        
        <!--row-->
        <header class="s-title" style="display: block;">
            <h1>{{ $recette->titre }}</h1> 
            
        </header>
        <div class="row">
            
            <!--content-->
            
            <section class="content three-fourth">
                <!--recipe-->
                    <div class="recipe">
                        <div class="row">
                            <!--two-third-->
                            <article class="two-third">
                                <div class="image"><a href="#"><img src="{{$recette->return_image()->lien}}" alt="" /></a></div>
                                
                                <div class="instructions mt-3">
                                    <ol>
                                        @foreach ($etapes as $etape )
                                        <li>{{ $etape->description }}</li>
                                        @endforeach
                                        
                                        
                                    </ol>
                                </div>
                            </article>
                            <!--//two-third-->
                            
                            <!--one-third-->
                            <article class="one-third">
                                <div class="simple-rating star-rating mb-3" style="background-color: aliceblue; padding:10px;">
                                   
                                   <b> Note Globale : </b>
                                    @for($i=0;$i<$recette->rating();$i++)
                                        <i class="fa fa-star"  style="font-size: 1.5em;" data-rating="2" aria-hidden="true"></i>
                                    
                                    @endfor
                                   
                                </div>
                                <dl class="basic">
                                    
                                   
                                    <dt>Temps de préparation</dt>
                                    <dd>{{ $recette->temps_preparation }}</dd>
                                    <dt>Temps de cuisson</dt>
                                    <dd>{{ $recette->temps_cuisson }}</dd>
                                    <dt>Le cout</dt>
                                    <dd>{{ $recette->cout }}</dd>
                                    <dt>Difficulte</dt>
                                    <dd>{{ $recette->difficulte }}</dd>
                                </dl>
                                
                                <dl class="user">
                                    <dt>Categorie</dt>
                                    <dd>{{ $recette->returncategorie()->name }}</dd>
                                    <dt>Poster par </dt>
                                    <dd>{{ $recette->returnuser()->name }}</dd>
                                </dl>
                                
                                <dl class="ingredients">
                                    @foreach ($ingredients as $ingredient )
                                    <dt>{{  $ingredient->quantite }} {{  $ingredient->unite }}</dt>
                                    <dd>{{  $ingredient->returnproduct()->name}} </dd>
                                        
                                    @endforeach
                                    
                                    
                                </dl>
                            </article>
                            <!--//one-third-->
                        </div>
                    </div>
                    <!--//recipe-->
                        
                    <!--comments-->
						<div class="comments" id="comments">
							<h2>{{ $comment }} comments </h2>
							<ol class="comment-list">
								<!--comment-->
                                @foreach ($comments as $comment )
                                    
                              
                                <li class="comment depth-1">
									<div class="avatar"><a href="my_profile.html"><img src="images/avatar.jpg" alt="" /></a></div>
									<div class="comment-box">

										<div class="comment-author meta"> 
                                            <div class="row">
                                                <strong>{{ $comment->name }}</strong> {{ $comment->created_at->diffForHumans() }}  
                                                <div class="simple-rating star-rating ml-2">
                                                    @for($i=0;$i<(int)$comment->star;$i++)
                                                        <i class="fa fa-star" data-rating="2" aria-hidden="true"></i>
                                                    
                                                    @endfor
                                                   
                                                </div>
                                            </div>
                                            
										</div>
										<div class="comment-text">
											<p>{{ $comment->comment }}</p>
										</div>
									</div> 
								</li>
                              
                                @endforeach
								<!--//comment-->
								
							
								
								
								
								
								
								
							</ol>
						</div>
                    
                    <!--respond-->
                    <div class="comment-respond" id="respond">
                        
                        <h2>Laissez un commentaire</h2>

                        

                        <div class="container">
                            <p><strong>Note:</strong> Qu'est ce que vous pensez de cette recette ? merci de laisser un avis </p>

                           
                            
                            <form role="form"  method="POST" action="{{ url('comments') }}" enctype="multipart/form-data">
                                @csrf

                                <p>
                                    <input class="rating">
                                  </p>

                                <div class="f-row">
                                    <div class="third">
                                        <input type="text" placeholder="Votre nom"  class="form-control @error('name') is-invalid @enderror" name="name" />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                       
                                    </div>
                                <input type="hidden" value="{{ $recette->id }}" name="recette_id">
                                    
                                    
                                    
                                
                                
                                </div>
                                <div class="f-row">
                                    <textarea  class="form-control @error('comment') is-invalid @enderror" name ="comment"></textarea>
                                        @error('comment')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                
                                <div class="f-row">
                                    <div class="third bwrap">
                                        <input type="submit" value="Commenter" />
                                    </div>
                                </div>
                                
                         
                            </form>
                        </div>
                    </div>
                    <!--//respond-->
            </section>
            <!--//content-->
            
            <!--right sidebar-->
           
            <!--//right sidebar-->
        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>
<!--//main-->


@endsection
