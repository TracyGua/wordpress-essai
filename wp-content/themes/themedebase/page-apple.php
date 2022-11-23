<?php /* Template Name: Apple */ ?>

<?php

get_header(); // Affiche header.php
?>

    <div class='enteteIcon'>
        <select class="entete__sous-menu">
            <option value='Ipad'>Ipad</option>
            <option value='Iphone'>Iphone</option>
            <option value='Macbook'>Macbook</option>
        </select>

        <div class='imageConsole'>
            <div class="icon Ipad"><img src="<?php echo get_template_directory_uri(). '\assets\icones\ipad.jfif'; ?>">
                <p>Ipad</p>
            </div>
            <div class="icon phone"><img src="<?php echo get_template_directory_uri(). '\assets\icones\smartphone.png'; ?>">
                <p>Iphone</p>
            </div>
            <div class="icon Macbook"><img src="<?php echo get_template_directory_uri(). '\assets\icones\macbook.png'; ?>">
                <p>Macbook</p>
            </div>
        </div>
    </div>
    <div class="produits">
        <div class=" item ipad_1">
            <img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\ipad\01_ipad.webp'; ?>">
            <div class="itemP">
                <p>Ipad Skin:Astral - Wrap Vinyl Sticker</p>
                <p>$24</p>
            </div>
        </div>
        <div class="item ipad_2"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\ipad\02_ipad.webp'; ?>">
            <div class="itemP">
                <p>Ipad Skin: Dreama - Wrap Vinyl Sticker</p>
                <p>$24</p>
            </div>
        </div>
        <div class="item iphone_1"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\iphone\01_iphone.webp'; ?>">
            <div class="itemP">
                <p>Iphone Case TPU: Boho</p>
                <p>$18.95</p>
            </div>
        </div>
        <div class="item iphone_2"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\iphone\02_iphone.webp'; ?>">
            <div class="itemP">
                <p>Iphone Case TPU: Happy Spring</p>
                <p>$18.95</p>
            </div>
        </div>
        <div class="item iphone_3"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\iphone\03_iphone.webp'; ?>">
            <div class="itemP">
                <p>Iphone Case TPU: Cat</p>
                <p>$18.95</p>
            </div>
        </div>
        <div class="item macbook_1"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\macbook\01_mac.webp'; ?>">
            <div class="itemP">
                <p>Macbook Skin Decals: Flora Fashion</p>
                <p>$28</p>
            </div>
        </div>
        <div class="item macbook_2"><img class='imgItem' src="<?php echo get_template_directory_uri(). '\assets\appareils\macbook\02_mac.webp'; ?>">
            <div class="itemP">
                <p>Macbook Skin Decals: Flora Fashion</p>
                <p>$28</p>
            </div>
        </div>

    </div>
    <?php get_footer(); // Affiche footer.php 
?>