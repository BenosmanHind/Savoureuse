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
                                <div class="image"><a href="#"><img src="{{ asset('Accueil/images/img.png') }}" alt="" /></a></div>
                                <div class="intro"><p><strong>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas</strong></p> <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p></div>
                                <div class="instructions">
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
                   
                    <!--//comments-->
                    
                    <!--respond-->
                    
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
