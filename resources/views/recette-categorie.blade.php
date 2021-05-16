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
        <div class="row">
            <header class="s-title">
                <h1>Recipes</h1>
            </header>
            
            <aside class="above-sidebar full-width">
                <ul class="boxed">
                    @foreach ($categories as $categorie )
                        
       
                    <li class="light"><a href="{{route('voir_recette',['id'=>$categorie->id])}}" title="Appetizers"><i class="icon icon-themeenergy_pasta"></i> <span>{{ $categorie->name }}</span></a></li>
                    @endforeach
                </ul>
            </aside>
            
            <!--content-->
            <section class="content full-width">
                <!--entries-->
                <div class="entries row">
                    <!--item-->
                    @foreach ($recettes as $recette )
                        
                    
                    <div class="entry one-fourth">
                        <figure>
                            <img src="{{ asset('accueil/images/img.png') }}" alt="" />
                            <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
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
                    @endforeach
                    <!--item-->
                    
                   
                   
                  
                    
                    <div class="quicklinks">
                        <a href="#" class="button">More recipes</a>
                        <a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
                    </div>
                </div>
                <!--//entries-->
            </section>
            <!--//content-->
        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>

@endsection