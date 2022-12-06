<?php /* Template Name: Consolev2 */ ?>

<?php

get_header(); // Affiche header.php
?>

<div class="produits">
<?php
  $products = new WP_Query('post_type=produit');
  while ($products->have_posts()) : $products->the_post(); 
?>


        <div class="item ps4_1">
         <img class='imgItem' src="<?php the_field('imageproduit'); ?>"> 
   
             <div class="itemP">
                <p class="item__name"> <?php the_title(); ?> </p>
                <p class="item__prix"><?php the_field('price'); ?></p>
            </div>
  
        </div>

<?php
  endwhile; 
  wp_reset_postdata(); 
?>

</div>
   
    <?php get_footer(); // Affiche footer.php 
?>