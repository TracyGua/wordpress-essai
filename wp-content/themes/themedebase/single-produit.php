<?php
/**
 *  Template Name: Produit
 *  Template Post Type: post, page, produit
 */

get_header(); // Affiche header.php

// Avons-nous des articles à afficher ?
if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>
    <section class="single-product__boite container">
    <div class="row" >
    <div class="single-product__boite-image col-6"> 
         <img class="single-product__image" src="<?php the_field('imageproduit'); ?>" class="logo">
    </div>
            <div class="single-product__text col-6"> 
                <div class="single-product__nom"> 
                    <?php the_title(); // Titre de l'article ?>
                </div>

                <div class="single-product__prix">    
                <?php the_field('price') ?>
                </div>

                <div class="single-product__description">
                <?php the_field('description') ?>
                </div>
            </div>
        </div>
        </div>
          
    </section>


<?php endwhile; // Fermeture de la boucle
		
	// get_template_part( 'partials/comments' ); Affiche partials/comments.php

	// else : // Si aucun article n'a été trouvée
	endif;

	get_footer(); // Affiche footer.php 
?>