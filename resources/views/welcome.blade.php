@extends('layouts.front')

@section('content')




<!--main-->
<main class="main" role="main">
    <!--intro-->
    <div class="intro">
        <figure class="bg"><img src="Accueil/images/intro.jpg" alt="" /></figure>
        
        <!--wrap-->
        <div class="wrap clearfix">
            <!--row-->
            <div class="row">
                <article class="three-fourth text">
                    <h1>Bienvenue a Savoureuse!</h1>
                    
                    <p>Savoureuse est   <strong>la cuisine ultime</strong> où les recettes prennent vie. Veux tu savoir ce que gagneras en nous rejoignant? </p>
                    <p>Des délicieuses recettes de tous genre a en faire rêver bien plus d'un. </p>
                    <a href="register" class="button white more medium">Rejoignez notre communauté <i class="fa fa-chevron-right"></i></a>
                    
                    <p> Déjà membre? Cliquez <a href="login"> ici </a>pour vous identifier.</p>
                </article>
                
                <!--search recipes widget-->
                <div class="one-fourth">
                    <div class="widget container">
                        <div class="textwrap">
                            <h3>Recherche de recette </h3>
                            <p>Il vous suffit de saisir le titre d'une recette </p>
                            <p>Vous pouvez également sélectionner une catégorie spécifique dans la liste déroulante</p>
                            <p>Il y aura certainement quelque chose de tentant pour vous d'essayer.</p> 
                            <p>Savourer!</p>
                        </div>
                        <form action="{{url('/search-recipe')}}">
                            <div class="f-row">
                                <input type="text" placeholder="Entrez votre terme de recherche" name="query" />
                            </div>
                            <div class="f-row">
                                <select>
                                   
                                    <option>ou selectionnez une catégorie</option>
                                    @foreach ($categories as $categorie)
                                    <option>{{ $categorie->name }}</option>
                                    <input type="hidden" name="id" value="{{ $categorie->id }}">
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="f-row bwrap">
                                <input type="submit" value="Start!"  />
                            </div>
                        </form>
                    </div>
                </div>
                <!--//search recipes widget-->
            </div>
            <!--//row-->
        </div>
        <!--//wrap-->
    </div>
    <!--//intro-->
    
    <!--wrap-->
    <div class="wrap clearfix">
        <!--row-->
        <div class="row">
            <!--content-->
            <section class="content full-width">
                <div class="icons dynamic-numbers">
                    <header class="s-title">
                        <h2 class="ribbon large">Statistiques Savoureuse</h2>
                    </header>
                    
                    <!--row-->
                    <div class="row">
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_chef-hat"></i>
                                <span class="title dynamic-number" data-dnumber="{{ $membres }}">0</span>
                                <span class="subtitle">membres</span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_pan"></i>
                                <span class="title dynamic-number" data-dnumber="{{ $countrecette }}">0</span>
                                <span class="subtitle">recettes</span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_image"></i>
                                <span class="title dynamic-number" data-dnumber="5300">0</span>
                                <span class="subtitle">photos</span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_pencil"></i>
                                <span class="title dynamic-number" data-dnumber="2300">0</span>
                                <span class="subtitle"></span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_chat-bubbles"></i>
                                <span class="title dynamic-number" data-dnumber="{{ $countcomment }}">0</span>
                                <span class="subtitle">commentaires</span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_stars"></i>
                                <span class="title dynamic-number" data-dnumber="{{ $countcategorie }}">0</span>
                                <span class="subtitle">categories</span>
                            </div>
                        </div>
                        <!--//item-->
                    
                        <div class="cta">
                            <a href="register" class="button big">Rejoignez-nous!</a>
                        </div>
                    </div>
                    <!--//row-->
                </div>
            </section>
            <!--//content-->
        
            <!--content-->
            <section class="content three-fourth">
                <!--cwrap-->
                
                <div class="cwrap">
                    <header class="s-title">
                        <h2 class="ribbon bright">Les recettes</h2>
                    </header>
                    
                    <!--entries-->
                    <div class="entries row">
                        <!--item-->
                        @foreach ($recettes as $recette )
                            
                        @if( $recette->accept == 1)
                        <div class="entry one-third">
                            <figure>
                                <img src="{{asset('Accueil/images/img.png')}}" alt="" />
                                <figcaption><a href="{{ url('recettedetail/'.$recette->id) }}"><i class="icon icon-themeenergy_eye2"></i> <span>Voir la recette</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="{{ url('recettedetail/'.$recette->id) }}">{{ $recette->titre }}</a></h2> 
                                <div class="actions">
                                    <div>
                                        
                                        <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">{{ $commentrecette }}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                       
                       
                        
                        
                        <div class="quicklinks">
                           
                            <a href="javascript:void(0)" class="button scroll-to-top">Retour au sommet</a>
                        </div>
                    </div>
                    <!--//entries-->
                </div>
                <!--//cwrap-->
            
                <!--cwrap-->
                
                <!--//cwrap-->
            </section>
            <!--//content-->
    
        
            <!--right sidebar-->
            <aside class="sidebar one-fourth">
                <div class="widget">
                    <h3>Catégories de recette</h3>
                    <ul class="boxed">
                        @foreach ($categories as $categorie)
                        <li class="light"><a href="{{route('voir_recette',['id'=>$categorie->id])}}" title="Appetizers"><i class="icon icon-themeenergy_pasta"></i> <span>{{ $categorie->name }}
                        </span></a></li>
                        @endforeach
                        
                        
                    </ul>
                </div>
                    
         
                    
             
                    
                <div class="widget">
                    
                    <a href="#"><img src="Accueil/images/advertisment.jpg" alt="" /></a>
                </div>
            </aside>
        </div>
        <!--//right sidebar-->
    </div>
    <!--//wrap-->
</main>
<!--//main-->

<!--call to action-->
<section class="cta">
    <div class="wrap clearfix">
        <a href="http://themeforest.net/item/socialchef-social-recipe-html-template/8568727?ref=themeenergy" class="button big white right">Purchase theme</a>
        <h2>Already convinced? This is a call to action section lorem ipsum dolor sit amet.</h2>
    </div>
</section>
<!--//call to action-->


@endsection
