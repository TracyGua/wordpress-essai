<?php /* Template Name: Contact */ ?>


<?php

get_header(); // Affiche header.php
?>

<div  class="contact__main" id="idMain">
<section class="container section__contact">

<!-- <div class="row justify-content-center"> -->
    <!-- <div class="section__contact__titre"> -->
        
        <div class="col-4 col-sm-6 col-md-8 col-lg-12">
              
           <h2 class="maps__titre1-carte text-center text-lg-center">Appelez-nous:</h2>
           <p class="maps__titre3-carte text-center text-lg-center">(438)921-7822</p>
            <h2 class="maps__titre-carte text-center text-lg-center">Adresse</h2>
           <p class="maps__titre2-carte text-center text-lg-center">475 Bd de l'Avenir, Laval, QC H7N 5H9</p>
              <div class="maps__carte col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.52438711792!2d-73.72151834860743!3d45.55989243497113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9223815890e79%3A0xe7408a77564697c4!2sColl%C3%A8ge%20Montmorency!5e0!3m2!1sfr!2sca!4v1670008415479!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

        
    <!-- </div> -->
    </div>
    <h1 class="contact__titre text-center text-lg-center">Contactez-nous</h1>
    <!--Manque l'action dans le div du formulaire pour que le bouton fonctionne-->
    <div class="col-4 col-sm-6 col-md-8 col-lg-12">
    <form class="contact__form">
        <div class="form__nom"> 
            <label for="nom">Nom</label>
            <input type="text" id="nom" required>
        </div>
        <br>
        <div class="form__prenom">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" required>
        </div>
        <br>
        <div class="form__courriel">
            <label for="courriel">Courriel</label>
            <input type="text" id="courriel" required>
        </div>
        <br>
        <div class="form__sujet">
            <label for="sujet">Sujet</label>
            <input type="text" id="sujet" required>
        </div>
        <br>
        <div class="form__message">
            <label for="message">Message</label>
            <textarea id="message" required cols="45" rows="5"></textarea>
        </div>
        <br>
        <input type="submit" class="btn__envoyer" value="Envoyer">
    </form>
</div>
<!-- </div> -->
</section>


</div>
<?php get_footer(); // Affiche footer.php 
?>
<!---->

