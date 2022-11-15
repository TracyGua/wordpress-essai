<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<main>
<article class="row">
        <section class="heros__boite-description col-md-6">
            <h1 class="heros__titre-1">Des skins pour tous vos appareils!</h1>
            <p class="heros__desc">ZoomHitskin propose une variété de décals, d'emballages et d'habillages de haute qualité pour consoles de jeux et appareils électroniques fabriqués avec du vinyle 3M pour donner à vos appareils une finition impeccable et brillante garantie pour durer, en particulier lors de sessions de jeu intenses. Tous nos skins 3M en vinyle sont faciles à installer et complètement amovibles sans laisser de résidus, vous laissant plus de temps pour effectuer une danse Fortnite tout en admirant le decal sur votre appareil. Des didacticiels sont disponibles sur notre chaîne YouTube.
            </p>
        </section>
  

            <div class="swiper col-md-6">
                <div class="swiper-wrapper">
                  <div class="swiper-slide no1"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/ipad/01_ipad.webp'; ?>" alt="L'image est innaccessible"></div>
                  <div class="swiper-slide no3"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/iphone/01_iphone.webp'; ?>" alt="L'image est innaccessible">    </div>
                  <div class="swiper-slide no4"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/iphone/02_iphone.webp'; ?>" alt="L'image est innaccessible"></div>
                  <div class="swiper-slide no1"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/ps4/01_ps4.webp'; ?>" alt="L'image est innaccessible"></div>
                  <div class="swiper-slide no3"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/ps4/02_ps4.webp'; ?>" alt="L'image est innaccessible"></div>
                  <div class="swiper-slide no3"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/switch_lite/01_lite.webp'; ?>" alt="L'image est innaccessible">    </div>
                  <div class="swiper-slide no4"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/switch_lite/02_lite.webp'; ?>" alt="L'image est innaccessible"></div>
                  <div class="swiper-slide no1"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/ps5/01_ps5.webp'; ?>" alt="L'image est innaccessible"></div>
                  <div class="swiper-slide no3"><img src="<?php echo get_template_directory_uri(). '/assets/appareils/ps5/02_ps5.webp'; ?>" alt="L'image est innaccessible"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
    
    </article>
   
</main>

<?php get_footer(); ?> 
