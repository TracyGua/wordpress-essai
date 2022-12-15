<?php /* Template Name: Nouvelles */ ?>

<?php

get_header(); // Affiche header.php
?>

<main>
    <div class="contraste-div"></div>
<section class="hero__nouvelles">
        <picture>     
            <source class="imgLandscape" srcset="<?php echo get_template_directory_uri(). '/assets/images_heros/nouvelle_landscape.webp';?>" media="(orientation: landscape)" />
            <img class="imgPortrait imgCentrer" src="<?php echo get_template_directory_uri(). '/assets/images_heros/nouvelle_portrait.jpg';?>" />
        </picture>
      
        <div class="container-fluid mx-auto">
            <div class="row align-items-center justify-content-center sectionImageGroupe">
                <div class="colonne align-self-center col-12 col-md-6 col-xxl-4 text-center">
                    <h1 class="title-1">Nouvelles</h1>
                </div>
            </div>
        </div>
    </section>
    

<section class="section__nouvelles">


<?php
  $arguments = array( // 👈 Tableau d'arguments
    'post_type' => 'nouvelle',
    'posts_per_page' => 1
  );
  $news1 = new WP_Query($arguments); // 👈 Utilisation
  while ($news1->have_posts()) : $news1->the_post(); 
?>
 <div class="item__nouvelle">
        <a href="<?php the_permalink(); ?>" class="lienItem__nouvelle">
         <img class='imgItem__nouvelle' src="<?php the_field('nouvelle_img'); ?>"> 
         </a>
         <a href="<?php the_permalink(); ?>"  class="lienItemP__nouvelle">
             <div class="itemP__nouvelle__n1">
                <p class="titre__nouvelle"> <?php the_title(); ?> </p>
                <p class="date__nouvelle"><?php the_field('date_nouvelle'); ?></p>
            </div>
            </a>
        </div>


<?php
  endwhile; 
  wp_reset_postdata(); 
?>

<?php
  $news = new WP_Query('post_type=nouvelle');
  while ($news->have_posts()) : $news->the_post(); 
?>

        <div class="item__nouvelle">
        <a href="<?php the_permalink(); ?>" class="lienItem__nouvelle">
         <img class='imgItem__nouvelle' src="<?php the_field('nouvelle_img'); ?>"> 
         </a>
         <a href="<?php the_permalink(); ?>"  class="lienItemP__nouvelle">
             <div class="itemP__nouvelle">
                <p class="titre__nouvelle"> <?php the_title(); ?> </p>
                <p class="date__nouvelle"><?php the_field('date_nouvelle'); ?></p>
            </div>
            </a>
        </div>

<?php
  endwhile; 
  wp_reset_postdata(); 
?>

</section>
</main>

<input type="button" value="Voir plus de nouvelles" class="btnNouvelles"></input>



<?php get_footer(); // Affiche footer.php 
?>