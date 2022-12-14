<?php
/**
 *  Template Name: Nouvelle
 *  Template Post Type: post, page, nouvelle
 */

get_header(); // Affiche header.php

if ( have_posts() ) : 
	// Si oui, bouclons au travers les articles (logiquement, il n'y en aura qu'un)
	while ( have_posts() ) : the_post(); 
?>
   <section class="single-news__boite container">
    <div class="row" >
<div class="single-news__boite-image col-6">
    <img class="single-news__image" src="<?php the_field('nouvelle_img'); ?>">
</div>
<div class="single-news__text col-6">
    <div class="single-news__titre"><?php the_field('titre_nouvelle'); ?></div>
    <div class="single-news__date"><?php the_field('date_nouvelle'); ?></div>
    <div class="single-news__description">
         <?php the_field('description_nouvelle'); ?>
    </div>
</div>
</div>
</section>

<?php endwhile; // Fermeture de la boucle
		
        endif;

	get_footer(); // Affiche footer.php 
?>