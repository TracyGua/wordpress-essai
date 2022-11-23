<?php /* Template Name: Contact */ ?>

<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
if ( have_posts() ) : 
	// Si oui, bouclons au travers pour tous les afficher
	while ( have_posts() ) : the_post(); 
?>

<body>
<main  class="contact__main" id="idMain">
        <section class="container section__contact">
            <div class="row justify-content-center align-items-center">
                <div class="section__contact__titre col-12">
                    <h1 class="contact__titre text-center">Contactez-nous</h1>
                </div>
                <!--Manque l'action dans le div du formulaire pour que le bouton fonctionne-->
            
                <form class="contact__form  col-lg-12 col-md-6 col-sm-3">
                    <div class="form__nom"> 
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" required>
                    </div>
                    <br>
                    <div class="form__prenom">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" required>
                    </div>
                    <br>
                    <div class="form__courriel">
                        <label for="courriel">Courriel</label>
                        <input type="text" id="courriel" required>
                    </div>
                    <br>
                    <div class="form__sujet">
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" required>
                    </div>
                    <br>
                    <div class="form__message">
                        <label for="message">Message</label>
                        <textarea id="message" required cols="45" rows="5"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn__envoyer" value="Envoyer">
                </form>
                
            </div>
        </section>

                
            
            
        <section class="container section__membres">
            <div class="row membres__cartes">
                <!--Inclure le titre de la section des membres dans la balise section des membres, mais pas dans celle qui contient les cartes-->
                <h1 class="membre__titre text-center">Membres</h1>
                <!--Rendre cette partie responsive et diminuer la taille de cette section ou afficher deux cartes sur deux lignes différentes-->
                    
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card membre__card"> <!--Mettre la classe card pour le div qui contient tous les éléments de la cartes-->
                        <img class="card-img-top membre__img" src="<?php echo get_template_directory_uri(). '/assets/images_membres/tracy.png'; ?>">
                        <div class="card-body membre__text"> <!--Ajouter la classe card-body pour le div qui contient le text-->
                            <p class="card-text membre__role">Rôle: Project Owner(PO) et Scrum Master</p>
                            <p class="card-text membre__nom">Nom: Tracy Gua</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card membre__card"> 
                        <img class="card-img-top membre__img" src="<?php echo get_template_directory_uri(). '/assets/images_membres/mariaLaura.png'; ?>">
                        <div class="card-body membre__text"> 
                            <p class="card-text membre__role">Rôle:Developper Back-end & DevOp</p>
                            <p class="card-text membre__nom">Nom: Maria Laura Coronel</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card membre__card"> 
                            <img class="card-img-top membre__img" src="<?php echo get_template_directory_uri(). '/assets/images_membres/florence.png'; ?>">
                        <div class="card-body membre__text"> 
                            <p class="card-text membre__role">Rôle: Designer et Assurance Qualité(QA)</p>                                    
                            <p class="card-text membre__nom">Nom: Florence Lapierre</p>
                        </div>
                    </div>
                </div>
                                
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card membre__card"> 
                        <img class="card-img-top membre__img" src="<?php echo get_template_directory_uri(). '/assets/images_membres/natacha.png'; ?>">
                        <div class="card-body membre__text"> 
                            <p class="card-text membre__role">Rôle: Agent de promotion</p>
                            <p class="card-text membre__nom">Nom: Natacha Abdallah</p>                            
                        </div>
                    </div>   
                </div>
                   
            </div>
        </section>
     
    </main>

</body>
<?php endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/erreur404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>