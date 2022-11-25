<?php /* Template Name: Apple */ ?>

<?php

get_header(); // Affiche header.php
?>

<div class='enteteIcon dropright show'>

        <a class="deroulant entete__sous-menu btn btn-secondary dropdown-toggle" href="#" role="button"
            id="dropdownMenuLink" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Appareils disponible
        </a>
        <div class=' imageConsole dropdown-menu sm ' x-placement="right-start" aria-labelledby="dropdownMenuLink">
            <div class="icon Ipad dropright-item" href="#"><img src="<?php echo get_template_directory_uri(). '\assets\icones\ipad.jfif'; ?>">
                <p>Ipad</p>
            </div>
            <div class="icon phone dropright-item" href="#"><img src="<?php echo get_template_directory_uri(). '\assets\icones\smartphone.png'; ?>">
                <p>Iphone</p>
            </div>
            <div class="icon Macbook lite dropright-item" href="#"><img src="<?php echo get_template_directory_uri(). '\assets\icones\macbook.png'; ?>">
                <p>Macbook</p>
            </div>
        </div>
    </div>

    <div class="produits">
        <div class=" item ipad_1">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\ipad\01_ipad.webp'; ?>"></a>
        <a href="#" class="lienItemP">   
        <div class="itemP">
                <p>Ipad Skin:Astral - Wrap Vinyl Sticker</p>
                <p>$24</p>
            </div>
            </a>
        </div>
        <div class="item ipad_2">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\ipad\02_ipad.webp'; ?>"></a>
        <a href="#" class="lienItemP">     
        <div class="itemP">
                <p>Ipad Skin: Dreama - Wrap Vinyl Sticker</p>
                <p>$24</p>
            </div>
            </a>
        </div>
        <div class="item iphone_1">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\iphone\01_iphone.webp'; ?>"></a>
        <a href="#" class="lienItemP">      
        <div class="itemP">
                <p>Iphone Case TPU: Boho</p>
                <p>$18.95</p>
            </div>
            </a>
        </div>
        <div class="item iphone_2">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\iphone\02_iphone.webp'; ?>"></a>
        <a href="#" class="lienItemP">       
        <div class="itemP">
                <p>Iphone Case TPU: Happy Spring</p>
                <p>$18.95</p>
            </div>
            </a>
        </div>
        <div class="item iphone_3">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\iphone\03_iphone.webp'; ?>"></a>
        <a href="#" class="lienItemP">     
        <div class="itemP">
                <p>Iphone Case TPU: Cat</p>
                <p>$18.95</p>
            </div>
            </a>
        </div>
        <div class="item macbook_1">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\macbook\01_mac.webp'; ?>"></a>
        <a href="#" class="lienItemP">        
        <div class="itemP">
                <p>Macbook Skin Decals: Flora Fashion</p>
                <p>$28</p>
            </div>
            </a>
        </div>
        <div class="item macbook_2">
        <a href="#" class="lienItem"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\macbook\02_mac.webp'; ?>"></a>
        <a href="#" class="lienItemP">    
        <div class="itemP">
                <p>Macbook Skin Decals: Flora Fashion</p>
                <p>$28</p>
            </div>
            </a>
        </div>

    </div>
    <?php get_footer(); // Affiche footer.php 
?>