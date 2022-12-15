<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
/*if ( have_posts() ) : 
	// Si oui, bouclons au travers pour tous les afficher
	while ( have_posts() ) : the_post(); */
?>

<body>
<main>
<div class="contraste-div"></div>
<section class="heros">
      <div class="mySwiper">
        <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/01_mac.webp'; ?>" alt=""></div>
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/02_mac.webp'; ?>" alt=""></div>
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/03_mac.webp'; ?>" alt=""></div>
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/04_mac.webp'; ?>" alt=""></div>
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/05_mac.webp'; ?>" alt=""></div>
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/06_mac.webp'; ?>" alt=""></div>
              </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="slogan">
            <h1 class="text-sm-center text-md-center text-lg-center">Zoomhit Skins</h1>
            <?php
  $arguments = array( // 👈 Tableau d'arguments
    'post_type' => 'element_accueil',
    'posts_per_page' => 1
  );
  $desc = new WP_Query($arguments); // 👈 Utilisation
  while ($desc->have_posts()) : $desc->the_post(); 
?>
<p class="text-sm-center text-md-center text-lg-center description"><?php the_field('description_heros');?></p>
<?php
  endwhile; 
  wp_reset_postdata(); 
?>
            
          </div>
        </div>
      </div>
</section>
<?php
  $arguments2 = array( // 👈 Tableau d'arguments
    'post_type' => 'titre_secondaire',
    'posts_per_page' => 1
  );
  $title = new WP_Query($arguments2); // 👈 Utilisation
  while ($title->have_posts()) : $title->the_post(); 
?>
<h2 class="section__nouvelles accueil__title"><?php the_title();?></h2>
<?php
  endwhile; 
  wp_reset_postdata(); 
?>



<section class="section__nouvelles accueil">

<?php
  $arguments = array( // 👈 Tableau d'arguments
    'post_type' => 'nouvelle',
    'posts_per_page' => 3
  );
  $news = new WP_Query($arguments); // 👈 Utilisation
  while ($news->have_posts()) : $news->the_post(); 
?>


        <div class="item__nouvelle">
        <a href="<?php the_permalink(); ?>" class="lienItem__nouvelle">
         <img class='imgItem__nouvelle' src="<?php the_field('nouvelle_img'); ?>"> 
        </a>
        <a href="<?php the_permalink(); ?>" class="lienItemP__nouvelle">
             <div class="itemP__nouvelle">
                <p class="titre__nouvelle"> <?php the_title(); ?> </p>
                <p class="date__nouvelle"><?php the_field('date_nouvelle');?></p>
            </div>
            </a>
        </div>

<?php
  endwhile; 
  wp_reset_postdata(); 
?>

</section>


<section class="section__temoignages container">

<?php
  $arguments = array( // 👈 Tableau d'arguments
    'post_type' => 'titre_secondaire2',
    'posts_per_page' => 1
  );
  $title = new WP_Query($arguments); // 👈 Utilisation
  while ($title->have_posts()) : $title->the_post(); 
?>
<h2 class="section__temoignages__titre"><?php the_title(); ?></h2>

<?php
  endwhile; 
  wp_reset_postdata(); 
?>

<div class="mySwiper__temoignages container">
<div class="swiper-wrapper">
<?php
  $tem = new WP_Query('post_type=temoignage');
  while ($tem->have_posts()) : $tem->the_post(); 
?>


    <div class="swiper-slide temoignage">
        <div class="accueil__temoignages">
            <div class="accueil__temoignages__nom">
                <?php the_field('nom_temoignage');?>:
            </div>
            <div class="accueil__temoignages__text">
            « <?php the_field('text_temoignage');?> »
            </div>
        </div>
    </div>

<?php
  endwhile; 
  wp_reset_postdata(); 
?>

</div>
</div>
</section> 

</main>

</body>


<?php /*endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif; */

get_footer(); // Affiche footer.php 
?>