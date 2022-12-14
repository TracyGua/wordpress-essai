<?php /* Template Name: Contact */ ?>


<?php

get_header(); // Affiche header.php
?>

<div  class="contact__main" id="idMain">
        <section class="container section__contact">
            <div class="row justify-content-center align-items-center">
            <div class="section__contact__titre col-4 col-sm-6 col-md-8 col-lg-12">
                    <div>
                       <h2 class="maps__titre1-carte">Appelez-nous:</h2>
                        <p class="maps__titre3-carte">(438)921-7822</p>
                        <h3 class="maps__titre-carte">Adresse</h3>
                        <p class="maps__titre2-carte">475 Bd de l'Avenir, Laval, QC H7N 5H9</p>
                        <div class="maps__carte">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.52438711792!2d-73.72151834860743!3d45.55989243497113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9223815890e79%3A0xe7408a77564697c4!2sColl%C3%A8ge%20Montmorency!5e0!3m2!1sfr!2sca!4v1670008415479!5m2!1sfr!2sca" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <h1 class="contact__titre text-center text-lg-center">Contactez-nous</h1>
                </div>
            
                <form class="contact__form col-lg-12 col-md-6 col-sm-3">
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
        </section>


</div>
<?php get_footer(); // Affiche footer.php 
?>
<!---->

