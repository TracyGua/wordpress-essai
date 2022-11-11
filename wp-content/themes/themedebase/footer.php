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
                <a class="logoPied" href="index.html"><img src="..\medias\icones\logopied.png"><img></a>
            </div>
            <div class="logoPartenaire col-12 col-md-4 text-center">
                <div class="shopify text-lg-start">
                    <a href="https://www.facebook.com/ZoomHitSkins">
                    <img src="medias/icones/shopify.png"></img></a>
                </div>
            
                <div class="nintendo text-lg-center">
                    <a href="https://www.nintendo.com/fr-ca/">
                    <img src="medias/icones/nintendo.png"></img></a>
                </div>

                <div class="laSource text-lg-end">
                    <a href="https://www.thesource.ca/fr-ca">
                    <img src="medias/icones/lasource.png"></img></a>
                </div>
            </div>

            <div class="reseauxsociaux col-12 col-md-4 text-center text-lg-end">
                <div class="courriel text-center">
                    <a href="mailto:info@zoomhit.ca"><img src="medias\icones\reseaux_sociaux\courriel.png"><img></a>
                </div>
                <div class="facebook text-center">
                    <a href="https://www.shopify.com/free-trial?utm_campaign=poweredby&utm_medium=shopify&utm_source=onlinestore" ><img
                        src="medias\icones\reseaux_sociaux\facebook.png"></img></a>
                </div>
                <div class="instagram text-center">
                    <a href="https://www.instagram.com/zoomhitskins/"><img
                            src="medias\icones\reseaux_sociaux\instagram.png"><img></a>
                </div>
                <div class="telephone text-center">
                    <img src="medias\icones\reseaux_sociaux\telephone.png"><img>
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

</body>
</html>
