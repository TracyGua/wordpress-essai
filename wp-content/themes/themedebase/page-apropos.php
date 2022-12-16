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
                    <h1 class="title-1"><?php single_post_title() ?></h1>
                </div>
            </div>
        </div>
    </section>


    <?php
  $apropos = new WP_Query('post_type=apropos_element');
  while ($apropos->have_posts()) : $apropos->the_post(); 
?>
            
            
      <div class='Apropos'>
        <h2 class='titrea'> <?php the_field('apercu_titre'); ?> </h2>
        <div class='texteA'>
        <p><?php the_field('apercu_text'); ?></p>
        </div>
      </div>
      <div class='Histoire'>
        <h2 class='titreh'><?php the_field('histoire_titre'); ?></h2>
        <div class='texteH'>
        <p><?php the_field('histoire_text'); ?></p>
        </div>
      </div>
      </main>
      
      <h2 class="membre__titre text-center"><?php the_field('titre_membres'); ?></h2>
<?php
  endwhile; 
  wp_reset_postdata(); 
?>



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