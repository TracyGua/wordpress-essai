<?php /* Template Name: Console */ ?>

<?php

get_header(); // Affiche header.php
?>

<section class="hero__nouvelles">
        <picture>   
            <source class="imgLandscape" srcset="<?php echo get_template_directory_uri(). '/assets/appareils/switch_lite/Capture.png'; ?>" />
            <img class="imgPortraitContain" src="<?php echo get_template_directory_uri(). '/assets/appareils/switch_lite/Capture.png'; ?>" />
        </picture>
        <div class="container-fluid mx-auto">
            <div class="row align-items-center justify-content-center sectionImageGroupe">
                <div class="colonne align-self-center col-12 col-md-6 col-xxl-4 text-center">
                    <h1 class="title-1">Consoles</h1>
                </div>
            </div>
        </div>
    </section>

<div class="produits">
<?php
  $products = new WP_Query('post_type=produit');
  while ($products->have_posts()) : $products->the_post(); 
?>

        <a href="<?php the_permalink(); ?>">
        <div class="item ps4_1">
         <img class='imgItem' src="<?php the_field('imageproduit'); ?>"> 
   
             <div class="itemP">
                <p class="item__name"> <?php the_title(); ?> </p>
                <p class="item__prix"><?php the_field('price'); ?></p>
            </div>
  
        </div>
        </a>

<?php
  endwhile; 
  wp_reset_postdata(); 
?>

</div>
   
    <?php get_footer(); // Affiche footer.php 
?>