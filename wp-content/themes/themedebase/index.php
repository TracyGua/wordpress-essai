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
                <div class="swiper-slide"><img class="img-fluid" src="<?php echo get_template_directory_uri(). '/assets/appareils/macbook/01_mac.webp'; ?>" alt=""></div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="slogan">
            <h1 class="text-sm-center text-md-center text-lg-center">Zoomhit Skins</h1>
            <p class="text-sm-center text-md-center text-lg-center description">ZoomHitskin propose une variété de décals,d'emballages et d'habillages de haute qualité pour consoles de jeux et appareils électroniques</p>
          </div>
        </div>
      </div>
</section>


<div class="section__nouvelles accueil__title">Premières Nouvelles</div>

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
<div class="section__temoignages__titre">Témoignages</div>

<div class="mySwiper__temoignages container">
<div class="swiper-wrapper ">
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