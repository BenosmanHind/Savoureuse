@extends('layouts.front')
@section('content')
<main class="main" role="main">
    <!--wrap-->
    <div class="wrap clearfix">
        <!--breadcrumbs-->
        <nav class="breadcrumbs">
            <ul>
                <li><a href="index.html" title="Home">Home</a></li>
                <li>Recipes</li>
            </ul>
        </nav>
        <!--//breadcrumbs-->
        
        <!--row-->
        <header class="s-title" style="display: block;">
            <h1>Les Recettes</h1>
        </header>
        <div class="row">
           
            <!--content-->
            <section class="content three-fourth">
                <!--entries-->
                <div class="entries row">
                    <!--item-->
                    @foreach ($recettes as $recette )
                        
                  
                    <div class="entry one-third">
                        <figure>
                            <img src="{{asset('Accueil/images/img.png')}}" alt="" />
                            <figcaption><a href="{{ url('recettedetail/'.$recette->id) }}"><i class="icon icon-themeenergy_eye2"></i> <span>Voir la recette</span></a></figcaption>
                        </figure>
                        <div class="container">
                            <h2><a href="recipe.html">{{ $recette->titre }}</a></h2> 
                            <div class="actions">
                                <div>
                                    <div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
                                    <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                                    <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    @endforeach
                   
                    
                    <div class="quicklinks">
                        <a href="#" class="button">More recipes</a>
                        <a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
                    </div>
                </div>
                <!--//entries-->
            </section>
            <!--//content-->
            
          
            <!--//right sidebar-->
        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>
<!--//main-->
@endsection