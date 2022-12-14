<?php /* Template Name: A propos */ ?>

<?php

get_header(); // Affiche header.php
?>
<main>
    <div class="contraste-div"></div>
    <section class="hero__nouvelles">
        <picture>
            <source class="imgLandscape" srcset="<?php echo get_template_directory_uri(). '/assets/images_heros/apropos_landscape.webp';?>" media="(orientation: landscape)" />
            <img class="imgPortrait imgCentrer" src="<?php echo get_template_directory_uri(). '/assets/images_heros/apropos_portrait.webp';?>" />
        </picture>
      
        <div class="container-fluid mx-auto">
            <div class="row align-items-center justify-content-center sectionImageGroupe">
                <div class="colonne align-self-center col-12 col-md-6 col-xxl-4 text-center">
                    <h1 class="title-1">À Propos</h1>
                </div>
            </div>
        </div>
    </section>


      <div class='Apropos'>
        <h2 class='titrea'>Aperçu</h2>
        <div class='texteA'>
        <p>Ce site Web est exploité par ZoomHitskin. Sur ce site, les termes "nous", "notre" et "nos" font référence à ZoomHitskin. ZoomHitskin propose ce site Web, y compris toutes les informations, outils et services disponibles sur ce site pour vous, l'utilisateur, sous réserve de votre acceptation de tous les termes, conditions, politiques et avis énoncés ici. En visitant notre site et/ou en achetant quelque chose chez nous, vous vous engagez dans notre "Service" et acceptez d'être lié par les termes et conditions suivants ("Conditions d'utilisation", "Conditions"), y compris ces termes et conditions et politiques supplémentaires référencé ici et/ou disponible par hyperlien. Ces conditions d'utilisation s'appliquent à tous les utilisateurs du site, y compris, sans s'y limiter, les utilisateurs qui sont des navigateurs, des fournisseurs, des clients, des marchands et/ou des contributeurs de contenu.</p>
        </div>
      </div>
      <div class='Histoire'>
        <h2 class='titreh'>Histoire</h2>
        <div class='texteH'>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

      </main>
      
      <h2 class="membre__titre text-center">Membres</h2>
    <section class="container mx-auto section__membres">
   
    <div class="row membres__cartes">
 
    <?php
  $members = new WP_Query('post_type=membres');
  while ($members->have_posts()) : $members->the_post(); 
?>


<div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card membre__card"> <!--Mettre la classe card pour le div qui contient tous les éléments de la cartes-->
                    <img class="card-img-top membre__img" data-bs-toggle="modal" data-bs-target="#<?php the_field('nom'); ?>" src="<?php the_field('img_membre'); ?>" />
                    <div class="card-body membre__text"> <!--Ajouter la classe card-body pour le div qui contient le text-->
                        <p class="card-text membre__role"> <?php the_field('role'); ?> </p>
                        <p class="card-text membre__nom"> <?php the_title(); ?> </p>
                    </div>
                </div>
</div>
            

<?php
  endwhile; 
  wp_reset_postdata(); 
?>
</div>
</section>

<?php
  $members2 = new WP_Query('post_type=membres');
  while ($members2->have_posts()) : $members2->the_post(); 
?>


<div class="modal fade" id="<?php the_field('nom'); ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" id="modal__content">
        <div class="modal-header">
          <h2 class="modals__titre" id="modal__titre"><?php the_title(); ?></h2>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Fermer la fenêtre"></button>
        </div>
        <div class="modal-body">
          <img src="<?php the_field('img_membre'); ?>" alt="L'image est innaccessible"  class="modals__img" >
          <p class="modals__role"> <?php the_field('role'); ?> </p>
          <p class="modals__Lorem"><?php the_field('description'); ?></p>
        </div>
      </div>
    </div>
  </div>
            

<?php
  endwhile; 
  wp_reset_postdata(); 
?>


    <?php get_footer(); // Affiche footer.php 
?>