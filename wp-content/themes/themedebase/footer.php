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
                <a class="logoPied" href="index.html"><img src="<?php echo get_template_directory_uri(). '/assets/icones/logopied.png';?>"><img></a>
            </div>
            <div class="logoPartenaire col-12 col-md-4 text-center">
                <div class="shopify text-lg-start">
                    <a href="https://www.facebook.com/ZoomHitSkins">
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
                    <a href="https://www.shopify.com/free-trial?utm_campaign=poweredby&utm_medium=shopify&utm_source=onlinestore" ><img
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
   var swiper = new Swiper(".swiper", {
  autoplay: {
    delay: 2000,
  },
  direction: "horizontal",
  loop: "true",
  effect: "slide",
}); 
gsap.timeline() 
    .from('.heros__boite-description',{opacity:0, duration:1, scale:0, ease:'bounce'})  

    gsap.timeline()
.from('.erreur404__titre',{opacity:0, duration:1, scale:0, ease:'back'})  
.from('.erreur404__titre2',{opacity:0, duration:1, scale:0, ease:'bounce'})  

//

let productsArr = document.querySelectorAll(".item");
let namesArr = document.querySelectorAll(".item__name");
let prixArr = document.querySelectorAll(".item__prix");
let imgItem = document.querySelectorAll(".imgItem");
let descArr = [
  "Autocollants Ipad Skin - Astral - Wrap Vinyl Sticker * Skin 3M en matériau de haute qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance * Protégez votre Ipad des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus",
  "Autocollants Ipad Skin - Astral - Wrap Vinyl Sticker * Skin 3M en matériau de haute qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance * Protégez votre Ipad des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus",
  "ANTIDÉRAPANT : revêtement en TPU + microfibre, la finition en silicone offre une prise en main douce et confortable et les empreintes digitales sont facilement essuyées DURABLE : le revêtement en caoutchouc de silicone amortit et protège votre iPhone contre les chocs, les chutes, les chutes, les rayures et les chocs ACCÈS FACILE : des découpes précises sur la coque du téléphone permettent un accès facile à tous les boutons, ports et appareil photo Étui de haute qualité, fabriqué en Amérique du Nord ! Iphone Case TPU: Happy Spring $18.95 Description:",
  "ANTIDÉRAPANT : revêtement en TPU + microfibre, la finition en silicone offre une prise en main douce et confortable et les empreintes digitales sont facilement essuyées DURABLE : le revêtement en caoutchouc de silicone amortit et protège votre iPhone contre les chocs, les chutes, les chutes, les rayures et les chocs ACCÈS FACILE : des découpes précises sur la coque du téléphone permettent un accès facile à tous les boutons, ports et appareil photo Étui de haute qualité, fabriqué en Amérique du Nord !",
  "ANTIDÉRAPANT : revêtement en TPU + microfibre, la finition en silicone offre une prise en main douce et confortable et les empreintes digitales sont facilement essuyées DURABLE : le revêtement en caoutchouc de silicone amortit et protège votre iPhone contre les chocs, les chutes, les chutes, les rayures et les chocs ACCÈS FACILE : des découpes précises sur la coque du téléphone permettent un accès facile à tous les boutons, ports et appareil photo Étui de haute qualité, fabriqué en Amérique du Nord !",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Décalcomanies 3M en matériau de haute qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement * Installation facile, design élégant et tendance * Protégez votre Macbook des rayures et de la poussière * Peut être facilement et complètement retiré sans laisser de résidus *Appareil non inclus Macbook",
  "* Décalcomanies 3M en matériau de haute qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement * Installation facile, design élégant et tendance * Protégez votre Macbook des rayures et de la poussière * Peut être facilement et complètement retiré sans laisser de résidus *Appareil non inclus Macbook",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "* Skin 3M en matériau de haute technologie de qualité, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus *Console et contrôleur non inclus",
  "*Matériau de haute qualité Autocollant 3M, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus * La console et tous les appareils ne sont pas inclus *",
  "*Matériau de haute qualité Autocollant 3M, vinyle adhésif prédécoupé pour s'adapter parfaitement *Installation facile, design élégant et tendance *Protégez votre console et votre contrôleur des rayures et de la poussière *Peut être facilement et complètement retiré sans laisser de résidus * La console et tous les appareils ne sont pas inclus *",
];
//html
let nomSingle = document.querySelector(".single-product__nom");
let prixSingle = document.querySelector(".single-product__prix");
let descSingle = document.querySelector(".single-product__description");
let imgSingle = document.querySelector(".single-product__boite-image");
let num = -1;

namesArr.forEach(function (name) {
  num++;
  localStorage.setItem(`name${num}`, name.textContent);
});

let num2 = -1;
imgItem.forEach(function (img) {
  num2++;
  localStorage.setItem(`img${num2}`, img.src);
});

let num3 = -1;
prixArr.forEach(function (prix) {
  num3++;
  localStorage.setItem(`prix${num3}`, prix.textContent);
});

productsArr.forEach(function (product, index) {
  product.addEventListener("click", function () {
    localStorage.setItem("index", index);
    window.location.href = "single-produit.php";
  });
});
//innerHTML page single
nomSingle.innerHTML = localStorage.getItem(
  `name${localStorage.getItem("index")}`
);
imgSingle.innerHTML = `<img class="single-product__image" src="${localStorage.getItem(
  `img${localStorage.getItem("index")}`
)}">`;

prixSingle.innerHTML = localStorage.getItem(
  `prix${localStorage.getItem("index")}`
);

</script>
</body>



</html>
