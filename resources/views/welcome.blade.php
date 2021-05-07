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
                            <p>Il vous suffit de saisir un igredient, un plat ou un mot-clé. </p>
                            <p>Vous pouvez également sélectionner une catégorie spécifique dans la liste déroulante</p>
                            <p>Il y aura certainement quelque chose de tentant pour vous d'essayer.</p> 
                            <p>Savourer!</p>
                        </div>
                        <form action="find_recipe.html">
                            <div class="f-row">
                                <input type="text" placeholder="Entrez votre terme de recherche" />
                            </div>
                            <div class="f-row">
                                <select>
                                    <option>ou selectionnez une catégorie</option>
                                    <option>Apéritifs</option>
                                    <option>Cocktails</option>
                                    <option>Déserts</option>
                                    <option>Plats principaux</option>
                                    <option>Snacks</option>
                                    <option>Soupes</option>
                                </select>
                            </div>
                            <div class="f-row bwrap">
                                <input type="submit" value="Start!" />
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
                                <span class="title dynamic-number" data-dnumber="1730">0</span>
                                <span class="subtitle">membres</span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_pan"></i>
                                <span class="title dynamic-number" data-dnumber="1250">0</span>
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
                                <span class="title dynamic-number" data-dnumber="7400">0</span>
                                <span class="subtitle">commentaires</span>
                            </div>
                        </div>
                        <!--//item-->
                        
                        <!--item-->
                        <div class="one-sixth">
                            <div class="container">
                                <i class="icon icon-themeenergy_stars"></i>
                                <span class="title dynamic-number" data-dnumber="1700">0</span>
                                <span class="subtitle">articles</span>
                            </div>
                        </div>
                        <!--//item-->
                    
                        <div class="cta">
                            <a href="login.html" class="button big">Rejoignez-nous!</a>
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
                    <!--entries-->
                    <div class="entries row">
                        <!--featured recipe-->
                        <div class="featured two-third">
                            <header class="s-title">
                                <h2 class="ribbon">Recette du jour</h2>
                            </header>
                            <article class="entry">
                                <figure>
                                    <img src="Accueil/images/img.jpg" alt="" />
                                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>Voir la recette</span></a></figcaption>
                                </figure>
                                <div class="container">
                                    <h2><a href="recipe.html">Honey Cake</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                    <div class="actions">
                                        <div>
                                            <a href="#" class="button">Voir la recette complète</a>
                                            <div class="more"><a href="recipes2.html">Voir les recettes du jour  passées</a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!--//featured recipe-->
                        
                        <!--featured member-->
                        <div class="featured one-third">
                            <header class="s-title">
                                <h2 class="ribbon star">Membre en vedette</h2>
                            </header>
                            <article class="entry">
                                <figure>
                                    <img src="Accueil/images/avatar.jpg" alt="" />
                                    <figcaption><a href="my_profile.html"><i class="icon icon-themeenergy_eye2"></i> <span>Voir le membre</span></a></figcaption>
                                </figure>
                                <div class="container">
                                    <h2><a href="my_profile.html">Kimberly C.</a></h2>
                                    <blockquote><i class="fa fa-quote-left"></i>Traditional dishes and fine bakery products accompanied by beautiful photographs to bend around and attract the tryout! Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</blockquote>
                                    <div class="actions">
                                        <div>
                                            <a href="#" class="button">Voir les recettes du jour  passées</a>
                                            <div class="more"><a href="#">Voir les anciens membres vedettes</a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!--//featured member-->
                    </div>
                    <!--//entries-->
                </div>
                <!--//cwrap-->
            
                <!--cwrap-->
                <div class="cwrap">
                    <header class="s-title">
                        <h2 class="ribbon bright">Dernières recettes</h2>
                    </header>
                    
                    <!--entries-->
                    <div class="entries row">
                        <!--item-->
                        @foreach ($recettes as $recette )
                            
                        @if( $recette->accept == 1)
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>Voir la recette</span></a></figcaption>
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
                        @endif
                        @endforeach
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                        
                        <!--item-->
                       
                       
                        
                        
                        <div class="quicklinks">
                            <a href="#" class="button">Plus de recette</a>
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
                        <li class="light"><a href="recipes.html" title="Appetizers"><i class="icon icon-themeenergy_pasta"></i> <span>{{ $categorie->name }}
                        </span></a></li>
                        @endforeach
                        
                        
                    </ul>
                </div>
                    
         
                    
                <div class="widget members">
                    <h3>Nos membres</h3>
                    <div id="members-list-options" class="item-options">
                      <a href="#">Récent</a>
                      <a class="selected" href="#">Active</a>
                      <a href="#">Populaire</a>
                    </div>
                    <ul class="boxed">
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Kimberly C.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Alex J.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Denise M.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Jason H.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Jennifer W.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Anabelle Q.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Thomas M.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Michelle S.</span></a></div></li>
                        <li><div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /><span>Bryan A.</span></a></div></li>
                    </ul>
                </div>
                    
                <div class="widget">
                    <h3>Publicité</h3>
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
