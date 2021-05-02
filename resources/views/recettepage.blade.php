@extends('layouts.front')
@section('content')



<!--main-->
<main class="main" role="main">
    <!--wrap-->
    <div class="wrap clearfix">
        <!--breadcrumbs-->
        <nav class="breadcrumbs">
            <ul>
                <li><a href="index.html" title="Home">Accueil</a></li>
                <li><a href="#" title="Recipes">Recettes</a></li>
                <li><a href="recipes.html" title="Cocktails">Déserts</a></li>
                <li>Recette</li>
            </ul>
        </nav>
        <!--//breadcrumbs-->
        
        <!--row-->
        <div class="row">
            <header class="s-title">
                <h1>{{ $recette->titre }}</h1>
            </header>
            <!--content-->
            <section class="content three-fourth">
                <!--recipe-->
                    <div class="recipe">
                        <div class="row">
                            <!--two-third-->
                            <article class="two-third">
                                <div class="image"><a href="#"><img src="Accueil/images/img.png" alt="" /></a></div>
                                <div class="intro"><p><strong> Astuces et conseils pour Tourte au poulet facile </strong></p> <p> Vous pouvez remplacer le fromage râpé par des cubes de Roquefort pour une tourte encore plus parfumée. </p></div>
                                <div class="instructions">
                                    <ol>
                                        <li>Préchauffez le four à th 7 (210°C).</li>
                                        <li>Lavez et coupez les champignons en lamelles. Coupez le poulet en lamelles et déposez le dans un saladier avec les champignons puis mélangez avec le fromage et la crème.</li>
                                        <li>Déroulez la pâte dans un moule à gratin puis répartissez la préparation au poulet</li>
                                        <li>Salez et poivrez puis recouvrez de la seconde pâte. Faites un trou au centre de la tourte et enfournez pour 30 à 40 min. Dégustez bien chaud. </li>
                                   </ol>
                                </div>
                            </article>
                            <!--//two-third-->
                            
                            <!--one-third-->
                            <article class="one-third">
                                <dl class="basic">
                                    <dt>Temps de préparations</dt>
                                    <dd>{{ $recette->temps_preparation }}</dd>
                                    <dt>Temps de cuisson</dt>
                                    <dd>{{ $recette->temps_cuisson }}</dd>
                                    <dt>Difficulté</dt>
                                    <dd>{{ $recette->difficulte }}</dd>
                                    
                                </dl>
                                
                                <dl class="user">
                                    <dt>Catégorie</dt>
                                    <dd>Déserts</dd>
                                    <dt>Posté par</dt>
                                    <dd>Jennifer W.</dd>
                                </dl>
                                
                                <dl class="ingredients">
                                    <dt>2</dt>
                                    <dd>Rouleau de pâte feuilletée</dd>
                                    <dt>4</dt>
                                    <dd>Escalopes de poulet</dd>
                                    <dt>250g</dt>
                                    <dd>Champignons de Paris</dd>
                                    <dt>20 cl</dt>
                                    <dd>Crème fraiche</dd>
                                    <dt>100g</dt>
                                    <dd> Fromage râpé</dd>
                                 </dl>
                            </article>
                            <!--//one-third-->
                        </div>
                    </div>
                    <!--//recipe-->
                        
                    <!--comments-->
                    <div class="comments" id="comments">
                        <h2>5 comments </h2>
                        <ol class="comment-list">
                            <!--comment-->
                            <li class="comment depth-1">
                                <div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /></a></div>
                                <div class="comment-box">
                                    <div class="comment-author meta"> 
                                        <strong>Kimberly C.</strong> dit il y a 1 mois <a href="#" class="comment-reply-link"> Répondre</a>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                    </div>
                                </div> 
                            </li>
                            <!--//comment-->
                            
                            <!--comment-->
                            <li class="comment depth-1">
                                <div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /></a></div>
                                <div class="comment-box">
                                    <div class="comment-author meta"> 
                                        <strong>Alex J.</strong> dit il y a 1 mois <a href="#" class="comment-reply-link"> Répondre</a>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                    </div>
                                </div> 
                            </li>
                            <!--//comment-->
                            
                            <!--comment-->
                            <li class="comment depth-2">
                                <div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /></a></div>
                                <div class="comment-box">
                                    <div class="comment-author meta"> 
                                        <strong>Kimberly C.</strong> dit il y a 1 mois <a href="#" class="comment-reply-link"> Répondre</a>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                    </div>
                                </div> 
                            </li>
                            <!--//comment-->
                            
                            <!--comment-->
                            <li class="comment depth-3">
                                <div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /></a></div>
                                <div class="comment-box">
                                    <div class="comment-author meta"> 
                                        <strong>Alex J.</strong> dit il y a 1 mois <a href="#" class="comment-reply-link"> Répondre</a>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                    </div>
                                </div> 
                            </li>
                            <!--//comment-->
                            
                            <!--comment-->
                            <li class="comment depth-1">
                                <div class="avatar"><a href="my_profile.html"><img src="Accueil/images/avatar.jpg" alt="" /></a></div>
                                <div class="comment-box">
                                    <div class="comment-author meta"> 
                                        <strong>Denise M.</strong> dit il y a 1 mois <a href="#" class="comment-reply-link"> Répondre</a>
                                    </div>
                                    <div class="comment-text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
                                    </div>
                                </div> 
                            </li>
                            <!--//comment-->
                        </ol>
                    </div>
                    <!--//comments-->
                    
                    <!--respond-->
                    <div class="comment-respond" id="respond">
                        <h2>Laisser une réponse</h2>
                        <div class="container">
                            <p><strong>Note:</strong> Les commentaires sur le site Web reflètent les opinions de leurs auteurs, et pas nécessairement celles du portail Internet Savoureuse. A demandé de s'abstenir d'insultes, de jurons et d'expressions vulgaires. Nous nous réservons le droit de supprimer tout commentaire sans préavis d'explications.</p>
                            <p>Votre adresse email ne sera pas publiée. Les champs obligatoires sont signés avec <span class="req">*</span></p>
                            <form>
                                <div class="f-row">
                                    <div class="third">
                                        <input type="text" placeholder="Votre nom" />
                                        <span class="req">*</span>
                                    </div>
                                    
                                    <div class="third">
                                        <input type="email" placeholder="Votre email" />
                                        <span class="req">*</span>
                                    </div>
                                    
                                    <div class="third">
                                        <input type="text" placeholder="Votre site web" />
                                    </div>
                                
                                </div>
                                <div class="f-row">
                                    <textarea></textarea>
                                </div>
                                
                                <div class="f-row">
                                    <div class="third bwrap">
                                        <input type="submit" value="Envoyer un commentaire" />
                                    </div>
                                </div>
                                
                                <div class="bottom">
                                    <div class="f-row checkbox">
                                        <input type="checkbox" id="ch1" />
                                        <label for="ch1"> M'avertir des réponses à mon commentaire par e-mail</label>
                                    </div>
                                    <div class="f-row checkbox">
                                        <input type="checkbox" id="ch2" />
                                        <label for="ch2">Avertissez-moi des nouveaux articles par e-mail.</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--//respond-->
            </section>
            <!--//content-->
            
            <!--right sidebar-->
            <aside class="sidebar one-fourth">
                <div class="widget nutrition">
                    <h3>Apports nutritionnels <span>(par portion)</span></h3>
                    <table>
                        <tr>
                            <td>Calories </td>
                            <td>505</td>
                        </tr>
                        <tr>
                            <td>Protéine</td>
                            <td>59g</td>
                        </tr>
                        <tr>
                            <td>Crabes</td>
                            <td>59g</td>
                        </tr>
                        <tr>
                            <td>Gras</td>
                            <td>29g</td>
                        </tr>
                        <tr>
                            <td>Saturés</td>
                            <td>17g</td>
                        </tr>
                        <tr>
                            <td>Fibre</td>
                            <td>2g</td>
                        </tr>
                        <tr>
                            <td>Sucre</td>
                            <td>44g</td>
                        </tr>
                        <tr>
                            <td>Sel</td>
                            <td>0.51g</td>
                        </tr>
                    </table>
                </div>
                
                <div class="widget share">
                    <ul class="boxed">
                        <li class="light"><a href="#" title="Facebook"><i class="fa fa-facebook"></i> <span>Partager sur Facebook</span></a></li>
                        <li class="medium"><a href="#" title="Twitter"><i class="fa fa-twitter"></i> <span> Partager sur Twitter </span></a></li>
                        <li class="dark"><a href="#" title="Favourites"><i class="fa fa-heart"></i> <span>  Ajouter aux Favoris  </span></a></li>
                    </ul>
                </div>
                
                <div class="widget members">
                    <h3>Membres qui ont aimé cette recette</h3>
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
            </aside>
            <!--//right sidebar-->
        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>
<!--//main-->
@endsection
