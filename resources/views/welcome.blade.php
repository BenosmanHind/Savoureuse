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
                                    <option>Apetizers</option>
                                    <option>Cocktails</option>
                                    <option>Deserts</option>
                                    <option>Main courses</option>
                                    <option>Snacks</option>
                                    <option>Soups</option>
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
                            <a href="login.html" class="button big">Join us!</a>
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
                                <h2 class="ribbon">Recipe of the Day</h2>
                            </header>
                            <article class="entry">
                                <figure>
                                    <img src="Accueil/images/img.jpg" alt="" />
                                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                                </figure>
                                <div class="container">
                                    <h2><a href="recipe.html">Honey Cake</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                    <div class="actions">
                                        <div>
                                            <a href="#" class="button">See the full recipe</a>
                                            <div class="more"><a href="recipes2.html">See past recipes of the day</a></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!--//featured recipe-->
                        
                        <!--featured member-->
                        <div class="featured one-third">
                            <header class="s-title">
                                <h2 class="ribbon star">Featured member</h2>
                            </header>
                            <article class="entry">
                                <figure>
                                    <img src="Accueil/images/avatar.jpg" alt="" />
                                    <figcaption><a href="my_profile.html"><i class="icon icon-themeenergy_eye2"></i> <span>View member</span></a></figcaption>
                                </figure>
                                <div class="container">
                                    <h2><a href="my_profile.html">Kimberly C.</a></h2>
                                    <blockquote><i class="fa fa-quote-left"></i>Traditional dishes and fine bakery products accompanied by beautiful photographs to bend around and attract the tryout! Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</blockquote>
                                    <div class="actions">
                                        <div>
                                            <a href="#" class="button">Check out her recipes</a>
                                            <div class="more"><a href="#">See past featured members</a></div>
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
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="recipe.html">Tourte aux poulet</a></h2> 
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
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img1.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="recipe.html">Lasagne végétarienne</a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                                        <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img2.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="recipe.html">Gratin de pomme de terre </a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
                                        <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img1.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="recipe.html">Lasagne végétarienne</a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                                        <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img2.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="recipe.html">Gratin de pomme de terre </a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
                                        <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img.png" alt="" />
                                <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="recipe.html">Tourte aux poulet</a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                                        <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <div class="quicklinks">
                            <a href="#" class="button">More recipes</a>
                            <a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
                        </div>
                    </div>
                    <!--//entries-->
                </div>
                <!--//cwrap-->
            
                <!--cwrap-->
                <div class="cwrap">
                    <header class="s-title">
                        <h2 class="ribbon bright">Latest articles</h2>
                    </header>
                    <!--entries-->
                    <div class="entries row">
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img.png" alt="" />
                                <figcaption><a href="blog_single.html"><i class="icon icon-themeenergy_eye2"></i> <span>View post</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="blog_single.html">Barbeque party</a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="date"><i class="fa fa-calendar"></i><a href="#">22 Dec 2014</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="blog_single.html#comments">27</a></div>
                                    </div>
                                </div>
                                <div class="excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img2.png" alt="" />
                                <figcaption><a href="blog_single.html"><i class="icon icon-themeenergy_eye2"></i> <span>View post</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="blog_single.html">How to make sushi</a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="date"><i class="fa fa-calendar"></i><a href="#">22 Dec 2014</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="blog_single.html#comments">27</a></div>
                                    </div>
                                </div>
                                <div class="excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <!--item-->
                        <div class="entry one-third">
                            <figure>
                                <img src="Accueil/images/img1.png" alt="" />
                                <figcaption><a href="blog_single.html"><i class="icon icon-themeenergy_eye2"></i> <span>View post</span></a></figcaption>
                            </figure>
                            <div class="container">
                                <h2><a href="blog_single.html">Make your own bread</a></h2> 
                                <div class="actions">
                                    <div>
                                        <div class="date"><i class="fa fa-calendar"></i><a href="#">22 Dec 2014</a></div>
                                        <div class="comments"><i class="fa fa-comment"></i><a href="blog_single.html#comments">27</a></div>
                                    </div>
                                </div>
                                <div class="excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. Lorem ipsum dolor sit amet . . . </p>
                                </div>
                            </div>
                        </div>
                        <!--item-->
                        
                        <div class="quicklinks">
                            <a href="#" class="button">More posts</a>
                            <a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
                        </div>
                    </div>
                    <!--//entries-->
                </div>
                <!--//cwrap-->
            </section>
            <!--//content-->
    
        
            <!--right sidebar-->
            <aside class="sidebar one-fourth">
                <div class="widget">
                    <h3>Catégories de recette</h3>
                    <ul class="boxed">
                        <li class="light"><a href="recipes.html" title="Appetizers"><i class="icon icon-themeenergy_pasta"></i> <span>apéritifs
                        </span></a></li>
                        <li class="medium"><a href="recipes.html" title="Cocktails"><i class="icon icon-themeenergy_margarita2"></i> <span>Cocktails</span></a></li>
                        <li class="dark"><a href="recipes.html" title="Deserts"><i class="icon icon-themeenergy_cupcake"></i> <span>Déserts</span></a></li>
                        
                        
                        
                        <li class="light"><a href="recipes.html" title="Events"><i class="icon icon-themeenergy_turkey"></i> <span>Evénements</span></a></li>
                    
                        <li class="dark"><a href="recipes.html" title="Fish"><i class="icon icon-themeenergy_fish2"></i> <span>Poisson</span></a></li>
                        
                        <li class="medium"><a href="recipes.html" title="Healthy"><i class="icon icon-themeenergy_apple2"></i> <span>Sain</span></a></li>
                        
                        <li class="light"><a href="recipes.html" title="Asian"><i class="icon icon-themeenergy_sushi"></i> <span>Asiatique</span></a></li>
                        <li class="medium"><a href="recipes.html" title="Mexican"><i class="icon icon-themeenergy_peper"></i> <span>Mexican</span></a></li>
                        <li class="dark"><a href="recipes.html" title="Pizza"><i class="icon  icon-themeenergy_pizza-slice"></i> <span>Pizza</span></a></li>
                        
                        <li class="medium"><a href="recipes.html" title="Kids"><i class="icon icon-themeenergy_happy"></i> <span>Enfants</span></a></li>
                        <li class="dark"><a href="recipes.html" title="Meat"><i class="icon icon-themeenergy_meat"></i> <span>Viande</span></a></li>
                        <li class="light"><a href="recipes.html" title="Snacks"><i class="icon icon-themeenergy_fried-potatoes"></i> <span>Snacks</span></a></li>
                        
                        <li class="dark"><a href="recipes.html" title="Salads"><i class="icon icon-themeenergy_eggplant"></i> <span>Salades</span></a></li>
                        <li class="light"><a href="recipes.html" title="Storage"><i class="icon icon-themeenergy_soup2"></i> <span>Soupes</span></a></li>
                        <li class="medium"><a href="recipes.html" title="Vegetarian"><i class="icon icon-themeenergy_plant-symbol"></i> <span>Vegetarien</span></a></li>
                    </ul>
                </div>
                    
         
                    
                <div class="widget members">
                    <h3>Our members</h3>
                    <div id="members-list-options" class="item-options">
                      <a href="#">Newest</a>
                      <a class="selected" href="#">Active</a>
                      <a href="#">Popular</a>
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