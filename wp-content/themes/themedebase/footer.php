<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>


<footer>
    <div class="groupePied container mx-auto">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-4 text-center text-lg-start">
                <a class="logoPied" href="<?php echo esc_url( home_url( '/' ) ); // Lien vers la page d'accueil ?>"><img src="<?php echo get_template_directory_uri(). '/assets/icones/logopied.png';?>"><img></a>
            </div>
            <div class="logoPartenaire col-12 col-md-4 text-center">
                <div class="shopify text-lg-start">
                    <a href="https://www.shopify.com/free-trial?utm_campaign=poweredby&utm_medium=shopify&utm_source=onlinestore">
                    <img src="<?php echo get_template_directory_uri(). '/assets/icones/shopify.png'; ?>"></img></a>
                </div>
            
                <div class="nintendo text-lg-center">
                    <a href="https://www.nintendo.com/fr-ca/">
                    <img src="<?php echo get_template_directory_uri().'/assets/icones/nintendo.png'; ?>"></img></a>
                </div>

                <div class="laSource text-lg-end">
                    <a href="https://www.thesource.ca/fr-ca">
                    <img src="<?php echo get_template_directory_uri(). '/assets/icones/lasource.png';?>"></img></a>
                </div>
            </div>

            <div class="reseauxsociaux col-12 col-md-4 text-center text-lg-end">
                <div class="courriel text-center">
                    <a href="mailto:info@zoomhit.ca"><img src="<?php echo get_template_directory_uri().'/assets/icones/reseaux_sociaux/courriel.png'; ?>"><img></a>
                </div>
                <div class="facebook text-center">
                    <a href="https://www.facebook.com/ZoomHitSkins" ><img
                        src="<?php echo get_template_directory_uri().'\assets\icones\reseaux_sociaux\facebook.png'; ?>"></img></a>
                </div>
                <div class="instagram text-center">
                    <a href="https://www.instagram.com/zoomhitskins/"><img
                            src="<?php echo get_template_directory_uri(). '\assets\icones\reseaux_sociaux\instagram.png'; ?>"><img></a>
                </div>
                <div class="telephone text-center">
                    <img src="<?php echo get_template_directory_uri(). '\assets\icones\reseaux_sociaux\telephone.png'; ?>"><img>
                    <a>347-746-0656</a>
                </div>
            </div>
            <div class="col-12 text-center">
                <a class="compagnie">© 2022, ZoomHitskin, Zoomers</a>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
     <!--GSAP 3-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
      <!--Swiper-->
    <link
	rel="stylesheet"
	href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  />
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
 
<script>
    var swiper = new Swiper(".mySwiper", {
      autoplay: {
        delay: 2000,
      },
      direction: 'horizontal',
      loop: 'true',
      effect: 'slide',
    });
    var swiper2 = new Swiper(".mySwiper__temoignages", {
      autoplay: {
        delay: 5000,
      },
      direction: 'horizontal',
      loop: 'true',
      effect: 'flip',
    });
gsap.timeline() 
    .from('.heros__boite-description',{opacity:0, duration:1, scale:0, ease:'bounce'})  

    gsap.timeline()
.from('.erreur404__titre',{opacity:0, duration:0.5, scale:0, ease:'back'})  
.from('.erreur404__titre2',{opacity:0, duration:0.5, scale:0, ease:'bounce'})  
.to('.erreur404__titre', { 
    rotation: '360',
    duration: 2,
    repeat: -1,
    ease: 'none',
  }) 
//Map
 gsap.timeline()
 .from('.maps__carte',{rotation:30, duration:1, scale:0, ease:'bounce'})   


 //
 const btnNouvelles = document.querySelector(".btnNouvelles");
let nouvellesHiddenArr = document.querySelectorAll(".item__nouvelle.hidden");

//Help, click bouton pour retirer la classe hidden et afficher les nouvelles avec la classe hidden par défaut.
btnNouvelles.addEventListener('click', function () {
  console.log('hellooooo')
  //Boucler sur les éléments pour afficher toutes les nouvelles cachés quand quelqu'un clique sur le bouton
  //Boucler sur les items Nouvelles avec la classe hidden en premier
  nouvellesHiddenArr.forEach(function (itemNouvelle) {
    itemNouvelle.classList.remove("hidden");
  });

  //Cacher le bouton voir plus de nouvelles et montrer le bouton retour
  btnNouvelles.classList.add("hidden");
});

</script>
</body>



</html>
